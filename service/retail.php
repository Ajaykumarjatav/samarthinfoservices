<?php
$meta_title = '';
$meta_description = '';
include '../header.php';
?>
<section class="other-page-hero">
        <div class="other-hero-inner">

            <h1>Retail</h1>

            <div class="breadcrumbs">
                <a href="{{ route('home') }}">Home</a>
                <span>/</span>
                <a href="#" class="current">Retail</a>
            </div>

        </div>
    </section>

    <section class="HQ-industry-section cm-pd cm-bg">
        <div class="container HQ-industry-wrapper">

            <div class="HQ-industry-content txt-lft">

                <span class="section-badge">
                    <i></i> Industry Overview
                </span>

                <h2 class="section-title">
                    Scalable Digital Solutions for Modern Retail
                </h2>

                <p>
                    We build retail web and software applications that support seamless customer journeys, real-time
                    operations, and reliable data-driven decision-making. Our solutions are designed to scale with high
                    transaction volumes, seasonal demand spikes, and multi-channel retail operations.
                </p>

                <p>
                    Our team ensure our solutions deliver performance, usability, and reliability for customers, store
                    teams, and business users. We focus on speed, stability, and long-term maintainability across the retail
                    ecosystem.
                </p>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="HQ-industry-image">
                <img src="<?= image_attr('banner-service.png') ?>" alt="Retail Industry">
            </div>

        </div>
    </section>

    <section class="HC-challenges-section cm-pd cm-bg">
        <div class="container">

            <span class="section-badge center">
                <i></i> Features
            </span>

            <h2 class="section-title center">
                Why Choose Sanskriti for Retail Development Services
            </h2>

            <div class="HC-challenges-wrapper">
                <div class="features-col left">

                    <div class="feature-item">
                        <img src="<?= public_asset_attr('icons/SOFT SVG 1.svg') ?>" alt="icon">
                        <h4>50+ Retail Digital Solutions Delivered</h4>
                        <p>
                            We have delivered 50+ retail-focused web and software solutions, supporting customer engagement,
                            store operations, merchandising, and backend retail systems at scale.
                        </p>
                    </div>

                    <div class="feature-item">
                        <img src="<?= public_asset_attr('icons/SOFT SVG 2.svg') ?>" alt="icon">
                        <h4>30–40% Faster Time to Market</h4>
                        <p>
                            Our structured development approach enables retailers to launch platforms and features 30–40%
                            faster, helping businesses respond quickly to market changes and customer expectations.
                        </p>
                    </div>

                    <div class="feature-item">
                        <img src="<?= public_asset_attr('icons/SOFT SVG 3.svg') ?>" alt="icon">
                        <h4>99.9% Platform Availability</h4>
                        <p>
                            Retail systems require continuous uptime. Our applications are engineered for 99.9%
                            availability, ensuring uninterrupted shopping, transactions, and operational workflows.
                        </p>
                    </div>

                </div>

                <div class="HC-center">

                    <div class="HC-image-wrap">
                        <img class="HC-main-img" src="<?= public_asset_attr('icons/SOFT SVG 4.svg') ?>" alt="">
                        <img class="HC-bg-img" src="<?= image_attr('grow-banner.png') ?>" alt="">

                        <div class="HC-rating">
                            <h3>4.5/5</h3>
                            <span>Costumer<br>Review</span>
                        </div>
                    </div>



                    <a href="{{ route('contact-us') }}" class="SM-btn SM-btn-gradient-border btn-icon mt">
                        Talk to Our Experts
                        <img src="<?= public_asset_attr('icons/Arrow SVG.svg') ?>" class="arrow-icon" alt="">
                    </a>

                </div>

                <div class="features-col right">

                    <div class="feature-item">
                        <img src="<?= public_asset_attr('icons/SOFT SVG 5.svg') ?>" alt="icon">
                        <h4>AI-Ready Retail Architecture</h4>
                        <p>
                            All our retail platforms are built with AI-ready foundations, enabling personalization, demand
                            forecasting, automation, and analytics as the business evolves.
                        </p>
                    </div>

                    <div class="feature-item">
                        <img src="<?= public_asset_attr('icons/SOFT SVG 6.svg') ?>" alt="icon">
                        <h4>Supports 10,000+ Concurrent Users</h4>
                        <p>
                            Our retail software solutions are designed to support 10,000+ concurrent users, making them
                            suitable for high-traffic consumer platforms and large store networks.
                        </p>
                    </div>

                    <div class="feature-item">
                        <img src="<?= public_asset_attr('icons/Designed to Reduce Operational Risk.svg') ?>" alt="icon">
                        <h4>Up to 40% Lower Maintenance Effort</h4>
                        <p>
                            Through standardized design, testing, and documentation practices, our solutions reduce
                            long-term maintenance effort by up to 40%, supporting sustainable retail operations.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="WD-services-section cm-pd ">
        <div class="container">

            <span class="section-badge">
                <i></i> Our Services
            </span>

            <h2 class="section-title">
                End-to-End Digital Development for Retail
            </h2>

            <div class="WD-services-grid">

                <!-- CARD 1 -->
                <div class="WD-service-card">
                    <img src="<?= image_attr('mobile.png') ?>" alt="icon" class="WD-icon">

                    <h4>Customer-Facing Retail Applications</h4>

                    <span class="wd-divider"></span>

                    <p>
                        Web applications that enable seamless customer interactions across digital channels. Designed to
                        improve engagement, conversion, and customer experience.
                    </p>

                    <ul class="WD-tags">
                        <li>Product browsing and catalog management</li>
                        <li>Secure customer login and profile management</li>
                        <li>Order tracking and purchase history</li>
                        <li>Personalized recommendations and notifications</li>
                    </ul>

                    <a href="#" class="learn-more">
                        Learn More
                        <img src="<?= public_asset_attr('icons/Arrow SVG.svg') ?>" alt="arrow" class="arrow-icon">
                    </a>
                </div>

                <!-- CARD 2 -->
                <div class="WD-service-card">
                    <img src="<?= public_asset_attr('icons/Frame.svg') ?>" alt="icon" class="WD-icon">

                    <h4>Retail Operations & Management Systems</h4>

                    <span class="wd-divider"></span>

                    <p>
                        Applications that support store teams and retail operations with real-time visibility and control.
                        Built to streamline workflows and improve operational efficiency.
                    </p>

                    <ul class="WD-tags">
                        <li>Inventory and stock management systems</li>
                        <li>Store and staff operations dashboards</li>
                        <li>Pricing, promotions, and offer management</li>
                        <li>Role-based access for retail teams</li>
                    </ul>

                    <a href="#" class="learn-more">
                        Learn More
                        <img src="<?= public_asset_attr('icons/Arrow SVG.svg') ?>" alt="arrow" class="arrow-icon">
                    </a>
                </div>

                <!-- CARD 3 -->
                <div class="WD-service-card">
                    <img src="<?= public_asset_attr('icons/computer.svg') ?>" alt="icon" class="WD-icon">

                    <h4>Secure & Scalable Retail Platforms</h4>

                    <span class="wd-divider"></span>

                    <p>
                        Platforms designed to handle high-volume transactions while ensuring security and reliability. Built
                        for integration, scalability, and long-term performance.
                    </p>

                    <ul class="WD-tags">
                        <li>Secure transaction and customer data handling</li>
                        <li>Audit-ready logs and access controls</li>
                        <li>Integration with POS, ERP, CRM, and third-party systems</li>
                        <li>Scalable architecture for multi-store and omni-channel retail</li>
                    </ul>

                    <a href="#" class="learn-more">
                        Learn More
                        <img src="<?= public_asset_attr('icons/Arrow SVG.svg') ?>" alt="arrow" class="arrow-icon">
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="testimonial-section cm-drk-bg cm-pd">

        <span class="t-blur one"></span>
        <span class="t-blur two"></span>
        <span class="t-blur three"></span>
        <span class="t-blur four"></span>

        <div class="container testimonial-wrap">

            <div class="testimonial-left">
                <div>
                    <span class="section-badge-dark">
                        <i></i> OUR TESTIMONIALS
                    </span>

                    <h2 class="section-title-white">
                        Client testimonials<br>
                        that showcase our<br>
                        commitment to<br>
                        excellence in IT<br>
                        services
                    </h2>
                </div>

                <div class="testimonial-stats">
                    <div class="avatars">
                        <img src="<?= image_attr('service-testi1.png') ?>" alt="">
                        <img src="<?= image_attr('service-testi2.png') ?>" alt="">
                        <img src="<?= image_attr('service-testi3.png') ?>" alt="">
                        <img src="<?= image_attr('service-testi4.png') ?>" alt="">
                    </div>
                    <p><strong>99.9%</strong> Client<br>Satisfaction Rate</p>
                </div>
            </div>

            <div class="testimonial-cards">

                <div class="testimonial-card">

                    <img src="<?= image_attr('union.svg') ?>" class="quote-img" alt="">

                    <p>
                        "Working with has completely transformed the way we manage our IT
                        infrastructure. From the consultation to ongoing support, their team
                        has incredibly, knowledgeable, and helped migrate to the cloud
                        seamlessly, measures, provided 24/7 support that we can truly rely on
                        what stands out the most is their ability to tailor solutions to our
                        unique needs."
                    </p>

                    <div class="card-footer">
                        <img src="<?= image_attr('testi1.png') ?>" alt="">
                        <div>
                            <h4>Daniel Johnson</h4>
                            <span>Cybersecurity Specialist</span>
                        </div>
                    </div>

                </div>

                <div class="testimonial-card">

                    <img src="<?= image_attr('union.svg') ?>" alt="quote" class="quote-img">

                    <p>
                        "Working with has completely transformed the way we manage our IT
                        infrastructure. From the consultation to ongoing support, their team
                        has incredibly, knowledgeable, and helped migrate to the cloud
                        seamlessly, measures, provided 24/7 support that we can truly rely on
                        what stands out the most is their ability to tailor solutions to our
                        unique needs."
                    </p>

                    <div class="card-footer">
                        <img src="<?= image_attr('testi2.png') ?>" alt="">
                        <div>
                            <h4>Daniel Johnson</h4>
                            <span>Cybersecurity Specialist</span>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="SD-cta-section cm-pd">
        <div class="container SD-cta-wrapper">

            <div class="SD-cta-content">
                <h2>Ready to Build Your Next Software Product?</h2>

                <p>
                    Turn your idea into a powerful, scalable digital solution.
                    Our team is here to design, develop, and launch it with precision.
                </p>

                <a href="#" class="WD-hero-btn">
                    Start Your Project
                    <img src="<?= public_asset_attr('icons/Arrow SVG.svg') ?>" alt="arrow" class="arrow-icon">
                </a>
            </div>

            <div class="HQ-cta-image">
                <img src="<?= image_attr('banner-side.png') ?>" alt=" Retail"
                    class="HQ-cta-main-img">
                <img src="<?= image_attr('secure.png') ?>" alt="" class="HQ-cta-main-img-1">
                <img src="<?= image_attr('secure2.png') ?>" alt=""
                    class="HQ-cta-main-img-2">
                <img src="<?= image_attr('secure3.png') ?>" alt="" class="HQ-cta-main-img-3">
            </div>

        </div>
    </section>

    <section class="case-studies-section cm-pd">
        <div class="container">

            <div class="case-header">
                <div class="case-left">
                    <span class="section-badge">
                        <i></i> CASE STUDIES
                    </span>
                    <h2 class="section-title">
                        Featured Case Studies
                    </h2>
                </div>

                <a href="{{ route('case-study') }}" class="SM-btn SM-btn-gradient-border btn-icon">
                    Explore More Case Study
                    <img src="<?= public_asset_attr('icons/Arrow SVG.svg') ?>" alt="arrow" class="arrow-icon">
                </a>
            </div>

            <div class="case-grid">

                <a href="{{ route('ur-physio-mobile-healthcare-platform') }}" class="case-card">
                    <div class="case-img">
                        <!-- <img src="/public/asset/images/comp 1.png') }}" alt=""> -->
                        <img src="<?= image_attr('case1.png') ?>" alt="Project Image">
                    </div>

                    <span class="case-tag">Healthcare & Medical Technology</span>
                    <h3>UR Physio</h3>
                </a>

                <a href="{{ route('fitclub-app') }}" class="case-card">
                    <div class="case-img">
                        <img src="<?= image_attr('case2.png') ?>" alt="">
                    </div>

                    <span class="case-tag">Fitness & Wellness Technology</span>
                    <h3>Fitclub App</h3>
                </a>

                <a href="{{ route('fankeyz') }}" class="case-card">
                    <div class="case-img">
                        <img src="<?= image_attr('case3.png') ?>" alt="">
                    </div>

                    <span class="case-tag">Data Management & Analytics Solutions</span>
                    <h3>Fankeyz</h3>
                </a>

            </div>
        </div>
    </section>

    


<?php
    include '../faq.php';
    ?>
</section>    
<?php
require_once __DIR__ . '/../footer.php';
?>
</div>
</div>    