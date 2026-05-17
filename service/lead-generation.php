<?php
// Page-specific meta tags. These will be used by header.php when included below.
$meta_title = 'Lead Generation Agency in India | Digital Marketing Experts';
$meta_description = 'Samarth Info Services is a trusted lead generation agency in India. We create data-driven digital marketing and ad strategies to deliver qualified leads that convert.';

include '../header.php';
?>
<section class="custom-banner">
    <section class="service-banner">
        <div class="container">
            <div class="service-banner-flex d-flex justify-content-between align-items-center">
                <div class="service-banner-left">
                    <p class="banner-short-name">Your Lead Generation Solution</p>
                    <h1>We Solve Your Lead Generation Problems</h1>
                    <ul class="service-banner-list">
                        <li class="d-flex">
                            <img src="<?= image_attr('Low-Quality Leads.svg') ?>" alt="" class="me-3">
                            <div>
                                <p class="service-banner-list1">Low-Quality Leads</p>
                                <span  class="service-banner-list2">Drive More High-Quality Leads.</span>
                            </div>
                        </li>
                        <li class="d-flex">
                            <img src="<?= image_attr('High Ad Costs.svg') ?>" alt="" class="me-3">
                            <div>
                                <p class="service-banner-list1">High Ad Costs</p>
                                <span  class="service-banner-list2">Optimize your budget & reducing wasted spend.</span>
                            </div>
                        </li>
                        <li class="d-flex">
                            <img src="<?= image_attr('Inconsistent Results.svg') ?>" alt="" class="me-3">
                            <div>
                                <p class="service-banner-list1">Inconsistent Results</p>
                                <span  class="service-banner-list2">Ensure a steady, predictable lead pipeline.</span>
                            </div>
                        </li>
                        <li class="d-flex">
                            <img src="<?= image_attr('Lack of Expertise.svg') ?>" alt="" class="me-3">
                            <div>
                                <p class="service-banner-list1">Lack of Expertise</p>
                                <span  class="service-banner-list2">We as a certified Experts handle everything</span>
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
                    <p class="short-name">Our Lead Generation Services</p>
                    <h2 class="mb-0 text-start">Struggling to Get Quality Leads?</h2>
                </div>
                <p class="subtitle mb-0 text-start">Stop wasting time and money on ineffective marketing. We help businesses through multipal approch for getting quality leads:</p>
            </div>
            <div class="cro-services-flex d-flex justify-content-between flex-wrap">
                <div class="cro-services-box">
                    <img src="<?= image_attr('PPC Advertising.webp') ?>" alt="" width="100%" class="cro-services-img">
                    <div class="cro-services-detail">
                        <h3>PPC Advertising</h3>
                        <p>Targeted Google Ads drive instant, high-quality leads with optimized budgets for maximum ROI.</p>
                        <!-- <a href="#">Know More<img src="<?= image_attr('solar-arrow.svg') ?>" alt="" class="ms-2"></a> -->
                    </div>
                </div>
                <div class="cro-services-box">
                    <img src="<?= image_attr('Social Media Advertising.webp') ?>" alt="" width="100%" class="cro-services-img">
                    <div class="cro-services-detail">
                        <h3>Social Media Advertising</h3>
                        <p>Engage audiences on Facebook, Instagram, & more with ads that convert prospects into leads.</p>
                        <!-- <a href="#">Know More<img src="<?= image_attr('solar-arrow.svg') ?>" alt="" class="ms-2"></a> -->
                    </div>
                </div>
                <div class="cro-services-box">
                    <img src="<?= image_attr('Affiliate Marketing.webp') ?>" alt="" width="100%" class="cro-services-img">
                    <div class="cro-services-detail">
                        <h3>Affiliate Marketing</h3>
                        <p>Boost leads via trusted referrals with cost-effective programs, paying only for results.</p>
                        <!-- <a href="#">Know More<img src="<?= image_attr('solar-arrow.svg') ?>" alt="" class="ms-2"></a> -->
                    </div>
                </div>
                <div class="cro-services-box">
                    <img src="<?= image_attr('Local Advertising.webp') ?>" alt="" width="100%" class="cro-services-img">
                    <div class="cro-services-detail">
                        <h3>Local Advertising</h3>
                        <p>Capture nearby customers with geofenced ads, driving high-intent leads to your business.</p>
                        <!-- <a href="#">Know More<img src="<?= image_attr('solar-arrow.svg') ?>" alt="" class="ms-2"></a> -->
                    </div>
                </div>
                <div class="cro-services-box">
                    <img src="<?= image_attr('Content Marketing.webp') ?>" alt="" width="100%" class="cro-services-img">
                    <div class="cro-services-detail">
                        <h3>Content Marketing</h3>
                        <p>Attract & convert leads with blogs, website content, & other CRO audit activities that build trust and drive engagement.</p>
                        <!-- <a href="#">Know More<img src="<?= image_attr('solar-arrow.svg') ?>" alt="" class="ms-2"></a> -->
                    </div>
                </div>
                <div class="cro-services-box">
                    <img src="<?= image_attr('Email Marketing.webp') ?>" alt="" width="100%" class="cro-services-img">
                    <div class="cro-services-detail">
                        <h3>Email Marketing</h3>
                        <p>Nurture leads with personalized emails, boosting conversions with automated, high-ROI campaigns.</p>
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
                <h2 class="mb-2">Key Metrics We Focus</h2>
                <p class="subtitle ">We optimize your website for maximum conversions by improving:</p>
            </div>
            <div class="key-matric-flex d-flex justify-content-between">
                <div class="key-matric-box">
                    <img src="<?= image_attr('Cost Per Lead.svg') ?>" alt="">
                    <p class="key-matric-head">Cost Per Lead (CPL)</p>
                    <p class="key-matric-subhead">optimized PPC & social ads for better CPL</p>
                </div>
                <div class="key-matric-box">
                    <img src="<?= image_attr('Conversion Rate.svg') ?>" alt="">
                    <p class="key-matric-head">Conversion Rate (CR)</p>
                    <p class="key-matric-subhead">% of visitors who become leads.</p>
                </div>
                <div class="key-matric-box">
                    <img src="<?= image_attr('Click-Through Rate.svg') ?>" alt="">
                    <p class="key-matric-head">Click-Through Rate (CTR)</p>
                    <p class="key-matric-subhead">Get more clicks from your ads & pages</p>
                </div>
                <div class="key-matric-box">
                    <img src="<?= image_attr('Traffic-to-Lead Ratio.svg') ?>" alt="">
                    <p class="key-matric-head">Traffic-to-Lead Ratio</p>
                    <p class="key-matric-subhead">% of site visitors converting to leads.</p>
                </div>
            </div>
            <div class="about-btn about-btn-green text-center">
                <a href="javascript:void(0);" class="modal-button" data-title="PPC Strategy" data-image="Lead.svg" data-bs-toggle="modal" data-image="Lead.svg" data-bs-target="#exampleModal">Optimize Your Page<figure class="ms-2 mb-0"><img src="<?= image_attr('arrow.gif') ?>" alt=""></figure> </a>
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
                        <p class="short-name">B2B Business Solutions</p>
                        <h2 class="mb-4 text-start">Generate More Leads, Grow Your Business</h2>
                        <p class="subtitle text-start">Fill the gap of In-House Marketing Expertise. Our expert team delivers targeted, high-converting leads with data-driven strategies.</p>
                    </div>
                    <img src="<?= image_attr('cro-lead1.png') ?>" alt="" width="100%" class="d-md-none d-block">
                    <ul class="brand-flex-list">
                        <li><img src="<?= image_attr('cro-lead3.svg') ?>" class="me-2" alt="">Control High Cost Per Lead</li>
                        <li><img src="<?= image_attr('cro-lead3.svg') ?>" class="me-2" alt="">Minimize Low-Quality Leads</li>
                        <li><img src="<?= image_attr('cro-lead3.svg') ?>" class="me-2" alt="">Improve Low Website Conversion</li>
                        <li><img src="<?= image_attr('cro-lead3.svg') ?>" class="me-2" alt="">Get Max value from existing traffic</li>
                    </ul>
                    <div class="about-btn about-btn-green text-left">
                        <a href="javascript:void(0);" class="modal-button" data-title="PPC Strategy" data-bs-toggle="modal" data-image="Lead.svg" data-bs-target="#exampleModal">Let's Audit<figure class="ms-2 mb-0"><img src="<?= image_attr('arrow.gif') ?>" alt=""></figure> </a>
                    </div>
                </div>
                <div class="brand-left d-md-block d-none">
                    <img src="<?= image_attr('Generate More Leads, Grow Your Business.webp') ?>" alt="" width="100%">
                </div>
            </div>
        </div>
    </section>
    <section class="brand-promotion space100 brand-promotion-cro pt-0">
        <div class="container">
            <div class="brand-flex d-flex justify-content-between align-items-center">
                <div class="brand-left d-md-block d-none">
                    <img src="<?= image_attr('We help you reach real buyers, not just traffic.webp') ?>" alt="" width="100%">
                </div>
                <div class="brand-right">
                    <div class="title-head text-start">
                        <p class="short-name">B2C Business Solutions</p>
                        <h2 class="mb-4 text-start">We help you reach real buyers, not just traffic</h2>
                        <p class="subtitle text-start">We focus on attracting people who are actively interested in your products/services and are ready to buy.</p>
                    </div>
                    <img src="<?= image_attr('cro-lead1.png') ?>" alt="" width="100%" class="d-md-none d-block">
                    <ul class="brand-flex-list">
                        <li><img src="<?= image_attr('cro-lead3.svg') ?>" class="me-2" alt="">Target potential buyers saw the ads</li>
                        <li><img src="<?= image_attr('cro-lead3.svg') ?>" class="me-2" alt="">Lower Cost Per Acquisition (CPA)</li>
                        <li><img src="<?= image_attr('cro-lead3.svg') ?>" class="me-2" alt="">Explore Areas that a user can connect</li>
                        <li><img src="<?= image_attr('cro-lead3.svg') ?>" class="me-2" alt="">Improve Assisted Conversions</li>
                    </ul>
                    <div class="about-btn about-btn-green text-left">
                        <a href="javascript:void(0);" class="modal-button" data-title="PPC Strategy" data-bs-toggle="modal" data-image="Lead.svg" data-bs-target="#exampleModal">Book Free Consultation<figure class="ms-2 mb-0"><img src="<?= image_attr('arrow.gif') ?>" alt=""></figure> </a>
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
                <a href="javascript:void(0);" class="modal-button struggle-cta-btn" data-title="PPC Strategy" data-image="Lead.svg" data-bs-toggle="modal" data-bs-target="#exampleModal">Schedule a Call</a>
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
            <a href="javascript:void(0);" class="modal-button" data-title="PPC Strategy" data-bs-toggle="modal" data-image="Lead.svg" data-bs-target="#exampleModal">View More Case Studies<figure  class="ms-2 mb-0"><img src="<?= image_attr('arrow.gif') ?>" alt=""></figure> </a>
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

