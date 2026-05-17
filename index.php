<?php
include './header.php';
?>


<section class="custom-banner">
<section class="grow-banner text-center">
    <div class="container">
        <div class="banner-first">
            <p class="banner-first-title"><span> $5,025,256+</span> Revenue Driven for Clients</p>
            <h1>Internet Marketing And Advertising Partner for <span>B2B<br> Brands</span><span>B2C<br> Brands</span><span>MSME<br> Company</span><span>Marketing<br> Ops</span><span>Digital Marketing<br> Agency</span> </h1>
            <p class="banner-first-subtitle">We craft digital marketing strategy that deliver real, lasting results—from strategy to execution.</p>
        </div>
        <div class="audit-report position-relative">
            <img src="<?= image_attr('banner-strip.png') ?>" alt="" class="banner-strip d-md-block d-none">
            <img src="<?= image_attr('banner-strip-mobile.png') ?>" alt="" class="banner-strip d-md-none d-block">
            <p class="audit-name">Get Your Free Audit <img src="<?= image_attr('wiredoutline.gif') ?>" alt="" class="me-1 ms-1"> Report!</p>
            <p class="audit-subname">Uncover opportunities to grow your business.</p>
            <form autocomplete="off" id="form-footer" class="m-0" action="create.php" method="post">
                <div class="form-flex d-flex justify-content-between">
                    <div class="input-form">
                       <input type="text" class="form-control" placeholder="yourwebsite.com" name="web_url" required="">
                   </div>
                       <div class="input-form">
                           <input type="text" class="form-control" placeholder="Your Name" name="name" required pattern="[A-Za-z ]+" title="Name may contain only letters and spaces">
                       </div>
                   <div class="input-form">
                       <input
                            type="tel"
                            class="form-control"
                            placeholder="+91 1234567890"
                            name="phone"
                            required
                            pattern="^\+?[0-9]{10,12}$"
                            title="Phone number must be 10 to 12 digits and may start with +"
                        />
                   </div>
                    <div class="input-form">
                       <input type="email" class="form-control" placeholder="youremail@xyz.com" name="email" required="">
                   </div>
                </div>   
                <div class="about-btn about-btn-green text-start">
                    <button type="submit">Get My Free Report Now!</button>
                </div>
            </form>    
        </div>
        <div class="banner-stats d-flex justify-content-center">
            <div class="banner-stats-box banner-stats-box1">
                <p class="banner-stats-title">50%</p>
                <p class="banner-stats-subtitle">Lower cost per click</p>
            </div>
            <div class="banner-stats-box banner-stats-box2">
                <p class="banner-stats-title">80%</p>
                <p class="banner-stats-subtitle">Higher conversion</p>
            </div>
            <div class="banner-stats-box banner-stats-box3">
                <p class="banner-stats-title">100%</p>
                <p class="banner-stats-subtitle">Roi-Focused Strategy</p>
            </div>
        </div>
        <p class="built-in">Built for maximum ad performance. <span>Ever.</span></p>
        <p class="built-in-two"><i>Drive more leads with optimized PPC campaigns.<a href="#"> View Portfolio.</a></i></p>
    </div>
