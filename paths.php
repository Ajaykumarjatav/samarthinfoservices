<?php
/**
 * Site-wide path helpers (assets + internal links).
 */
if (!defined('SITE_PATHS_LOADED')) {
    define('SITE_PATHS_LOADED', true);

    $docRoot = rtrim(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT'] ?? ''), '/');
    $projectRoot = rtrim(str_replace('\\', '/', __DIR__), '/');

    $siteBase = '/';
    if ($docRoot !== '' && strpos($projectRoot, $docRoot) === 0) {
        $relative = trim(substr($projectRoot, strlen($docRoot)), '/');
        if ($relative !== '') {
            $siteBase = '/' . $relative . '/';
        }
    }

    $scriptFile = $_SERVER['SCRIPT_FILENAME'] ?? '';
    $scriptDir = rtrim(str_replace('\\', '/', dirname($scriptFile)), '/');
    if ($scriptDir === $projectRoot || $scriptFile === '') {
        $assetBase = '';
    } else {
        $subPath = trim(str_replace($projectRoot, '', $scriptDir), '/');
        $depth = $subPath === '' ? 0 : substr_count($subPath, '/') + 1;
        $assetBase = str_repeat('../', $depth);
    }

    $imagesBase = $siteBase . 'images/';
    $industryImgBase = $siteBase . 'industry/img/';
    $industryImagesBase = $siteBase . 'industry/images/';
    $publicAssetBase = $siteBase . 'public/asset/';
}

if (!function_exists('public_asset_url')) {
    function public_asset_url(string $path): string
    {
        global $publicAssetBase;
        $path = ltrim(str_replace('\\', '/', $path), '/');
        $segments = array_map('rawurlencode', explode('/', $path));

        return $publicAssetBase . implode('/', $segments);
    }
}

if (!function_exists('public_asset_attr')) {
    function public_asset_attr(string $path): string
    {
        return htmlspecialchars(public_asset_url($path), ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('image_url')) {
    function image_url(string $filename): string
    {
        global $imagesBase;
        $filename = ltrim(str_replace('\\', '/', $filename), '/');

        return $imagesBase . rawurlencode($filename);
    }
}

if (!function_exists('image_attr')) {
    function image_attr(string $filename): string
    {
        return htmlspecialchars(image_url($filename), ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('industry_image_url')) {
    function industry_image_url(string $filename): string
    {
        global $industryImgBase;
        $filename = ltrim(str_replace('\\', '/', $filename), '/');

        return $industryImgBase . rawurlencode($filename);
    }
}

if (!function_exists('industry_image_attr')) {
    function industry_image_attr(string $filename): string
    {
        return htmlspecialchars(industry_image_url($filename), ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('industry_images_attr')) {
    function industry_images_attr(string $filename): string
    {
        global $industryImagesBase;
        $filename = ltrim(str_replace('\\', '/', $filename), '/');

        return htmlspecialchars($industryImagesBase . rawurlencode($filename), ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('site_url')) {
    function site_url(string $path = ''): string
    {
        global $siteBase;
        $path = ltrim(str_replace('\\', '/', $path), '/');
        return $path === '' ? $siteBase : $siteBase . $path;
    }
}

/** @var list<array{label: string, path: string}> */
$serviceNavItems = [
    ['label' => 'Google Ads', 'path' => 'service/google-ads.php'],
    ['label' => 'Paid Ads', 'path' => 'service/paid-ads.php'],
    ['label' => 'Social Media Ads', 'path' => 'service/social-media-ads.php'],
    ['label' => 'Meta Ads', 'path' => 'service/meta-ads.php'],
    ['label' => 'Shopping Ads', 'path' => 'service/shoping-ads.php'],
    ['label' => 'SEO Services', 'path' => 'service/seo-services.php'],
    ['label' => 'Lead Generation', 'path' => 'service/lead-generation.php'],
    ['label' => 'Conversion Rate Optimization', 'path' => 'service/conversion-rate-optimization.php'],
    ['label' => 'App Install Ads', 'path' => 'service/app-install-ads.php'],
];

/** @var list<array{label: string, path: string}> */
$industryNavItems = [
    ['label' => 'Banking & Finance', 'path' => 'industry/banking-finance.php'],
    ['label' => 'E-commerce', 'path' => 'industry/e-commerce.php'],
    ['label' => 'Healthcare', 'path' => 'industry/healthcare.php'],
    ['label' => 'Wholesale', 'path' => 'industry/wholesale.php'],
    ['label' => 'Non Profit', 'path' => 'industry/non-profit.php'],
    ['label' => 'Automotive', 'path' => 'industry/automotive.php'],
    ['label' => 'Logistics', 'path' => 'industry/logistics.php'],
    ['label' => 'Real Estate', 'path' => 'industry/real-state.php'],
    ['label' => 'Food & Restaurant', 'path' => 'industry/food-restorent.php'],
    ['label' => 'Gym & Sports', 'path' => 'industry/gym-sports.php'],
    ['label' => 'Education', 'path' => 'industry/education.php'],
    ['label' => 'Travel', 'path' => 'industry/travel.php'],
];

/** Footer Industries column — keep short (through Automotive). */
$footerIndustryNavItems = array_slice($industryNavItems, 0, 6);

if (!function_exists('nav_is_active')) {
    function nav_is_active(string $path): bool
    {
        $needle = '/' . ltrim(str_replace('\\', '/', $path), '/');
        $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
        return $needle !== '/' && substr($script, -strlen($needle)) === $needle;
    }
}
