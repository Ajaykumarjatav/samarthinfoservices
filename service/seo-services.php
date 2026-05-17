<?php
$meta_title = 'SEO Services in India | Digital Marketing & Website SEO';
$meta_description = 'Samarth Info Services provides expert SEO services to improve website rankings, organic traffic, and online visibility. Boost your business with proven SEO strategies.';
include '../header.php';
?>
<section class="custom-banner">
    <section class="service-banner">
        <div class="container">
            <div class="service-banner-flex d-flex justify-content-between align-items-center">
                <div class="service-banner-left">
                    <p class="banner-short-name">Search Engine Optimization (SEO)</p>
                    <h1>Improves your website’s organic search visibility and ranking</h1>
                    <ul class="service-banner-list">
                        <li class="d-flex">
                            <img src="<?= image_attr('Content Website.svg') ?>" alt="" class="me-3">
                            <div>
                                <p class="service-banner-list1">Local Business Website</p>
                                <span  class="service-banner-list2">Identify where users drop off and why.</span>
                            </div>
                        </li>
                        <li class="d-flex">
                            <img src="<?= image_attr('E-commerce Website.svg') ?>" alt="" class="me-3">
                            <div>
                                <p class="service-banner-list1">E-commerce Website</p>
                                <span  class="service-banner-list2">Drives targeted traffic to product pages.</span>
                            </div>
                        </li>
                        <li class="d-flex">
                            <img src="<?= image_attr('Local Business Website.svg') ?>" alt="" class="me-3">
                            <div>
                                <p class="service-banner-list1">Blogs/Content Website</p>
                                <span  class="service-banner-list2">Boosts visibility for informational queries.</span>
                            </div>
                        </li>
                        <li class="d-flex">
                            <img src="<?= image_attr('Service Based Website.svg') ?>" alt="" class="me-3">
                            <div>
                                <p class="service-banner-list1">Service Based Website</p>
                                <span  class="service-banner-list2">Attracts online traffic for your service.</span>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="get-right">
                    <p class="get-form-head">Book a FREE consultaion <br>with our experts</p>
                    <form autocomplete="off" id="form-footer" class="m-0" action="/../create.php" method="post">
                        <?php
                        include './form.php';
                        ?>
                    </form>
                </div>
            </div>
            <img src="<?= image_attr('clients.gif') ?>" alt="" class="clirnts-service">
        </div>
    </section>
    <section class="cro-services space100">
        <div class="container">
            <div class="techno-head-flex d-flex justify-content-between align-items-end">
                <div class="title-head text-start">
                    <p class="short-name">Our SEO Services</p>
                    <h2 class="mb-0 text-start">Our Efforts in Organic resutls for business</h2>
                </div>
                <p class="subtitle mb-0 text-start">We include in SEO several additional factors that contribute to a website's success and overall business growth. These are the some factors that improve after effective SEO implementation:</p>
            </div>
            <div class="cro-services-flex d-flex justify-content-between flex-wrap">
                <div class="cro-services-box">
                    <img src="<?= image_attr('On-Page SEO.webp') ?>" alt="" width="100%" class="cro-services-img">
                    <div class="cro-services-detail">
                        <h3>On-Page SEO</h3>
                        <p>Optimizes individual pages to make them relevant to search queries and user-friendly. Focuses on content, keywords, and elements visible to users.</p>
                        <!-- <a href="#">Know More<img src="<?= image_attr('solar-arrow.svg') ?>" alt="" class="ms-2"></a> -->
                    </div>
                </div>
                <div class="cro-services-box">
                    <img src="<?= image_attr('Technical SEO.webp') ?>" alt="" width="100%" class="cro-services-img">
                    <div class="cro-services-detail">
                        <h3>Technical SEO</h3>
                        <p>Ensures the website's backend is crawlable, indexable, and performs well. Basically helps search engines access and understand your content.</p>
                        <!-- <a href="#">Know More<img src="<?= image_attr('solar-arrow.svg') ?>" alt="" class="ms-2"></a> -->
                    </div>
                </div>
                <div class="cro-services-box">
                    <img src="<?= image_attr('Off-Page SEO.webp') ?>" alt="" width="100%" class="cro-services-img">
                    <div class="cro-services-detail">
                        <h3>Off-Page SEO</h3>
                        <p>Earning backlinks from reputable sites. Activities outside your website to build authority and trust signals using Social media, Influencer collaborations.</p>
                        <!-- <a href="#">Know More<img src="<?= image_attr('solar-arrow.svg') ?>" alt="" class="ms-2"></a> -->
                    </div>
                </div>
                <div class="cro-services-box">
                    <img src="<?= image_attr('Local SEO.webp') ?>" alt="" width="100%" class="cro-services-img">
                    <div class="cro-services-detail">
                        <h3>Local SEO</h3>
                        <p>Ideal for those businesses how have physical location. Targets location-based searches, optimizing Google Business Profile, local keywords, and reviews.</p>
                        <!-- <a href="#">Know More<img src="<?= image_attr('solar-arrow.svg') ?>" alt="" class="ms-2"></a> -->
                    </div>
                </div>
                <div class="cro-services-box">
                    <img src="<?= image_attr('E-commerce SEO.webp') ?>" alt="" width="100%" class="cro-services-img">
                    <div class="cro-services-detail">
                        <h3>E-commerce SEO</h3>
                        <p>Targets online stores, focusing on product pages and categories. Includes optimizing for keywords, faceted navigation, reviews, and seasonal trends.</p>
                        <!-- <a href="#">Know More<img src="<?= image_attr('solar-arrow.svg') ?>" alt="" class="ms-2"></a> -->
                    </div>
                </div>
                <div class="cro-services-box">
                    <img src="<?= image_attr('App Store Optimization.webp') ?>" alt="" width="100%" class="cro-services-img">
                    <div class="cro-services-detail">
                        <h3>App Store Optimization</h3>
                        <p>Similar to SEO but for mobile apps in stores like Google Play or Apple App Store, focusing on keywords in titles, descriptions, icons, and reviews.</p>
                        <!-- <a href="#">Know More<img src="<?= image_attr('solar-arrow.svg') ?>" alt="" class="ms-2"></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="key-matric space100">
        <div class="container">
            <div class="title-head text-center">
                <p class="short-name">We Improve</p>
                <h2 class="mb-2">SEO improving Key Metrics</h2>
                <p class="subtitle ">We optimize your website for maximum conversions by improving:</p>
            </div>
            <div class="key-matric-flex d-flex justify-content-between">
                <div class="key-matric-box">
                    <img src="<?= image_attr('Increased Visibility.svg') ?>" alt="">
                    <p class="key-matric-head">Increased Visibility</p>
                    <p class="key-matric-subhead">website rank higher on SERP</p>
                </div>
                <div class="key-matric-box">
                    <img src="<?= image_attr('Referral Traffic.svg') ?>" alt="">
                    <p class="key-matric-head">Referral Traffic</p>
                    <p class="key-matric-subhead">Traffic from other websites</p>
                </div>
                <div class="key-matric-box">
                    <img src="<?= image_attr('Builds Credibility.svg') ?>" alt="">
                    <p class="key-matric-head">Builds Credibility</p>
                    <p class="key-matric-subhead">Experience, Expertise, Authority, Trust</p>
                </div>
                <div class="key-matric-box">
                    <img src="<?= image_attr('Diverse Audiences.svg') ?>" alt="">
                    <p class="key-matric-head">Diverse Audiences</p>
                    <p class="key-matric-subhead">Get unique behaviors and preferences users</p>
                </div>
            </div>
            <div class="about-btn about-btn-green text-center">
                <a href="javascript:void(0);" class="modal-button" data-title="PPC Strategy" data-bs-toggle="modal" data-image="Branding.webp" data-bs-target="#exampleModal">Optimize Your Page<figure class="ms-2 mb-0"><img src="<?= image_attr('arrow.gif') ?>" alt=""></figure> </a>
            </div>
        </div>
    </section>
    <section class="cro-awards space100">
        <div class="container">
            <div class="techno-head-flex d-flex justify-content-between align-items-end">
                <div class="title-head text-start">
                    <p class="short-name">Awards</p>
                    <h2 class="mb-0 text-start">Award winning marketing agency</h2>
                </div>
                <p class="subtitle mb-0 text-start">A 360-degree Branding, Advertising, Creative, Social Media, Digital Marketing and Communication Agency</p>
            </div>
            <div class="awardsflex d-flex justify-content-between">
                <div class="awardsflex-box d-flex justify-content-between align-items-center">
                    <img src="<?= image_attr('amazon-ads-partner.png') ?>" alt="" width="100%">
                </div>
                <div class="awardsflex-box d-flex justify-content-between align-items-center">
                    <img src="<?= image_attr('amazon-ads-partner2.png') ?>" alt="" width="100%">
                </div>
                <div class="awardsflex-box d-flex justify-content-between align-items-center">
                    <img src="<?= image_attr('amazon-ads-partner3.png') ?>" alt="" width="100%">
                </div>
                <div class="awardsflex-box d-flex justify-content-between align-items-center">
                    <img src="<?= image_attr('amazon-ads-partner4.png') ?>" alt="" width="100%">
                </div>
            </div>
        </div>
    </section>
    <section class="brand-promotion space100 brand-promotion-cro">
        <div class="container">
            <div class="brand-flex d-flex justify-content-between align-items-center">
                <div class="brand-right">
                    <div class="title-head text-start">
                        <p class="short-name">CRO for Lead Generation</p>
                        <h2 class="mb-4 text-start">Convert Visitors into Valuable Leads</h2>
                        <p class="subtitle text-start">We improve your landing pages, forms, and calls-to-action to turn visitors into valuable prospects quickly and efficiently.</p>
                    </div>
                    <img src="<?= image_attr('cro-lead1.png') ?>" alt="" width="100%" class="d-md-none d-block">
                    <ul class="brand-flex-list">
                        <li><img src="<?= image_attr('cro-lead3.svg') ?>" class="me-2" alt="">Analyze visitor behavior</li>
                        <li><img src="<?= image_attr('cro-lead3.svg') ?>" class="me-2" alt="">Analyze visitor behavior</li>
                        <li><img src="<?= image_attr('cro-lead3.svg') ?>" class="me-2" alt="">Analyze visitor behavior</li>
                        <li><img src="<?= image_attr('cro-lead3.svg') ?>" class="me-2" alt="">Analyze visitor behavior</li>
                    </ul>
                    <div class="about-btn about-btn-green text-left">
                        <a href="javascript:void(0);" class="modal-button" data-title="PPC Strategy" data-bs-toggle="modal" data-image="Branding.webp" data-bs-target="#exampleModal">Optimize Your Page<figure class="ms-2 mb-0"><img src="<?= image_attr('arrow.gif') ?>" alt=""></figure> </a>
                    </div>
                </div>
                <div class="brand-left d-md-block d-none">
                    <img src="<?= image_attr('Convert Visitors into Valuable Leads.webp') ?>" alt="" width="100%">
                </div>
            </div>
        </div>
    </section>
    <section class="brand-promotion space100 brand-promotion-cro pt-0">
        <div class="container">
            <div class="brand-flex d-flex justify-content-between align-items-center">
                <div class="brand-left d-md-block d-none">
                    <img src="<?= image_attr('Optimize Your Online Store for More Sales.webp') ?>" alt="" width="100%">
                </div>
                <div class="brand-right">
                    <div class="title-head text-start">
                        <p class="short-name">CRO for eCommerce</p>
                        <h2 class="mb-4 text-start">Optimize Your Online Store for More Sales</h2>
                        <p class="subtitle text-start">We optimize product pages, checkout flows, and promotions to convert more browsers into happy customers.</p>
                    </div>
                    <img src="<?= image_attr('cro-lead1.png') ?>" alt="" width="100%" class="d-md-none d-block">
                    <ul class="brand-flex-list">
                        <li><img src="<?= image_attr('cro-lead3.svg') ?>" class="me-2" alt="">Analyze visitor behavior</li>
                        <li><img src="<?= image_attr('cro-lead3.svg') ?>" class="me-2" alt="">Analyze visitor behavior</li>
                        <li><img src="<?= image_attr('cro-lead3.svg') ?>" class="me-2" alt="">Analyze visitor behavior</li>
                        <li><img src="<?= image_attr('cro-lead3.svg') ?>" class="me-2" alt="">Analyze visitor behavior</li>
                    </ul>
                    <div class="about-btn about-btn-green text-left">
                        <a href="javascript:void(0);" class="modal-button" data-title="PPC Strategy" data-bs-toggle="modal" data-image="Branding.webp" data-bs-target="#exampleModal">Optimize Your Page<figure class="ms-2 mb-0"><img src="<?= image_attr('arrow.gif') ?>" alt=""></figure> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="struggle-cta struggle-cta1">
        <div class="container">
            <div class="struggle-cta-flex d-flex justify-content-between align-items-center">
                <div class="struggle-cta-left">
                    <p class="struggle-cta-head">Struggling with low conversions?</p>
                    <p class="struggle-cta-subhead">Let us audit your funnel, analyze user behavior, and benchmark against top competitors to find exactly what’s holding you back.</p>
                </div>
                <a href="javascript:void(0);" class="modal-button struggle-cta-btn" data-title="PPC Strategy" data-image="Branding.webp" data-bs-toggle="modal" data-bs-target="#exampleModal">Optimize Your Page</a>
            </div>
        </div>
    </section>