</section>
<section class="services space150">
    <div class="container">
        <div class="title-head">
            <p class="short-name">Services</p>
            <h2>Our Specialized Services</h2>
        </div>
        <div class="services-flex d-flex justify-content-between">
            <div class="service-box service-box1">
                <img src="<?= image_attr('partner1.png') ?>" alt="">
                <p class="service-title">Performance marketing</p>
                <p class="service-subtitle">Include all possible Internet mediums to get maximum output.</p>
                <p class="service-listing"><img src="<?= image_attr('check-fill.svg') ?>" alt="">PPC Ads</p>
                <p class="service-listing"><img src="<?= image_attr('check-fill.svg') ?>" alt="">Social Media</p>
                <p class="service-listing"><img src="<?= image_attr('check-fill.svg') ?>" alt="">SEO</p>
                <p class="service-listing"><img src="<?= image_attr('check-fill.svg') ?>" alt="">Partner Channel</p>
            </div>

            <div class="service-box service-box2">
                <img src="<?= image_attr('partner2.png') ?>" alt="">
                <p class="service-title">Marketing Operations</p>
                <p class="service-subtitle">Optimize process using data and analytics and enhance Internet marketing plans.</p>
                <p class="service-listing"><img src="<?= image_attr('check-fill.svg') ?>" alt="">Marketing Team</p>
                <p class="service-listing"><img src="<?= image_attr('check-fill.svg') ?>" alt="">Streamlining Workflow</p>
                <p class="service-listing"><img src="<?= image_attr('check-fill.svg') ?>" alt="">Tech Stack requirements</p>
                <p class="service-listing"><img src="<?= image_attr('check-fill.svg') ?>" alt="">Coordination and Communication</p>
            </div>

            <div class="service-box service-box3">
                <img src="<?= image_attr('partner3.png') ?>" alt="">
                <p class="service-title">Design and Development</p>
                <p class="service-subtitle">Improve rankings, drive organic traffic, and increase visibility.</p>
                <p class="service-listing"><img src="<?= image_attr('check-fill.svg') ?>" alt="">Website UI/UX Design</p>
                <p class="service-listing"><img src="<?= image_attr('check-fill.svg') ?>" alt="">Graphic Design & Video Making</p>
                <p class="service-listing"><img src="<?= image_attr('check-fill.svg') ?>" alt="">Shopping Website Development</p>
                <p class="service-listing"><img src="<?= image_attr('check-fill.svg') ?>" alt="">Landing Page Development</p>
            </div>
        </div>
    </div>
</section>
<section class="space150 about-us">
    <div class="container">
        <div class="about-us-flex d-flex justify-content-between align-items-start align-items-lg-end gap-3 flex-wrap">
            <div class="about-us-left d-flex flex-direction-column justify-content-between">
                <div class="title-head text-start">
                    <p class="short-name">About us</p>
                    <h2 class="text-start">We help your audience easily find your offerings</h2>
                    <p class="subtitle text-start">We help businesses achieve substantial growth by crafting and executing custom marketing strategies that deliver measurable results.</p>
                </div>
                <div class="d-flex partner-about-logo">
                    <img src="<?= image_attr('partn2.png') ?>" alt="" class="me-3">
                    <img src="<?= image_attr('partn1.png') ?>" alt="">
                </div>
            </div>
            <div class="about-btn about-btn-white">
                <a href="#" class="modal-button" data-title="PPC Strategy" data-image="About us.webp" data-bs-toggle="modal" data-bs-target="#exampleModal">Know More About us <figure class="mb-0"><img src="<?= image_attr('arrow.gif') ?>" alt=""></figure></a>
            </div>
        </div>
    </div>
</section>
<section class="conversion space150">
    <div class="container">
        <div class="conversion-flex d-flex justify-content-between align-items-center">
            <div class="conversion-left">
                <div class="title-head text-start">
                <a href="<?= htmlspecialchars(site_url('service/conversion-rate-optimization.php'), ENT_QUOTES, 'UTF-8') ?>" class="modal-button" data-title="CRO Strategy"><p class="short-name">Conversion Rate Optimization</p></a>
                    <h2 class="text-start">Optimize Your Site for Higher Conversions</h2>
                    <p class="subtitle text-start">Improve your website’s user experience and increase conversions with our expert CRO strategies. We’ll enhance user experience and optimize CTAs for better results.<strong> Let’s turn your visitors into loyal customers!</strong></p>
                </div> 
                <div class="conversion-rate d-flex">
                    <div class="conversion-box me-5">
                        <p class="conversion-number">80%</p>
                        <p class="conversion-para">Average Optimization Score</p>
                    </div>
                    <div class="conversion-box">
                        <p class="conversion-number conversion-number1">79%</p>
                        <p class="conversion-para">Average Conversion Rate</p>
                    </div>
                </div>
            </div>
            <div class="conversion-right">
                <img src="<?= image_attr('conversion1.png') ?>" alt="" width="100%">
            </div>
        </div>
    </div>
