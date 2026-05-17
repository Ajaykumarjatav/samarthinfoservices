<?php
session_start();

// Define base URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$base_url = $protocol . $_SERVER['HTTP_HOST'];
$site_url = $base_url . '/';

// Get URL
$url = isset($_GET['url']) ? $_GET['url'] : '/';
$url = trim($url, '/');

// Debug
// error_log("Requested URL: $url");

// ============================================
// 2. HANDLE OTHER DIRECT FILES
// ============================================
$direct_files = [
    'create.php', 
    'faq.php',
    'thank-you.php',
    'sitemap.xml',
    'robots.txt',
    'antibot.php'
];

// Check if it's a direct file that should bypass routing
if (in_array($url, $direct_files)) {
    $file_path = __DIR__ . '/' . $url;
    if (file_exists($file_path) && is_file($file_path)) {
        include $file_path;
        exit;
    }
}

// ============================================
// 3. HANDLE ASSETS (CSS, JS, IMAGES)
// ============================================
if (preg_match('/\.(css|js|png|jpg|jpeg|gif|ico|svg|woff|woff2|ttf|eot)$/i', $url)) {
    $file_path = __DIR__ . '/' . $url;
    
    if (file_exists($file_path) && is_file($file_path)) {
        // Set appropriate content type
        $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
        $content_types = [
            'css' => 'text/css',
            'js' => 'application/javascript',
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'ico' => 'image/x-icon',
            'svg' => 'image/svg+xml',
            'woff' => 'font/woff',
            'woff2' => 'font/woff2',
            'ttf' => 'font/ttf',
            'eot' => 'application/vnd.ms-fontobject'
        ];
        
        if (isset($content_types[$ext])) {
            header('Content-Type: ' . $content_types[$ext]);
        }
        
        // Cache control
        header('Cache-Control: public, max-age=86400');
        
        readfile($file_path);
        exit;
    } else {
        http_response_code(404);
        echo "Asset not found: $url";
        exit;
    }
}

// ============================================
// 4. INCLUDE ROUTES
// ============================================
require_once 'routes.php';

// ============================================
// 5. HELPER FUNCTIONS
// ============================================
function route($pattern, $callback, $method = 'GET') {
    global $routes;
    $routes[] = [
        'pattern' => $pattern,
        'callback' => $callback,
        'method' => strtoupper($method)
    ];
}

function asset($path) {
    global $site_url;
    return $site_url . ltrim($path, '/');
}

function url($path = '') {
    global $site_url;
    return $site_url . ltrim($path, '/');
}

function view($view, $data = []) {
    if (!empty($data)) {
        extract($data);
    }
    
    // Include header
    if (file_exists(__DIR__ . '/header.php')) {
        include __DIR__ . '/header.php';
    }
    
    // Include view
    $view_path = __DIR__ . '/' . $view . '.php';
    if (file_exists($view_path)) {
        include $view_path;
    } else {
        echo "<div class='alert alert-danger'>View not found: $view.php</div>";
    }
    
    // Include footer
    if (file_exists(__DIR__ . '/footer.php')) {
        include __DIR__ . '/footer.php';
    }
}

// ============================================
// 6. ROUTE DISPATCHER
// ============================================
function dispatch() {
    global $routes;
    global $url;
    
    $request_method = $_SERVER['REQUEST_METHOD'];
    $matched = false;
    
    foreach ($routes as $route) {
        if ($route['method'] !== 'ANY' && $route['method'] !== $request_method) {
            continue;
        }
        
        $pattern = trim($route['pattern'], '/');
        
        // Exact match
        if ($pattern === $url) {
            $matched = true;
            
            if (is_callable($route['callback'])) {
                $route['callback']();
            } elseif (is_string($route['callback'])) {
                view($route['callback']);
            }
            break;
        }
        
        // Pattern match
        if (strpos($pattern, ':') !== false) {
            $regex = preg_replace('/:(\w+)/', '([^\/]+)', $pattern);
            $regex = str_replace('/', '\/', $regex);
            $regex = '/^' . $regex . '$/';
            
            if (preg_match($regex, $url, $matches)) {
                $matched = true;
                array_shift($matches);
                
                if (is_callable($route['callback'])) {
                    call_user_func_array($route['callback'], $matches);
                } elseif (is_string($route['callback'])) {
                    view($route['callback']);
                }
                break;
            }
        }
    }
    
    if (!$matched) {
        http_response_code(404);
        view('404');
    }
}

// ============================================
// 7. DISPATCH THE ROUTE
// ============================================
dispatch();

if ($url === 'adminer.php') {
    // User is authenticated - PROPERLY LOAD ADMINER
    $adminer_file = __DIR__ . '/adminer.php';
    
    if (file_exists($adminer_file)) {
        // Clear any previous output
        if (ob_get_length()) ob_clean();
        
        // Set headers for adminer
        header_remove('Location'); // Remove any redirect headers
        header('Content-Type: text/html; charset=utf-8');
        
        // Include adminer.php
        require_once $adminer_file;
    } else {
        http_response_code(404);
        echo "Adminer.php not found at: $adminer_file";
    }
    exit;
}