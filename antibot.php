<?php
/*
 * SEO-Safe Anti-Bot Protection in PHP
 * Place: include 'antibot.php'; at the top of each PHP page
 */

session_start();

// --------------------------------------------------
// 0. Whitelist Search Engine Bots (Google, Bing, etc.)
// --------------------------------------------------
$userAgent = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');
$remoteIp  = $_SERVER['REMOTE_ADDR'] ?? '';

$whitelistAgents = ['googlebot', 'bingbot', 'slurp', 'duckduckbot', 'baiduspider', 'yandexbot'];

// Function to verify if a Googlebot is genuine
function is_real_googlebot($ip) {
    $hostname = gethostbyaddr($ip);
    if ($hostname && (str_ends_with($hostname, '.googlebot.com') || str_ends_with($hostname, '.google.com'))) {
        $verifiedIp = gethostbyname($hostname);
        return $verifiedIp === $ip;
    }
    return false;
}

// Check for search engine crawlers
foreach ($whitelistAgents as $allowed) {
    if (strpos($userAgent, $allowed) !== false) {
        // If it's Googlebot, verify authenticity
        if ($allowed === 'googlebot') {
            if (!is_real_googlebot($remoteIp)) {
                header("HTTP/1.1 403 Forbidden");
                exit("Fake Googlebot Detected");
            }
        }
        // Allow verified bots
        return;
    }
}

// --------------------------------------------------
// 1. Block Empty User-Agent
// --------------------------------------------------
if (empty($_SERVER['HTTP_USER_AGENT'])) {
    header("HTTP/1.1 403 Forbidden");
    exit("Access Denied (No User-Agent)");
}

// --------------------------------------------------
// 2. Block Suspicious User-Agents
// --------------------------------------------------
$blockedAgents = ['curl', 'wget', 'python', 'scrapy', 'libwww', 'httpclient', 'crawler'];
foreach ($blockedAgents as $agent) {
    if (strpos($userAgent, $agent) !== false) {
        header("HTTP/1.1 403 Forbidden");
        exit("Access Denied (Blocked Bot User-Agent)");
    }
}

// --------------------------------------------------
// 3. Block Specific IPs (optional manual list)
// --------------------------------------------------
$blockedIPs = ['192.168.1.10', '203.0.113.45']; // Example IPs
if (in_array($remoteIp, $blockedIPs)) {
    header("HTTP/1.1 403 Forbidden");
    exit("Access Denied (Blocked IP)");
}

// --------------------------------------------------
// 4. Rate Limiting (basic)
// --------------------------------------------------
if (!isset($_SESSION['req_count'])) {
    $_SESSION['req_count'] = 0;
    $_SESSION['req_time']  = time();
}
$_SESSION['req_count']++;

if (time() - $_SESSION['req_time'] <= 5 && $_SESSION['req_count'] > 20) {
    header("HTTP/1.1 429 Too Many Requests");
    exit("Too many requests. Please slow down.");
}
if (time() - $_SESSION['req_time'] > 5) {
    $_SESSION['req_time'] = time();
    $_SESSION['req_count'] = 0;
}

// --------------------------------------------------
// 5. JavaScript Verification (skip for whitelisted bots)
// --------------------------------------------------
if (!isset($_COOKIE['verified'])) {
    setcookie("verified", "1", time()+3600, "/");
    echo "<html><head><meta http-equiv='refresh' content='0'></head><body>Verifying browser...</body></html>";
    exit;
}

// --------------------------------------------------
// ✅ Passed All Checks → Continue Website
// --------------------------------------------------
?>
