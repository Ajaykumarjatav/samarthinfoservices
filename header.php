<?php
$canonical_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// -------------------------------------------
// Meta Values (safe defaults)
// -------------------------------------------
$default_title = 'Internet Marketing | Advertising Agency In India';
$default_desc  = 'Samarth Info Services is a full-service digital marketing and advertising agency in India helping businesses grow via PPC, lead generation, social and content marketing.';

$meta_title = isset($meta_title) && is_string($meta_title) && trim($meta_title) !== '' 
                ? $meta_title 
                : $default_title;

$site_suffix = ' | Samarth info services';
if (stripos($meta_title, 'Samarth') === false) {
    $meta_title .= $site_suffix;
}

$meta_description = isset($meta_description) && is_string($meta_description) && trim($meta_description) !== '' 
                    ? $meta_description 
                    : $default_desc;


require_once __DIR__ . '/paths.php';
?>

<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow">
    <title><?php echo htmlspecialchars($meta_title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8'); ?>" />

    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_link, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= $assetBase ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $assetBase ?>css/index.css">
    <link rel="stylesheet" type="text/css" href="<?= $assetBase ?>css/service.css">
    <link rel="stylesheet" type="text/css" href="<?= $assetBase ?>css/aos.css">
    <link rel="stylesheet" type="text/css" href="<?= $assetBase ?>css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?= $assetBase ?>css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?= $assetBase ?>css/industry.css">
   
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="<?= htmlspecialchars($imagesBase, ENT_QUOTES, 'UTF-8') ?>union.svg">
     <!-- <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css"> -->
    
    <script src="<?= $assetBase ?>js/jquery.min.js"></script>  
    <script src="<?= $assetBase ?>js/slick.js"></script> 
    <script src="<?= $assetBase ?>js/bootstrap.min.js"></script>
    <script src="<?= $assetBase ?>js/header-nav.js"></script>
    <script src="<?= $assetBase ?>js/aos.js"></script>
    <script>window.IMAGES_BASE=<?= json_encode($imagesBase, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>;</script>
    
    <!-- <script src="js/slick.js"></script> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');
    </style> 
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KM9ZK4PL');</script>
    <!-- End Google Tag Manager -->
</head>
<body class="body">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KM9ZK4PL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="app-header">
    <div class="container">
        <div class="d-flex align-items-center app-header-bar">
            <div class="logo-left">
                <a href="<?= htmlspecialchars(site_url(), ENT_QUOTES, 'UTF-8') ?>"><img src="<?= image_attr('logo-samarth.png') ?>" alt=""></a>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light py-0 app-header-navbar">
                <div class="app-header-navbar-inner">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0 align-items-center app-header-nav app-header-nav-balanced">
                            <?php include __DIR__ . '/includes/header-services-nav.php'; ?>
                            <?php include __DIR__ . '/includes/header-industries-nav.php'; ?>
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link">Success Stories</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Who we are</a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link">Contact us</a>
                            </li> -->
                            <li class="nav-item about-btn about-btn-green ">
                                <a href="#" class="nav-link modal-button" data-title="PPC Strategy" data-bs-toggle="modal" data-image="About us.webp" data-bs-target="#exampleModal">Get a Proposal<figure  class="ms-2 mb-0"><img src="<?= image_attr('arrow.svg') ?>" alt=""></figure></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>