</section>
<section class="real-result space150 real-result-service">
    <div class="container">
        <div class="techno-head-flex d-flex justify-content-between align-items-end">
            <div class="title-head text-start">
                <p class="short-name">Real Results</p>
                <h2 class="mb-0 text-start">How We Scale Businesses with Innovative Marketing</h2>
            </div>
            <p class="subtitle mb-0 text-start">See how our data-driven PPC strategies have helped businesses grow, increase conversions, & maximize ROI.</p>
        </div>
        <div class="case-study-slider">
            <div class="slider-box d-flex justify-content-between">
                <div class="slider-left">
                    <img src="<?= image_attr('case-icon1.png') ?>" alt="">
                    <p class="case-title">Home decor B2B & B2C brand</p>
                    <p class="case-industry">Industry <strong> Ecommerce</strong></p>
                    <div class="d-flex case-flex-first">
                        <p class="case-type">Challenges</p>
                        <p class="case-type-two">Struggled with high ad spend & low<br> conversion rates</p>
                    </div>
                    <div class="d-flex case-flex-first case-flex-two">
                        <p class="case-type">Solutions</p>
                        <div class="case-flex-solution d-flex">
                            <p class="solution-text">
                                <img src="<?= image_attr('case2.svg') ?>" alt="" class="me-3">
                                <span>Optimise products feed and design.</span>
                            </p>
                            <p class="solution-text">
                                <img src="<?= image_attr('case2.svg') ?>" alt="" class="me-3">
                                <span>Conducted A/B testing on audience and creatives</span>
                            </p>
                        </div>
                    </div>
                    <div class="case-count d-flex align-items-start">
                        <div class="case-count-box">
                            <p class="cse-number"><span>400%</span> <img src="<?= image_attr('case3.png') ?>" alt=""></p>
                            <p class="case-count-detail">increase in ROAS</p>
                        </div>
                        <div class="case-count-box">
                            <p class="cse-number"><span>20%</span> <img src="<?= image_attr('case4.png') ?>" alt=""></p>
                            <p class="case-count-detail">lower cost per conversion</p>
                        </div>
                    </div>
                </div>
                <div class="slider-right position-relative">
                    <img src="<?= image_attr('case7.png') ?>" alt="" width="100%">
                    <img src="<?= image_attr('case6.png') ?>" alt="" width="100%" class="position-absolute eye-view">
                </div>
            </div>
            <div class="slider-box d-flex justify-content-between">
                <div class="slider-left">
                    <img src="<?= image_attr('case-icon2.png') ?>" alt="">
                    <p class="case-title">Twinning fashion clothing B2C brand</p>
                    <p class="case-industry">Industry <strong> Ecommerce</strong></p>
                    <div class="d-flex case-flex-first">
                        <p class="case-type">Challenges</p>
                        <p class="case-type-two">Struggled with high ad spend & low<br> conversion rates</p>
                    </div>
                    <div class="d-flex case-flex-first case-flex-two">
                        <p class="case-type">Solutions</p>
                        <div class="case-flex-solution d-flex">
                            <p class="solution-text">
                                <img src="<?= image_attr('case2.svg') ?>" alt="" class="me-3">
                                <span>Implemented Smart Shopping Ads & optimized product feeds</span>
                            </p>
                            <p class="solution-text">
                                <img src="<?= image_attr('case2.svg') ?>" alt="" class="me-3">
                                <span>Conducted A/B testing on ad creatives and landing pages</span>
                            </p>
                        </div>
                    </div>
                    <div class="case-count d-flex align-items-start">
                        <div class="case-count-box">
                            <p class="cse-number"><span>300%</span> <img src="<?= image_attr('case3.png') ?>" alt=""></p>
                            <p class="case-count-detail">increase in ROAS</p>
                        </div>
                        <div class="case-count-box">
                            <p class="cse-number"><span>47%</span> <img src="<?= image_attr('case4.png') ?>" alt=""></p>
                            <p class="case-count-detail">lower cost per conversion</p>
                        </div>
                    </div>
                </div>
                <div class="slider-right position-relative">
                    <img src="<?= image_attr('case8.png') ?>" alt="" width="100%">
                    <img src="<?= image_attr('case6.png') ?>" alt="" width="100%" class="position-absolute eye-view">
                </div>
            </div>
            <div class="slider-box d-flex justify-content-between">
                <div class="slider-left">
                    <img src="<?= image_attr('case-icon3.png') ?>" alt="">
                    <p class="case-title">Social Media Marketing Agency</p>
                    <p class="case-industry">Industry <strong> Digital Marketing</strong></p>
                    <div class="d-flex case-flex-first">
                        <p class="case-type">Challenges</p>
                        <p class="case-type-two">Struggled with high ad spend & low<br> conversion rates</p>
                    </div>
                    <div class="d-flex case-flex-first case-flex-two">
                        <p class="case-type">Solutions</p>
                        <div class="case-flex-solution d-flex">
                            <p class="solution-text">
                                <img src="<?= image_attr('case2.svg') ?>" alt="" class="me-3">
                                <span>Implemented Smart Shopping Ads & optimized product feeds</span>
                            </p>
                            <p class="solution-text">
                                <img src="<?= image_attr('case2.svg') ?>" alt="" class="me-3">
                                <span>Conducted A/B testing on ad creatives and landing pages</span>
                            </p>
                        </div>
                    </div>
                    <div class="case-count d-flex align-items-start">
                        <div class="case-count-box">
                            <p class="cse-number"><span>300%</span> <img src="<?= image_attr('case3.png') ?>" alt=""></p>
                            <p class="case-count-detail">increase in ROAS</p>
                        </div>
                        <div class="case-count-box">
                            <p class="cse-number"><span>47%</span> <img src="<?= image_attr('case4.png') ?>" alt=""></p>
                            <p class="case-count-detail">lower cost per conversion</p>
                        </div>
                    </div>
                </div>
                <div class="slider-right position-relative">
                    <img src="<?= image_attr('case9.png') ?>" alt="" width="100%">
                    <img src="<?= image_attr('case6.png') ?>" alt="" width="100%" class="position-absolute eye-view">
                </div>
            </div>

            <div class="slider-box d-flex justify-content-between">
                <div class="slider-left">
                    <img src="<?= image_attr('case-icon4.png') ?>" alt="">
                    <p class="case-title">A Healthy Snacks B2C brand</p>
                    <p class="case-industry">Industry <strong> Ecommerce</strong></p>
                    <div class="d-flex case-flex-first">
                        <p class="case-type">Challenges</p>
                        <p class="case-type-two">Struggled with high ad spend & low<br> conversion rates</p>
                    </div>
                    <div class="d-flex case-flex-first case-flex-two">
                        <p class="case-type">Solutions</p>
                        <div class="case-flex-solution d-flex">
                            <p class="solution-text">
                                <img src="<?= image_attr('case2.svg') ?>" alt="" class="me-3">
                                <span>Implemented Smart Shopping Ads & optimized product feeds</span>
                            </p>
                            <p class="solution-text">
                                <img src="<?= image_attr('case2.svg') ?>" alt="" class="me-3">
                                <span>Conducted A/B testing on ad creatives and landing pages</span>
                            </p>
                        </div>
                    </div>
                    <div class="case-count d-flex align-items-start">
                        <div class="case-count-box">
                            <p class="cse-number"><span>300%</span> <img src="<?= image_attr('case3.png') ?>" alt=""></p>
                            <p class="case-count-detail">increase in ROAS</p>
                        </div>
                        <div class="case-count-box">
                            <p class="cse-number"><span>47%</span> <img src="<?= image_attr('case4.png') ?>" alt=""></p>
                            <p class="case-count-detail">lower cost per conversion</p>
                        </div>
                    </div>
                </div>
                <div class="slider-right position-relative">
                    <img src="<?= image_attr('case10.png') ?>" alt="" width="100%">
                    <img src="<?= image_attr('case6.png') ?>" alt="" width="100%" class="position-absolute eye-view">
                </div>
            </div>
            <div class="slider-box d-flex justify-content-between">
                <div class="slider-left">
                    <img src="<?= image_attr('case-icon5.png') ?>" alt="">
                    <p class="case-title">A offline Tuition Classes</p>
                    <p class="case-industry">Industry <strong> Education</strong></p>
                    <div class="d-flex case-flex-first">
                        <p class="case-type">Challenges</p>
                        <p class="case-type-two">Struggled with high ad spend & low<br> conversion rates</p>
                    </div>
                    <div class="d-flex case-flex-first case-flex-two">
                        <p class="case-type">Solutions</p>
                        <div class="case-flex-solution d-flex">
                            <p class="solution-text">
                                <img src="<?= image_attr('case2.svg') ?>" alt="" class="me-3">
                                <span>Implemented Smart Shopping Ads & optimized product feeds</span>
                            </p>
                            <p class="solution-text">
                                <img src="<?= image_attr('case2.svg') ?>" alt="" class="me-3">
                                <span>Conducted A/B testing on ad creatives and landing pages</span>
                            </p>
                        </div>
                    </div>
                    <div class="case-count d-flex align-items-start">
                        <div class="case-count-box">
                            <p class="cse-number"><span>300%</span> <img src="<?= image_attr('case3.png') ?>" alt=""></p>
                            <p class="case-count-detail">increase in ROAS</p>
                        </div>
                        <div class="case-count-box">
                            <p class="cse-number"><span>47%</span> <img src="<?= image_attr('case4.png') ?>" alt=""></p>
                            <p class="case-count-detail">lower cost per conversion</p>
                        </div>
                    </div>
                </div>
                <div class="slider-right position-relative">
                    <img src="<?= image_attr('case13.png') ?>" alt="" width="100%">
                    <img src="<?= image_attr('case6.png') ?>" alt="" width="100%" class="position-absolute eye-view">
                </div>
            </div>
            <div class="slider-box d-flex justify-content-between">
                <div class="slider-left">
                    <img src="<?= image_attr('case-icon6.png') ?>" alt="">
                    <p class="case-title">A Home decor B2C Brand</p>
                    <p class="case-industry">Industry <strong> Ecommerce</strong></p>
                    <div class="d-flex case-flex-first">
                        <p class="case-type">Challenges</p>
                        <p class="case-type-two">Struggled with high ad spend & low<br> conversion rates</p>
                    </div>
                    <div class="d-flex case-flex-first case-flex-two">
                        <p class="case-type">Solutions</p>
                        <div class="case-flex-solution d-flex">
                            <p class="solution-text">
                                <img src="<?= image_attr('case2.svg') ?>" alt="" class="me-3">
                                <span>Implemented Smart Shopping Ads & optimized product feeds</span>
                            </p>
                            <p class="solution-text">
                                <img src="<?= image_attr('case2.svg') ?>" alt="" class="me-3">
                                <span>Conducted A/B testing on ad creatives and landing pages</span>
                            </p>
                        </div>
                    </div>
                    <div class="case-count d-flex align-items-start">
                        <div class="case-count-box">
                            <p class="cse-number"><span>300%</span> <img src="<?= image_attr('case3.png') ?>" alt=""></p>
                            <p class="case-count-detail">increase in ROAS</p>
                        </div>
                        <div class="case-count-box">
                            <p class="cse-number"><span>47%</span> <img src="<?= image_attr('case4.png') ?>" alt=""></p>
                            <p class="case-count-detail">lower cost per conversion</p>
                        </div>
                    </div>
                </div>
                <div class="slider-right position-relative">
                    <img src="<?= image_attr('case11.png') ?>" alt="" width="100%">
                    <img src="<?= image_attr('case6.png') ?>" alt="" width="100%" class="position-absolute eye-view">
                </div>
            </div>
            <div class="slider-box d-flex justify-content-between">
                <div class="slider-left">
                    <img src="<?= image_attr('case-icon7.png') ?>" alt="">
                    <p class="case-title">A Real estate Company</p>
                    <p class="case-industry">Industry <strong> Real estate</strong></p>
                    <div class="d-flex case-flex-first">
                        <p class="case-type">Challenges</p>
                        <p class="case-type-two">Struggled with high ad spend & low<br> conversion rates</p>
                    </div>
                    <div class="d-flex case-flex-first case-flex-two">
                        <p class="case-type">Solutions</p>
                        <div class="case-flex-solution d-flex">
                            <p class="solution-text">
                                <img src="<?= image_attr('case2.svg') ?>" alt="" class="me-3">
                                <span>Implemented Smart Shopping Ads & optimized product feeds</span>
                            </p>
                            <p class="solution-text">
                                <img src="<?= image_attr('case2.svg') ?>" alt="" class="me-3">
                                <span>Conducted A/B testing on ad creatives and landing pages</span>
                            </p>
                        </div>
                    </div>
                    <div class="case-count d-flex align-items-start">
                        <div class="case-count-box">
                            <p class="cse-number"><span>300%</span> <img src="<?= image_attr('case3.png') ?>" alt=""></p>
                            <p class="case-count-detail">increase in ROAS</p>
                        </div>
                        <div class="case-count-box">
                            <p class="cse-number"><span>47%</span> <img src="<?= image_attr('case4.png') ?>" alt=""></p>
                            <p class="case-count-detail">lower cost per conversion</p>
                        </div>
                    </div>
                </div>
                <div class="slider-right position-relative">
                    <img src="<?= image_attr('case12.png') ?>" alt="" width="100%">
                    <img src="<?= image_attr('case6.png') ?>" alt="" width="100%" class="position-absolute eye-view">
                </div>
            </div>
        </div>
        <div class="about-btn about-btn-green text-center">
            <a href="javascript:void(0);" class="modal-button" data-title="PPC Strategy" data-bs-toggle="modal" data-image="Branding.webp" data-bs-target="#exampleModal">View More Case Studies<figure  class="ms-2 mb-0"><img src="<?= image_attr('arrow.gif') ?>" alt=""></figure> </a>
        </div>
    </div>
</section>
<section class="service-testimonial space100">
    <div class="container">
        <div class="title-head">
            <p class="short-name">Testimonials</p>
            <h2 class="mb-3 ">Thousands of Businesses Trust Us</h2>
            <img src="<?= image_attr('service-test.png') ?>" alt="" class="mb-5">
        </div>
        <?php
        include 'review.php';
        ?>
    </div>
</section>
<?php
include '../faq.php';
require_once __DIR__ . '/../footer.php';
?>