</section>
<section class="optimize-secure space80">
    <div class="container">
        <div class="optimize-secure-cta">
            <div class="optimize-secure-left">
                <div class="title-head">
                    <h2>Get<span> FREE</span> Performance Audit</h2>
                    <p class="subtitle mb-0">A detailed audit identifies gaps in your strategy and increases the efficiency of your website.</p>
                </div>
            </div>
            <div class="optimize-secure-mid">
                <p class="secure-mid-para"><img src="<?= image_attr('secure.png') ?>" alt="" class="me-3"><span>Investigate & Discover</span></p>
                <p class="secure-mid-para"><img src="<?= image_attr('secure2.png') ?>" alt="" class="me-3"><span>Personalized Planning &amp; Implementation</span></p>
                <p class="secure-mid-para mb-0"><img src="<?= image_attr('secure3.png') ?>" alt="" class="me-3"><span>Get Insight and Repeat</span></p>
            </div>
            <div class="optimize-secure-end about-btn about-btn-white">
                <a href="javascript:void(0);" class="modal-button" data-title="PPC Strategy" data-image="Audit.webp" data-bs-toggle="modal" data-bs-target="#exampleModal">CLAIM YOUR GROWTH PLAN <figure class="mb-0"><img src="<?= image_attr('arrow.gif') ?>" alt=""></figure></a>
            </div>
        </div>
    </div>
</section>
<section class="clients-preferred space150">
    <div class="container">
        <div class="title-head">
            <a href="<?= htmlspecialchars(site_url('service/lead-generation.php'), ENT_QUOTES, 'UTF-8') ?>"><p class="short-name">Lead Generation</p></a>
            <h2 class="mb-3">Online lead Generation Agency</h2>
            <p class="subtitle ">Your Partner in Finding Customers Online</p>
        </div>
        <div class="d-flex justify-content-between align-items-center clients-preferred-inne-flex"> 
            <div class="clients-preferred-inner-row d-md-flex d-none">
                 <div class="feature-item">
                    <figure><img src="<?= image_attr('client2.png') ?>" alt=""></figure>
                    <h3 class="d-flex align-items-center"><span>Multichannel <br>Campaigns</span></h3>
                    <p>Utilize various platforms to reach potential customers based on your business needs.</p>
                </div>
                <div class="feature-item">
                    <figure><img src="<?= image_attr('client4.png') ?>" alt=""></figure>
                    <h3 class="d-flex align-items-center"><span>Real-Time<br> Insights</span></h3>
                    <p>Track your performance with transparent, real-time reporting tools.</p>
                </div>
                <div class="feature-item ">
                    <figure><img src="<?= image_attr('client1.png') ?>" alt=""></figure>
                    <h3 class="d-flex align-items-center"><span>Audience<br> Segmentation</span></h3>
                    <p>Target your audience based on key demographics and interests to ensure more focused and effective campaigns.</p>
                </div>
                <div class="feature-item">
                    <figure><img src="<?= image_attr('client3.png') ?>" alt=""></figure>
                    <h3 class="d-flex align-items-center"><span>Setup, Analyze & Optimize</span></h3>
                    <p>It guarantees a more streamlined lead generation process while reducing your CPL.</p>
                </div>
            </div>
            <div class="accordion d-md-none w-100" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <figure><img src="<?= image_attr('client1.png') ?>" alt=""></figure>
                        <h3 class="d-flex align-items-center"><span>Precise Audience Targeting</span></h3>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>We use advanced data analytics to identify and engage with your ideal customers, ensuring every lead counts.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <figure><img src="<?= image_attr('client2.png') ?>" alt=""></figure>
                        <h3 class="d-flex align-items-center"><span>Real-Time Insights</span></h3>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                     <p>Track your performance with transparent, real-time reporting tools.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                   <figure><img src="<?= image_attr('client3.png') ?>" alt=""></figure>
                        <h3 class="d-flex align-items-center"><span>Audience Segmentation</span></h3>
                    
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Target your audience based on key demographics and interests to ensure more focused and effective campaigns.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <figure><img src="<?= image_attr('client4.png') ?>" alt=""></figure>
                        <h3 class="d-flex align-items-center"><span>Setup, Analyze & Optimize</span></h3>
                    
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                   <p>It guarantees a more streamlined lead generation process while reducing your CPL.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="clients-preferred-inner-row2">
                <figure class="client-preferredimg justify-content-end w-100">
                    <img src="<?= image_attr('client5.png') ?>" width="100%"  alt="">
                </figure>
            </div>
        </div>
        
        <div class="about-btn about-btn-green text-center">
            <a href="javascript:void(0);" class="modal-button" data-title="PPC Strategy" data-image="Lead.webp" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a Personalized Quote<figure class="ms-2 mb-0"><img src="<?= image_attr('arrow.gif') ?>" alt=""></figure> </a>
        </div>
    </div>
