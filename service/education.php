<?php
$meta_title = '';
$meta_description = '';
include '../header.php';
?>

<section class="other-page-hero">
        <div class="other-hero-inner">

            <h1>Education</h1>

            <div class="breadcrumbs">
                <a href="{{ route('home') }}">Home</a>
                <span>/</span>
                <a href="#" class="current">Healthcare</a>
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
                    Secure, Scalable Solutions for Modern Healthcare
                </h2>

                <p>
                    We build web-based healthcare applications that support secure patient interactions, streamlined
                    clinical workflows, and reliable data access. Our solutions are designed to scale with growing patient
                    volumes while meeting strict compliance requirements.
                </p>

                <p>
                    Every application prioritizes usability for patients, clinicians, and administrators alike. We focus on
                    stability, security, and long-term maintainability across healthcare ecosystems.
                </p>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="HQ-industry-image">
                <img src="<?= public_asset_attr('icons/OTHER SVG ICONS/HEALTH SVG 1.svg') ?>"
                    alt="Healthcare Industry">
            </div>

        </div>
    </section>

    <section class="HC-challenges-section cm-pd cm-bg">
        <div class="container">

            <span class="section-badge center">
                <i></i> Features
            </span>

            <h2 class="section-title center">
                Why Choose Sanskriti for Healthcare Development Services
            </h2>

            <div class="HC-challenges-wrapper">
                <div class="features-col left">

                    <div class="feature-item">
                        <img src="<?= public_asset_attr('icons/OTHER SVG ICONS/HEALTH SVG 1.svg') ?>"
                            alt="icon">
                        <h4>50+ Healthcare Digital Solutions Delivered</h4>
                        <p>
                            We have delivered 50+ healthcare-focused web and software solutions, supporting patient
                            engagement, clinical operations, and healthcare administration at scale.
                        </p>
                    </div>

                    <div class="feature-item">
                        <img src="<?= public_asset_attr('icons/OTHER SVG ICONS/HEALTH SVG 2.svg') ?>" alt="icon">
                        <h4>99.9% Application Reliability</h4>
                        <p>
                            Healthcare systems demand uptime. Our web applications are engineered to achieve 99.9%
                            availability, ensuring uninterrupted access for patients, clinicians, and staff.
                        </p>
                    </div>

                    <div class="feature-item">
                        <img src="<?= public_asset_attr('icons/Stability Reviewed Early.svg') ?>" alt="icon">
                        <h4>30–40% Faster Time to Delivery</h4>
                        <p>
                            Our structured development approach helps healthcare organizations launch applications 30–40%
                            faster, without compromising security, compliance, or stability.
                        </p>
                    </div>

                </div>

                <div class="HC-center">

                    <div class="HC-image-wrap">
                        <img class="HC-main-img"
                            src="<?= public_asset_attr('icons/OTHER SVG ICONS/HEALTH SVG 3.svg') ?>" alt="">
                        <!-- <img class="HC-bg-img" src="/public/asset/images/Group 1171277610.png" alt=""> -->

                        <!-- <div class="HC-rating">
                                <h3>4.5/5</h3>
                                <span>Costumer<br>Review</span>
                            </div> -->
                    </div>



                    <a href="{{ route('contact-us') }}" class="SM-btn SM-btn-gradient-border btn-icon mt">
                        Talk to Our Experts
                        <img src="<?= public_asset_attr('icons/Arrow SVG.svg') ?>" class="arrow-icon" alt="">
                    </a>

                </div>

                <div class="features-col right">

                    <div class="feature-item">
                        <img src="<?= public_asset_attr('icons/Designed to Reduce Operational Risk.svg') ?>"
                            alt="icon">
                        <h4>AI-Ready Architecture from Day One</h4>
                        <p>
                            All our healthcare web platforms are designed to support future AI and analytics use cases,
                            reducing rework and enabling intelligent automation as needs evolve.
                        </p>
                    </div>

                    <div class="feature-item">
                        <img src="<?= public_asset_attr('icons/One Structure, Many Devices.svg') ?>"
                            alt="icon">
                        <h4>Scales Across 10,000+ Active Users</h4>
                        <p>
                            Our healthcare software solutions are built to support 10,000+ concurrent users, making them
                            suitable for hospitals, clinic networks, and multi-location providers.
                        </p>
                    </div>

                    <div class="feature-item">
                        <img src="<?= public_asset_attr('icons/Ready for Team Changes.svg') ?>"
                            alt="icon">
                        <h4>40% Lower Long-Term Maintenance Effort</h4>
                        <p>
                            Through standardized design, documentation, and testing, our solutions reduce ongoing
                            maintenance effort by up to 40%, supporting long-term sustainability.
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
                End-to-End Digital Development for Healthcare
            </h2>

            <div class="WD-services-grid">

                <!-- CARD 1 -->
                <div class="WD-service-card">
                    <svg class="WD-icon" width="60" height="60" viewBox="0 0 60 60" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M54.9416 31.3556C56.041 30.258 56.6465 28.7933 56.6465 27.2313C56.6465 25.6697 56.0411 24.2043 54.942 23.1052C52.8563 21.0195 49.5675 20.8478 47.281 22.5904C46.2724 21.8201 45.0419 21.403 43.7441 21.403C42.9959 21.4019 42.2545 21.5442 41.5599 21.8222C40.5347 21.3271 39.4421 20.9861 38.3172 20.8102C41.6165 18.874 43.8368 15.2893 43.8368 11.1954C43.8368 5.05453 38.8393 0.0585938 32.6966 0.0585938C26.5557 0.0585938 21.5598 5.05453 21.5598 11.1954C21.5598 15.2879 23.7778 18.8714 27.074 20.808C21.5342 21.6673 17.2803 26.469 17.2803 32.2459V38.711L11.9853 41.9325L11.5156 41.1962C11.4569 41.104 11.3805 41.0244 11.2909 40.9617C11.2013 40.8991 11.1003 40.8547 10.9936 40.8311C10.8868 40.8075 10.7765 40.8052 10.6689 40.8243C10.5612 40.8434 10.4584 40.8834 10.3663 40.9423L3.73814 45.1712C3.55208 45.2899 3.42079 45.4777 3.37314 45.6932C3.3255 45.9087 3.3654 46.1343 3.48407 46.3204L11.9251 59.5564C11.9838 59.6487 12.0601 59.7284 12.1497 59.7911C12.2392 59.8538 12.3403 59.8982 12.447 59.9218C12.5538 59.9454 12.6641 59.9477 12.7718 59.9287C12.8794 59.9096 12.9822 59.8695 13.0743 59.8106L19.7059 55.5817C19.892 55.4629 20.0233 55.2752 20.071 55.0596C20.1186 54.8441 20.0787 54.6184 19.9601 54.4323L18.9725 52.8844L21.502 51.3463L32.226 54.8917C32.9488 55.1312 33.6709 55.2504 34.382 55.2504C35.6211 55.2504 36.8268 54.8887 37.9443 54.1723L50.6515 46.0277C52.3997 44.907 52.9119 42.5701 51.792 40.8165C50.9759 39.5466 49.5194 38.9309 48.1131 39.1184V38.1875L54.9416 31.3556ZM46.6919 24.2821C46.8479 24.4381 47.0595 24.5258 47.2801 24.5259C47.5007 24.5259 47.7124 24.4384 47.8685 24.2825C49.4956 22.6581 52.1408 22.6579 53.7649 24.2821C54.5497 25.0669 54.9819 26.1143 54.9819 27.2312C54.9819 28.348 54.5498 29.3944 53.7648 30.1781L47.2804 36.6655L40.796 30.178C39.1719 28.5539 39.1721 25.9089 40.7965 24.2817C41.5796 23.4989 42.6263 23.0677 43.744 23.0677C44.8619 23.0677 45.9089 23.4989 46.6919 24.2821ZM23.2243 11.1954C23.2243 5.97234 27.4735 1.72313 32.6966 1.72313C37.9215 1.72313 42.1721 5.97234 42.1721 11.1954C42.1721 16.4203 37.9214 20.6709 32.6966 20.6709C27.4735 20.6711 23.2243 16.4203 23.2243 11.1954ZM28.8551 22.3356H36.538C37.6602 22.3366 38.7741 22.5283 39.832 22.9025C39.7593 22.9683 39.6883 23.0358 39.619 23.1052L39.6185 23.1056C37.3461 25.3819 37.3463 29.0825 39.6188 31.355L46.4482 38.1877V39.7654L38.8687 44.6243C38.6844 44.0646 38.3712 43.5559 37.9545 43.1392C37.5377 42.7225 37.029 42.4095 36.4692 42.2252L23.0008 37.7707C21.6214 37.3139 20.2394 37.3379 18.9449 37.8275V32.246C18.9447 26.7813 23.3905 22.3356 28.8551 22.3356ZM12.8809 57.9598L5.3347 46.127L10.5597 42.7934L17.0973 53.0406C17.0988 53.043 17.0999 53.0456 17.1014 53.0481C17.1051 53.0542 17.1095 53.0597 17.1133 53.0658L18.1087 54.6259L12.8809 57.9598ZM50.3901 41.7145C51.0156 42.6939 50.7297 44 49.7529 44.6263L37.0458 52.7708C35.7242 53.6181 34.2385 53.805 32.7488 53.3113L21.6592 49.6451C21.5447 49.6073 21.4234 49.5948 21.3036 49.6084C21.1839 49.6221 21.0685 49.6616 20.9655 49.7242L18.0768 51.4807L12.8808 43.3361L18.7312 39.7766C19.9065 39.06 21.167 38.9166 22.4778 39.3507L35.9464 43.8054C36.8245 44.0959 37.4179 44.9566 37.3892 45.8748C37.3819 45.9057 37.3763 45.937 37.3725 45.9686C37.2915 46.6643 36.9074 47.3092 36.3701 47.6517C35.8714 47.9695 35.2847 48.0203 34.6257 47.8018L28.4895 45.7733C28.2808 45.707 28.0543 45.7257 27.8592 45.8253C27.6641 45.9249 27.5161 46.0974 27.4474 46.3054C27.3786 46.5134 27.3946 46.7401 27.4919 46.9363C27.5891 47.1326 27.7599 47.2826 27.967 47.3538L34.1028 49.3822C34.535 49.5254 34.967 49.5963 35.3871 49.5963C36.0597 49.5963 36.7018 49.4143 37.2649 49.0554C38.1249 48.5072 38.7408 47.5855 38.9624 46.5414L47.4804 41.0808C48.4576 40.4545 49.7636 40.7394 50.3901 41.7145ZM43.8636 29.048C43.8636 28.8272 43.9513 28.6155 44.1074 28.4595C44.2635 28.3034 44.4751 28.2157 44.6959 28.2157H46.4481V26.4601C46.4481 26.2394 46.5357 26.0277 46.6918 25.8716C46.8479 25.7155 47.0596 25.6279 47.2803 25.6279C47.5011 25.6279 47.7127 25.7155 47.8688 25.8716C48.0249 26.0277 48.1126 26.2394 48.1126 26.4601V28.2157H49.8683C50.089 28.2157 50.3007 28.3034 50.4568 28.4595C50.6129 28.6155 50.7006 28.8272 50.7006 29.048C50.7006 29.2687 50.6129 29.4804 50.4568 29.6365C50.3007 29.7925 50.089 29.8802 49.8683 29.8802H48.1126V31.6325C48.1126 31.8533 48.0249 32.065 47.8688 32.221C47.7127 32.3771 47.5011 32.4648 47.2803 32.4648C47.0596 32.4648 46.8479 32.3771 46.6918 32.221C46.5357 32.065 46.4481 31.8533 46.4481 31.6325V29.8802H44.6959C44.4751 29.8802 44.2635 29.7925 44.1074 29.6365C43.9513 29.4804 43.8636 29.2687 43.8636 29.048Z" />
                    </svg>


                    <h4>Patient-Centric Web Portals</h4>

                    <span class="wd-divider"></span>

                    <p>
                        Web portals that enable patients to interact with healthcare providers securely and conveniently.
                        Designed to improve engagement while simplifying access to medical services.
                    </p>

                    <ul class="WD-tags">
                        <li>Self-service appointment booking and management</li>
                        <li>Secure patient login and profile access</li>
                        <li>Online access to prescriptions and lab reports</li>
                        <li>Automated notifications and visit reminders</li>
                    </ul>

                    <a href="{{ route('contact-us') }}" class="learn-more">
                        Contact Us
                        <svg class="card-arrow-icon" width="12" height="16" viewBox="0 0 12 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.0035 5.40804L1.41154 14L0 12.5885L8.59096 3.99651H1.01922V2H12V12.9808H10.0035V5.40804Z" />
                        </svg> </a>
                </div>

                <!-- CARD 2 -->
                <div class="WD-service-card">
                    <svg class="WD-icon" width="60" height="60" viewBox="0 0 60 60" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1148_2163)">
                            <path d="M41.0127 32.1104L45.9077 37.0055L40.7239 42.1893L35.8555 37.3209" stroke="#008080"
                                stroke-width="1.75781" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M13.5625 1.96387H21.2519C22.2198 1.96387 23.0043 2.74844 23.0043 3.71629V5.42547M14.9182 9.60285H2.63328C1.66543 9.60285 0.880859 8.81828 0.880859 7.85043V3.71641C0.880859 2.74855 1.66543 1.96398 2.63328 1.96398H9.47316M14.5679 9.60285H3.09969V49.9864C3.09969 54.4323 6.70391 58.0367 11.15 58.0367H12.7353C17.1813 58.0367 20.7856 54.4325 20.7856 49.9864V43.2796M57.8082 53.4865L57.2043 54.0904C55.4512 55.8435 52.6089 55.8435 50.8559 54.0904L39.8398 43.0744L46.7922 36.122L57.8082 47.1381C59.5613 48.8911 59.5613 51.7334 57.8082 53.4865Z"
                                stroke="#008080" stroke-width="1.75781" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M9.47113 19.2478C7.08777 18.6388 4.92496 18.3833 3.09766 18.3137M7.25699 43.985H3.35219M9.21402 39.1903H3.35219M7.25699 34.3954H3.35219M5.55215 29.6007H3.35219M22.6316 34.3954V11.2427M22.6316 18.8087C20.2714 18.968 17.6559 18.7183 14.9161 17.7347"
                                stroke="#008080" stroke-width="1.75781" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M27.9129 20.1765H31.6679M27.9129 24.0732H31.6679M38.4646 10.457C31.7563 3.74871 20.8801 3.74871 14.1718 10.457C7.46355 17.1653 7.46355 28.0414 14.1718 34.7497C20.8801 41.458 31.7563 41.458 38.4646 34.7497C45.1729 28.0414 45.1729 17.1653 38.4646 10.457ZM35.0836 31.3688C30.2426 36.2098 22.3938 36.2098 17.5528 31.3688C12.7118 26.5277 12.7118 18.679 17.5528 13.838C22.3938 8.99695 30.2426 8.99695 35.0836 13.838C39.9246 18.679 39.9246 26.5277 35.0836 31.3688Z"
                                stroke="#008080" stroke-width="1.75781" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1148_2163">
                                <rect width="60" height="60" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <h4>Clinical & Operational Applications</h4>

                    <span class="wd-divider"></span>

                    <p>
                        Web applications that support clinicians and staff with efficient, reliable workflows. Built to
                        reduce administrative effort and improve operational efficiency.
                    </p>

                    <ul class="WD-tags">
                        <li>Doctor and staff scheduling systems</li>
                        <li>Workflow management for clinics and hospitals</li>
                        <li>Digital intake forms and visit tracking</li>
                        <li>Role-based access for medical staff</li>
                    </ul>

                    <a href="{{ route('contact-us') }}" class="learn-more">
                        Contact Us
                        <svg class="card-arrow-icon" width="12" height="16" viewBox="0 0 12 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.0035 5.40804L1.41154 14L0 12.5885L8.59096 3.99651H1.01922V2H12V12.9808H10.0035V5.40804Z" />
                        </svg> </a>
                </div>

                <!-- CARD 3 -->
                <div class="WD-service-card">
                    <svg class="WD-icon" width="60" height="60" viewBox="0 0 60 60" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M53.5932 9.37482L46.377 5.54736L45.498 7.20381L52.9205 11.1405C53.0558 11.2123 53.2066 11.2498 53.3598 11.2498H58.0473V9.37482H53.5932Z" />
                        <path
                            d="M53.2756 18.7539L47.6389 19.2662C46.3327 19.3819 45.0175 19.193 43.7967 18.7144C42.5759 18.2358 41.4828 17.4805 40.6033 16.5079L37.687 13.2673C37.2451 12.7761 36.9902 12.1451 36.967 11.4848C36.9438 10.8245 37.1538 10.1772 37.5602 9.65625L42.5279 12.968C42.6303 13.0377 42.7455 13.0865 42.8669 13.1114C42.9882 13.1364 43.1133 13.137 43.2349 13.1133C43.3565 13.0896 43.4722 13.042 43.5753 12.9734C43.6785 12.9047 43.7669 12.8162 43.8357 12.7132C43.9044 12.6101 43.952 12.4944 43.9757 12.3728C43.9995 12.2512 43.9989 12.1261 43.974 12.0047C43.9491 11.8834 43.9004 11.7681 43.8307 11.6657C43.761 11.5633 43.6717 11.4757 43.5679 11.408L37.9429 7.65797L37.9412 7.65668L37.94 7.65598C37.7854 7.55363 37.6039 7.49936 37.4185 7.5H27.1111C26.0375 7.4996 24.9977 7.12491 24.1706 6.44043C23.3436 5.75596 22.781 4.80455 22.5799 3.75H38.9861L43.6232 6.20953L44.5022 4.55309L39.6591 1.98434C39.5238 1.91251 39.373 1.87497 39.2198 1.875H21.5636C21.3172 1.87498 21.0807 1.97196 20.9053 2.14497C20.7298 2.31798 20.6296 2.55311 20.6261 2.79949C20.6142 3.65868 20.7731 4.51167 21.0937 5.30892C21.4142 6.10616 21.89 6.83176 22.4933 7.44356C23.0967 8.05535 23.8156 8.54115 24.6084 8.87272C25.4011 9.20429 26.2518 9.37502 27.1111 9.375H35.5422C35.1454 10.2112 35.0051 11.1462 35.1388 12.0621C35.2725 12.978 35.6744 13.8338 36.2938 14.5216L39.2101 17.7621C40.1806 18.8354 41.3651 19.6936 42.6874 20.2815C44.0096 20.8694 45.4402 21.1741 46.8873 21.1758C47.1938 21.1758 47.5009 21.1619 47.8086 21.1341L53.4029 20.625H58.0479V18.75H53.3604C53.3326 18.75 53.3038 18.7513 53.2756 18.7539ZM32.89 50.625H29.063V52.5H32.89C33.9636 52.5004 35.0034 52.8751 35.8305 53.5596C36.6575 54.244 37.2201 55.1955 37.4212 56.25H21.015L7.07996 48.8593C6.94465 48.7875 6.7938 48.75 6.64062 48.75H1.95312V50.625H6.40742L20.342 58.0157C20.4773 58.0875 20.6281 58.125 20.7813 58.125H38.438C38.6845 58.125 38.921 58.028 39.0964 57.855C39.2719 57.682 39.3721 57.4469 39.3755 57.2005C39.3875 56.3413 39.2286 55.4882 38.908 54.6909C38.5874 53.8937 38.1116 53.168 37.5081 52.5562C36.9047 51.9444 36.1857 51.4586 35.3929 51.1271C34.6001 50.7956 33.7494 50.6249 32.89 50.625Z" />
                        <path
                            d="M6.72547 41.2461L12.3622 40.7338C13.6684 40.618 14.9836 40.8069 16.2044 41.2855C17.4252 41.7641 18.5183 42.5195 19.3978 43.4921L22.3141 46.7327C22.7562 47.2239 23.0112 47.855 23.0344 48.5154C23.0577 49.1757 22.8477 49.8232 22.4412 50.3442L17.4732 47.0325C17.3708 46.9628 17.2556 46.914 17.1342 46.8891C17.0129 46.8641 16.8878 46.8635 16.7662 46.8872C16.6446 46.9109 16.5289 46.9584 16.4257 47.0271C16.3226 47.0958 16.2342 47.1842 16.1654 47.2873C16.0967 47.3904 16.0491 47.5061 16.0253 47.6277C16.0016 47.7493 16.0022 47.8744 16.0271 47.9957C16.052 48.1171 16.1007 48.2323 16.1704 48.3348C16.2401 48.4372 16.3294 48.5248 16.4332 48.5925L22.0582 52.3425L22.0599 52.3438L22.0612 52.3446C22.2145 52.446 22.3941 52.5 22.5779 52.5H27.188V50.625H24.4587C24.8556 49.7888 24.9961 48.8538 24.8623 47.9379C24.7286 47.022 24.3267 46.1662 23.7073 45.4784L20.791 42.2379C19.7161 41.0492 18.3801 40.126 16.888 39.541C15.396 38.956 13.7886 38.7251 12.1921 38.8664L6.5982 39.375H1.95312V41.25H6.64062C6.66852 41.25 6.69734 41.2487 6.72547 41.2461ZM33.7505 17.8125H26.2505C26.0019 17.8125 25.7634 17.9113 25.5876 18.0871C25.4118 18.2629 25.313 18.5014 25.313 18.75V25.3125H23.438V27.1875H26.2505C26.4992 27.1875 26.7376 27.0887 26.9135 26.9129C27.0893 26.7371 27.188 26.4986 27.188 26.25V19.6875H32.813V26.25C32.813 26.4986 32.9118 26.7371 33.0876 26.9129C33.2635 27.0887 33.5019 27.1875 33.7505 27.1875H40.313V32.8125H33.7505C33.5019 32.8125 33.2635 32.9113 33.0876 33.0871C32.9118 33.2629 32.813 33.5014 32.813 33.75V40.3125H27.188V33.75C27.188 33.5014 27.0893 33.2629 26.9135 33.0871C26.7376 32.9113 26.4992 32.8125 26.2505 32.8125H19.688V27.1875H21.563V25.3125H18.7505C18.5019 25.3125 18.2634 25.4113 18.0876 25.5871C17.9118 25.7629 17.813 26.0014 17.813 26.25V33.75C17.813 33.9986 17.9118 34.2371 18.0876 34.4129C18.2634 34.5887 18.5019 34.6875 18.7505 34.6875H25.313V41.25C25.313 41.4986 25.4118 41.7371 25.5876 41.9129C25.7634 42.0887 26.0019 42.1875 26.2505 42.1875H33.7505C33.9992 42.1875 34.2376 42.0887 34.4135 41.9129C34.5893 41.7371 34.688 41.4986 34.688 41.25V34.6875H41.2505C41.4992 34.6875 41.7376 34.5887 41.9135 34.4129C42.0893 34.2371 42.188 33.9986 42.188 33.75V26.25C42.188 26.0014 42.0893 25.7629 41.9135 25.5871C41.7376 25.4113 41.4992 25.3125 41.2505 25.3125H34.688V18.75C34.688 18.5014 34.5893 18.2629 34.4135 18.0871C34.2376 17.9113 33.9992 17.8125 33.7505 17.8125Z" />
                        <path
                            d="M12.1875 30C12.1854 31.9949 12.5201 33.9759 13.1774 35.8594L14.9475 35.2412C14.3597 33.5564 14.0605 31.7844 14.0625 30C14.0625 21.212 21.212 14.0625 30 14.0625C30.5919 14.0626 31.1833 14.0952 31.7717 14.1602L31.9784 12.297C31.3214 12.2241 30.661 12.1876 30 12.1875C20.1782 12.1875 12.1875 20.1782 12.1875 30ZM30 45.9375C29.4081 45.9374 28.8167 45.9048 28.2284 45.8398L28.0217 47.703C28.6786 47.7759 29.339 47.8124 30 47.8125C39.8218 47.8125 47.8125 39.8218 47.8125 30C47.8146 28.0051 47.4799 26.0241 46.8226 24.1406L45.0525 24.7588C45.6403 26.4436 45.9395 28.2156 45.9375 30C45.9375 38.788 38.788 45.9375 30 45.9375Z" />
                        <path
                            d="M50.2644 23.6216C50.113 23.7338 49.9989 23.8889 49.9369 24.0668C49.8749 24.2448 49.868 24.4372 49.9171 24.6191C51.1209 29.096 50.784 33.8476 48.9606 38.1099C47.1373 42.3721 43.9334 45.8973 39.8643 48.1184L40.7624 49.7644C44.8606 47.5276 48.1629 44.073 50.2128 39.8782C52.2627 35.6833 52.9589 30.9553 52.2054 26.3475L54.8157 27.9822L55.8109 26.3931L51.3198 23.5806C51.1601 23.4806 50.974 23.4311 50.7858 23.4384C50.5975 23.4457 50.4158 23.5096 50.2644 23.6216ZM8.94914 35.6252C9.08949 35.6252 9.22805 35.5937 9.3546 35.533C9.48114 35.4723 9.59245 35.384 9.6803 35.2745C9.76816 35.1651 9.83032 35.0373 9.8622 34.9006C9.89408 34.7639 9.89486 34.6218 9.86449 34.4848C8.85466 29.9442 9.40834 25.1957 11.4357 21.0092C13.4631 16.8228 16.8454 13.444 21.0339 11.4209L20.2178 9.7334C15.9565 11.7955 12.453 15.1474 10.2045 19.3134C7.95604 23.4793 7.07685 28.2477 7.69172 32.9416L4.19695 31.0506L3.30469 32.6997L8.50313 35.5122C8.64008 35.5864 8.79338 35.6252 8.94914 35.6252Z" />
                    </svg>

                    <h4>Secure Healthcare Platforms</h4>

                    <span class="wd-divider"></span>

                    <p>
                        Platforms designed to protect sensitive healthcare data while supporting scale and compliance. Built
                        with security, integration, and long-term reliability at the core.
                    </p>

                    <ul class="WD-tags">
                        <li>HIPAA-compliant data access and storage</li>
                        <li>Audit-ready logging and access controls</li>
                        <li>Integration with EMR, labs, and third-party systems</li>
                        <li>Scalable architecture for multi-location operations</li>
                    </ul>

                    <a href="{{ route('contact-us') }}" class="learn-more">
                        Contact Us
                        <svg class="card-arrow-icon" width="12" height="16" viewBox="0 0 12 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.0035 5.40804L1.41154 14L0 12.5885L8.59096 3.99651H1.01922V2H12V12.9808H10.0035V5.40804Z" />
                        </svg> </a>
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

                <a href="{{ route('contact-us') }}" class="WD-hero-btn">
                    Start Your Project
                    <img src="<?= public_asset_attr('icons/Arrow SVG.svg') ?>" alt="arrow" class="arrow-icon">
                </a>
            </div>

            <div class="HQ-cta-image">
                <img src="<?= image_attr('banner-side.png') ?>" alt=" Nurse"
                    class="HQ-cta-main-img">
                <img src="<?= image_attr('secure.png') ?>" alt="" class="HQ-cta-main-img-1">
                <img src="<?= image_attr('secure2.png') ?>" alt=""
                    class="HQ-cta-main-img-2">
                <img src="<?= image_attr('secure3.png') ?>" alt="" class="HQ-cta-main-img-3">
            </div>

        </div>
    </section>

    <section class="process-section cm-pd cm-drk-bg">
        <span class="blur-shape-center"></span>
        <span class="blur-shape-right"></span>
        <span class="blur-shape-bottom"></span>

        <div class="container process-container">

            <span class="section-badge-dark">
                <i></i>How We Work
            </span>

            <h2 class="section-title-white">
                Our Approach to Healthcare Digital Solutions
            </h2>

            <div class="process-cards owl-carousel">

                <div class="process-card">
                    <span class="step">01</span>
                    <h3>Patient-First Design</h3>
                    <hr>
                    <p>
                        Solutions around patient experience, accessibility, and ease of use for all stakeholders.
                    </p>
                </div>

                <div class="process-card">
                    <span class="step">02</span>
                    <h3>Security & Compliance by Design</h3>
                    <hr>
                    <p>
                        Data protection, privacy, and regulatory compliance are embedded into every stage of development.
                    </p>
                </div>

                <div class="process-card">
                    <span class="step">03</span>
                    <h3>Workflow-Driven Development</h3>
                    <hr>
                    <p>
                        Built to align with real clinical and operational workflows, reducing complexity and manual effort.
                    </p>
                </div>

                <div class="process-card">
                    <span class="step">04</span>
                    <h3>Scalable & Future-Ready Architecture</h3>
                    <hr>
                    <p>
                        Systems that scale reliably, integrate easily, and support long-term healthcare innovation.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- <section class="industry-section cm-pd cm-drk-bg">

                                        <span class="industry-blur center"></span>
                                        <span class="industry-blur left"></span>
                                        <span class="industry-blur right"></span>

                                        <div class="container process-container">

                                            <span class="section-badge-dark">
                                                <i></i> OUR INDUSTRY
                                            </span>

                                            <h2 class="section-title-white">
                                                Crafting Unique and Tailored Mobile <br>
                                                Apps for a Spectrum of Industries
                                            </h2>

                                            <div class="industry-tabs">

                                                <a href="#" class="industry-tab active" data-industry="healthcare">
                                                    <span class="icon-wrap">
                                                        <img src="/public/asset/icons/industry Icons/Group 1000006180.png') }}" alt="">
                                                    </span>
                                                    <p>Healthcare</p>
                                                </a>

                                                <a href="#" class="industry-tab" data-industry="real-estate">
                                                    <span class="icon-wrap">
                                                        <img src="/public/asset/icons/industry Icons/Group 1000006181.png') }}" alt="">
                                                    </span>
                                                    <p>Real Estate</p>
                                                </a>

                                                <a href="#" class="industry-tab" data-industry="logistics">
                                                    <span class="icon-wrap">
                                                        <img src="/public/asset/icons/industry Icons/Frame.png') }}" alt="">
                                                    </span>
                                                    <p>Logistics</p>
                                                </a>

                                                <a href="#" class="industry-tab" data-industry="travel">
                                                    <span class="icon-wrap">
                                                        <img src="/public/asset/icons/industry Icons/Group 1000006181-1.png') }}" alt="">
                                                    </span>
                                                    <p>Travel</p>
                                                </a>

                                                <a href="#" class="industry-tab" data-industry="fintech">
                                                    <span class="icon-wrap">
                                                        <img src="/public/asset/icons/industry Icons/Group 1000006181-2.png') }}" alt="">
                                                    </span>
                                                    <p>FinTech</p>
                                                </a>

                                                <a href="#" class="industry-tab" data-industry="telecom">
                                                    <span class="icon-wrap">
                                                        <img src="/public/asset/icons/industry Icons/Group 1000006186.png') }}" alt="">
                                                    </span>
                                                    <p>Telecom</p>
                                                </a>

                                                <a href="#" class="industry-tab" data-industry="manufacturing">
                                                    <span class="icon-wrap">
                                                        <img src="/public/asset/icons/industry Icons/Group 1000006180-1.png') }}" alt="">
                                                    </span>
                                                    <p>Manufacturing</p>
                                                </a>

                                                <a href="#" class="industry-tab" data-industry="automotive">
                                                    <span class="icon-wrap">
                                                        <img src="/public/asset/icons/industry Icons/Group 1000006181-3.png') }}" alt="">
                                                    </span>
                                                    <p>Automotive</p>
                                                </a>

                                            </div>

                                            <div class="industry-content">

                                                <div class="industry-text">
                                                    <h3>Healthcare</h3>
                                                    <p>
                                                        We cater to HIPAA-compliant healthcare development solutions through
                                                        advanced telemedicine EHR systems and AI diagnostics for improved
                                                        patient care.
                                                    </p>

                                                    <div class="tag"><span></span> Telemedicine App Development</div>
                                                    <div class="tag"><span></span> EHR & EMR Software Solutions</div>
                                                    <div class="tag"><span></span> AI-Powered Healthcare Analytics</div>
                                                    <div class="tag"><span></span> Remote Patient Monitoring Systems</div>
                                                </div>

                                                <div class="industry-image">
                                                    <img src="/public/asset/images/Rectangle 18167.png') }}" alt="">
                                                </div>

                                            </div>

                                        </div>
                                    </section> -->

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