</section>
<section class="shop-camp">
    <div class="container">
        <div class="shop-flex d-flex justify-content-between">
            <div class="shop-left-box">
                <div class="title-head text-start">
                    <a href="<?= htmlspecialchars(site_url('service/shoping-ads.php'), ENT_QUOTES, 'UTF-8') ?>"><p class="short-name">Shopping Campaigns</p></a>
                    <h2 class="mb-3 text-start">Performance Marketing For <span> E-commerce</span></h2>
                    <p class="subtitle text-start">We specialize in performance marketing for WooCommerce, Shopify, and other custom online storefronts.</p>
                </div>
                <figure><img src="<?= image_attr('gii.gif') ?>" alt="" width="100%"> </figure>
                <div class="about-btn about-btn-green text-start">
                    <a href="javascript:void(0);" class="modal-button" data-title="PPC Strategy" data-image="E commerce.webp" data-bs-toggle="modal" data-bs-target="#exampleModal">Scale Your Ecommerce<figure  class="ms-2 mb-0"><img src="<?= image_attr('arrow.gif') ?>" alt=""></figure> </a>
                </div>
            </div>
            <div class="shop-right-box">
                <div class="title-head text-start">
                    <a href="<?= htmlspecialchars(site_url('service/app-install-ads.php'), ENT_QUOTES, 'UTF-8') ?>"><p class="short-name">App Install Ads</p></a>
                    <h2 class="mb-3 text-start">App Advertising Agency</h2>
                    <p class="subtitle text-start">With Our paid campaigns and ASO Services Maximize App Downloads and Retention</p>
                </div>
                <div class="d-flex d-flex-i">
                    <div class="me-md-5 me-3"><img src="<?= image_attr('play-store.png') ?>" alt=""></div>
                    <div ><img src="<?= image_attr('app-store.png') ?>" alt=""></div>
                </div>
                
                <div class="about-btn about-btn-green text-left">
                    <a href="javascript:void(0);" class=" modal-button" data-title="PPC Strategy" data-image="App.webp" data-bs-toggle="modal" data-bs-target="#exampleModal">Get More Downloads<figure  class="ms-2 mb-0"><img src="<?= image_attr('arrow.gif') ?>" alt=""></figure> </a>
                </div>
                <div class="mb-0 mobile-box"><img src="<?= image_attr('mobile.png') ?>" alt="" > </div>
            </div>
        </div>
    </div>
</section>
<section class="brand-promotion space150">
    <div class="container">
        <div class="brand-flex d-flex justify-content-between align-items-center">
            <div class="brand-left d-md-block d-none">
                <img src="<?= image_attr('brand.png') ?>" alt="" width="100%">
            </div>
            <div class="brand-right">
                <div class="title-head text-start">
                    <p class="short-name">Branding</p>
                    <h2 class="mb-4 text-start">Present your brand to your audience</h2>
                    <p class="subtitle text-start">Your business deserves to be noticed, remembered, and trusted. With expert brand development and online presence services, we increase visibility and engage your audience through effective social media marketing. Our reputation management ensures your company's image stays strong and impactful.</p>
                </div>
                <img src="<?= image_attr('brand.png') ?>" alt="" width="100%" class="d-md-none d-block">
                <p class="brands-para">Stand Out, Get Noticed, & Grow Faster!</p>
                <div class="about-btn about-btn-green text-left">
                    <a href="javascript:void(0);" class="modal-button" data-title="PPC Strategy" data-image="Branding.webp" data-bs-toggle="modal" data-bs-target="#exampleModal">Promote Your Brand<figure  class="ms-2 mb-0"><img src="<?= image_attr('arrow.gif') ?>" alt=""></figure> </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="landing-page space150 pt-0">
    <div class="container">
        <div class="title-head">
            <p class="short-name">Landing Page Development</p>
            <h2>Landing Page<br> Development and Optimization</h2>
        </div>
        <figure class="mb-0 text-center land-demo position-relative"><img src="<?= image_attr('land.png') ?>" alt="" class="land-page-img"></figure>
        <p class="land-para text-center">Maximize conversions by understanding your audience, testing continuously, and offering compelling calls-to-action. Enhance user experience, build trust, and eliminate distractions to guide visitors towards their desired action. Start transforming your landing page performance today!</p>
        <div class="about-btn about-btn-green text-center">
            <a href="javascript:void(0);" class="modal-button" data-title="PPC Strategy" data-image="Landing Page.webp" data-bs-toggle="modal" data-bs-target="#exampleModal">Schedule a Free Consultation<figure  class="ms-2 mb-0"><img src="<?= image_attr('arrow.gif') ?>" alt=""></figure> </a>
        </div>
    </div>
</section>
<section class="get-in-touch space150">
    <div class="container">
        <div class="get-flex d-flex align-items-center justify-content-between">
            <div class="get-left">
                <div class="title-head text-start">
                    <p class="short-name">Get in Touch</p>
                    <h2 class="mb-4 text-start">Let’s Connect & Grow Your Business!</h2>
                    <p class="subtitle text-start">Ready to scale your business with high-performance PPC campaigns? Get in touch with our experts today!</p>
                </div>
                <p class="get-head d-md-block d-none">What Happens Next?</p>
                <div class="get-steps d-md-flex justify-content-between d-none">
                    <div class="get-box">
                        <p class="short-name">Step 1</p>
                        <p class="step-head">We Review Your Inquiry</p>
                        <p class="step-subhead">Our PPC experts analyze your requirements & business goals.</p>
                    </div>
                    <div class="get-box">
                        <p class="short-name">Step 2</p>
                        <p class="step-head">Free Strategy Consultation</p>
                        <p class="step-subhead">Receive a detailed action plan to start scaling your business!</p>
                    </div>
                    <div class="get-box">
                        <p class="short-name">Step 3</p>
                        <p class="step-head">Get Your Custom PPC Plan</p>
                        <p class="step-subhead">We schedule a call to discuss tailored ad strategies for maximum ROI.</p>
                    </div>
                </div>
            </div>
            <div class="get-right">
                <p class="get-form-head">Fill the form & get Your Free PPC Strategy Today!</p>
                <form autocomplete="off" id="form-footer" class="m-0" action="create.php" method="post">
                    <div class="input-form">
                        <input type="text" class="form-control" placeholder="Your Name" name="name" required pattern="[A-Za-z ]+" title="Name may contain only letters and spaces">
                    </div>
                    <div class="input-form">
                        <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                    </div>
                    <div class="input-form">
                        <!-- <input type="number" class="form-control" placeholder="Phone Number" name="phone" required> -->

                        <input
                            type="tel"
                            class="form-control"
                            placeholder="+91 1234567890"
                            name="phone"
                            required
                            pattern="^\+?[0-9]{10,12}$"
                            title="Phone number must be 10 to 12 digits and may start with +"
                        />
                    </div>
                    <div class="input-form">
                        <input type="text" class="form-control" placeholder="Website URL" name="web_url" required>
                    </div>
                    <div class="input-form">
                        <textarea class="form-control" placeholder="Message" rows="3" name="message" required></textarea>
                    </div>
                    <div class="about-btn about-btn-green text-start">
                        <button>Get a FREE Consulation</button>
                    </div>
                </form>
         </div>
         <p class="get-head d-md-none d-block">What Happens Next?</p>
         <div class="get-steps d-md-none d-block justify-content-between">
            <div class="get-box">
                <p class="short-name">Step 1</p>
                <p class="step-head">We Review Your Inquiry</p>
                <p class="step-subhead">Our PPC experts analyze your requirements & business goals.</p>
            </div>
            <div class="get-box">
                <p class="short-name">Step 2</p>
                <p class="step-head">Free Strategy Consultation</p>
                <p class="step-subhead">Receive a detailed action plan to start scaling your business!</p>
            </div>
            <div class="get-box mb-0">
                <p class="short-name">Step 3</p>
                <p class="step-head">Get Your Custom PPC Plan</p>
                <p class="step-subhead">We schedule a call to discuss tailored ad strategies for maximum ROI.</p>
            </div>
        </div>
        </div>
    </div>
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
        <a href="javascript:void(0);" class="modal-button" data-title="PPC Strategy" data-bs-toggle="modal" data-image="About us.webp" data-bs-target="#exampleModal">View More Case Studies<figure  class="ms-2 mb-0"><img src="<?= image_attr('arrow.gif') ?>" alt=""></figure> </a>
    </div>
</div>
</section>
<section class="tstimonial space150 d-none">
    <div class="container">
        <div class="title-head">
            <p class="short-name">Testimonials</p>
            <h2 class="mb-3">Thousands of Businesses Trust Us</h2>
        </div>
        <div class="testimonial-rate text-center">
            <img src="<?= image_attr('testi.png') ?>" alt="">
        </div>
        <div class="testimonial-slider">
            <!-- <div class="testimonial-box">
                <p class="testimonal-review">Samarth Infoservices transformed our PPC campaigns! We saw a 230% increase in conversions within three months. Their team is proactive, analytical, and always optimizing for the best results!</p>
                <div class="d-flex align-items-center">
                    <figure class="mb-0"><img src="<?= image_attr('testi1.png') ?>" alt=""></figure>
                    <div class="testimonial-detail">
                        <p class="reviewer">Sarah Mitchel</p>
                        <p class="design">E-Commerce Founder</p>
                    </div>
                </div>
            </div> -->
            <div class="testimonial-box">
                <p class="testimonal-review">Before working with Samarth, we struggled with high ad costs and low ROI. They helped us cut our cost per lead by 55%, bringing in high-quality traffic that actually converts!</p>
                <div class="d-flex align-items-center">
                    <figure class="mb-0"><img src="<?= image_attr('testi2.png') ?>" alt=""></figure>
                    <div class="testimonial-detail">
                        <p class="reviewer">John Reynolds</p>
                        <p class="design">SaaS Marketing Head</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-box">
                <p class="testimonal-review">We were skeptical about PPC, but Samarth Infoservices proved us wrong! Thanks to their Google & Meta Ads strategies, our sales tripled in just 60 days. Highly recommend their expertise!</p>
                <div class="d-flex align-items-center">
                    <figure class="mb-0"><img src="<?= image_attr('testi3.png') ?>" alt=""></figure>
                    <div class="testimonial-detail">
                        <p class="reviewer">Daniel Carter</p>
                        <p class="design">Local Business Owner</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-box">
                <p class="testimonal-review">We were skeptical about PPC, but Samarth Infoservices proved us wrong! Thanks to their Google & Meta Ads strategies, our sales tripled in just 60 days. Highly recommend their expertise!</p>
                <div class="d-flex align-items-center">
                    <figure class="mb-0"><img src="<?= image_attr('testi3.png') ?>" alt=""></figure>
                    <div class="testimonial-detail">
                        <p class="reviewer">Daniel Carter</p>
                        <p class="design">Local Business Owner</p>
                    </div>
                </div>
            </div>
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
                <div class="service-testimonial-flex d-flex justify-content-between">
                    <div class="service-testimonial-box">
                        <div class="service-test-userimg d-flex justify-content-between align-items-center">
                            <img src="<?= image_attr('service-test1.png') ?>" alt="">
                            <img src="<?= image_attr('case-icon7.png') ?>" alt="">
                        </div>
                        <img src="<?= image_attr('service-test3.svg') ?>" alt="">
                        <p class="service-test-review">The team helped us generate high-quality real estate leads consistently. Earlier, we were struggling with inquiries, but after their targeted ad campaigns, our site traffic and conversions have doubled. Highly recommended for property businesses.</p>
                        <div class="user-desi">
                            <p class="serv-username">Bro Ghar </p>
                            <p class="serve-userdetail">(Real Estate)</p>
                        </div>
                    </div>
                    <div class="service-testimonial-box">
                        <div class="service-test-userimg d-flex justify-content-between align-items-center">
                            <img src="<?= image_attr('service-testi1.png') ?>" alt="">
                            <img src="<?= image_attr('case-icon1.png') ?>" alt="">
                        </div>
                        <img src="<?= image_attr('service-test3.svg') ?>" alt="">
                        <p class="service-test-review">We saw a huge boost in online sales after they optimized our Google and Meta ads. Their creatives matched our brand perfectly, and our ROAS improved within just a few weeks. Truly result-driven marketing!</p>
                        <div class="user-desi">
                            <p class="serv-username">Aapno Rajasthan </p>
                            <p class="serve-userdetail">(Ecommerce – Home Décor)</p>
                        </div>
                    </div>
                    <div class="service-testimonial-box">
                        <div class="service-test-userimg d-flex justify-content-between align-items-center">
                            <img src="<?= image_attr('service-testi2.png') ?>" alt="">
                            <img src="<?= image_attr('case-icon2.png') ?>" alt="">
                        </div>
                        <img src="<?= image_attr('service-test3.svg') ?>" alt="">
                        <p class="service-test-review">From branding to sales growth, they handled everything so smoothly. Their influencer tie-ups and performance campaigns brought us a younger audience and repeat buyers. They really understand fashion ecommerce.</p>
                        <div class="user-desi">
                            <p class="serv-username">Raja & Raya </p>
                            <p class="serve-userdetail">(Ecommerce – Clothing)</p>
                        </div>
                    </div>
                    <div class="service-testimonial-box">
                        <div class="service-test-userimg d-flex justify-content-between align-items-center">
                            <img src="<?= image_attr('service-testi3.png') ?>" alt="">
                            <img src="<?= image_attr('case-icon3.png') ?>" alt="">
                        </div>
                        <img src="<?= image_attr('service-test3.svg') ?>" alt="">
                        <p class="service-test-review">We partnered with them for PPC and SEO support, and the results have been fantastic. Their strategies are data-driven yet very creative. It feels like an extension of our own team.</p>
                        <div class="user-desi">
                            <p class="serv-username">The Social Media Branding </p>
                            <p class="serve-userdetail">(Digital Marketing Agency Collaboration)</p>
                        </div>
                    </div>
                    <div class="service-testimonial-box">
                        <div class="service-test-userimg d-flex justify-content-between align-items-center">
                            <img src="<?= image_attr('service-testi4.png') ?>" alt="">
                            <img src="<?= image_attr('case-icon4.png') ?>" alt="">
                        </div>
                        <img src="<?= image_attr('service-test3.svg') ?>" alt="">
                        <p class="service-test-review">Our festive season sales hit a record high because of their ad campaigns and email automation. They not only brought traffic but also improved our repeat customer rate. A true growth partner!</p>
                        <div class="user-desi">
                            <p class="serv-username">Shree Gunj </p>
                            <p class="serve-userdetail">(Ecommerce – Dry Fruits)</p>
                        </div>
                    </div>
                    <div class="service-testimonial-box">
                        <div class="service-test-userimg d-flex justify-content-between align-items-center">
                            <img src="<?= image_attr('service-testi5.png') ?>" alt="">
                            <img src="<?= image_attr('case-icon5.png') ?>" alt="">
                        </div>
                        <img src="<?= image_attr('service-test3.svg') ?>" alt="">
                        <p class="service-test-review">Their campaigns helped us reach students across India. The lead generation ads for SSC and Railway courses were very effective. We now get quality admissions from both online and offline channels.</p>
                        <div class="user-desi">
                            <p class="serv-username">Krishna Coaching Classes  </p>
                            <p class="serve-userdetail">(Education/Coaching)</p>
                        </div>
                    </div>
                    <div class="service-testimonial-box">
                        <div class="service-test-userimg d-flex justify-content-between align-items-center">
                            <img src="<?= image_attr('service-testi6.png') ?>" alt="">
                            <img src="<?= image_attr('case-icon6.png') ?>" alt="">
                        </div>
                        <img src="<?= image_attr('service-test3.svg') ?>" alt="">
                        <p class="service-test-review">We were new to online sales, but with their guidance, our brand visibility increased massively. Their SEO and marketplace ads brought consistent orders. The best part is their constant reporting and support.</p>
                        <div class="user-desi">
                            <p class="serv-username">Half Dot</p>
                            <p class="serve-userdetail">(Ecommerce – Wooden Home Décor)</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
<section class="space150 blogs d-none">
    <div class="container">
        <div class="title-head-flex d-flex justify-content-between align-items-center">
            <div class="title-head text-start">
                <p class="short-name">News & Articles</p>
                <h2 class="mb-3 text-start">Explore Our Latest Blogs</h2>
                <p class="subtitle text-start mb-0">Get expert insights, tips, and trends to grow your business.</p>
            </div>
            <div class="about-btn about-btn-green text-start d-md-block d-none">
                <a href="javascript:void(0);" class="modal-button" data-title="PPC Strategy" data-bs-toggle="modal" data-bs-target="#exampleModal">View More</a>
            </div>
        </div>
        <div class="blog-flex d-flex justify-content-between">
            <div class="home-artical-box">
                <img class="" src="<?= image_attr('blog1.png') ?>" alt="">
                <div class="home-artical-contant">
                    <h3>Maximizing ROI with Google Ads: A Data-Driven Approach</h3>
                    <p class="blog-detail">Learn how to optimize your Google Ads campaigns with AI-driven bidding, audience segmentation, and budget allocation</p>
                    <p class="tech-artical">PPC Strategy  <span> |  8 min Read</span></p>
                    <a href="#" class="blog-read-now">Read Now</a>
                </div>
            </div>
            <div class="home-artical-box">
                <img class="" src="<?= image_attr('blog2.png') ?>" alt="">
                <div class="home-artical-contant">
                    <h3>Meta Ads vs. Google Ads: Which One Drives Better Conversions?</h3>
                    <p class="blog-detail">A deep dive into the strengths of both platforms and how to choose the best one based on your business goals.</p>
                    <p class="tech-artical">Paid Advertising <span> | 12 min Read</span></p>
                    <a href="#" class="blog-read-now">Read Now</a>
                </div>
            </div>
            <div class="home-artical-box">
                <img class="" src="<?= image_attr('blog3.png') ?>" alt="">
                <div class="home-artical-contant">
                    <h3>How Landing Page Optimization Can Cut Your Ad Costs by 40%</h3>
                    <p class="blog-detail">Discover the key design and copy elements that improve ad relevance, increase conversions, and reduce CPC.</p>
                    <p class="tech-artical">Conversion Optimization <span> |  7 min Read</span></p>
                    <a href="#" class="blog-read-now">Read Now</a>
                </div>
            </div>
        </div>
        <div class="about-btn about-btn-green text-start d-md-none d-block mt-5">
                <a href="#">View More</a>
            </div>
    </div>
</section>
</section>
<?php require_once __DIR__ . '/footer.php'; ?>
