<?php
if (defined('SITE_FOOTER_RENDERED')) {
    return;
}
define('SITE_FOOTER_RENDERED', true);

if (!defined('SITE_PATHS_LOADED')) {
    require_once __DIR__ . '/paths.php';
}
?>
<footer class="footer-panel space150">
    <div class="container">
        <div class="footer-flex-first d-flex justify-content-between align-items-center">
            <div class="footer-flex footer-flex1">
                <p class="value-num">24,859+</p>
                <p class="value-detail">Leads Driven for clients</p>
            </div>
            <div class="footer-flex footer-flex2">
                <p class="value-num">$10,085,355+</p>
                <p class="value-detail">Revenue Driven for Client</p>
            </div>
            <div class="footer-flex footer-flex3">
                <p class="value-num">3,121,24+</p>
                <p class="value-detail">Hours of Expertise</p>
            </div>
            <div class="footer-web d-flex justify-content-between">
                <p class="footer-para">Discover How we can help your business</p>
                <form autocomplete="off">
                    <input class="footer-input-box" type="text" name="text" id="news-web" placeholder="Enter Your Website" required="">
                    <button class="footer-sub">Send me a Proposal</button>
                </form>
            </div>
        </div>
        <div class="footer-flex-second d-flex justify-content-between align-items-start">
            <div class="footer-detail-company">
                <img src="<?= image_attr('logo-footer.png') ?>" alt="">
                <p class="footer-detail-para">We helps businesses scale with data-driven PPC strategies, SEO, and web development</p>
                <p class="call-us-text">Give us a Ring</p>
                <a href="tel:+91 7976586680" class="footer-call">+91 7976586680</a>
            </div>
            <div class="company-footer-list">
                <p class="footer-title">Solutions</p>
                <a href="<?= htmlspecialchars(site_url('service/google-ads.php'), ENT_QUOTES, 'UTF-8') ?>" class="footer-links">Google Ads</a>
                <a href="<?= htmlspecialchars(site_url('service/social-media-ads.php'), ENT_QUOTES, 'UTF-8') ?>" class="footer-links">Social Media Ads</a>
                <a href="<?= htmlspecialchars(site_url('service/seo-services.php'), ENT_QUOTES, 'UTF-8') ?>" class="footer-links">SEO Services</a>
                <a href="<?= htmlspecialchars(site_url('service/shoping-ads.php'), ENT_QUOTES, 'UTF-8') ?>" class="footer-links">Shopping Ads</a>
                <a href="<?= htmlspecialchars(site_url('service/meta-ads.php'), ENT_QUOTES, 'UTF-8') ?>" class="footer-links">Meta Ads</a>
                <a href="<?= htmlspecialchars(site_url('service/lead-generation.php'), ENT_QUOTES, 'UTF-8') ?>" class="footer-links">Lead Generation</a>
            </div>

            <div class="company-footer-list">
                <p class="footer-title">Industries</p>
                <?php include __DIR__ . '/includes/footer-industries-links.php'; ?>
            </div>

            <div class="company-footer-list">
                <p class="footer-title">Case Studies</p>
                <a href="#" class="footer-links">Real Estate Leads Boost</a>
                <a href="#" class="footer-links">Local Business Expansion</a>
                <a href="#" class="footer-links">SaaS Marketing Wins</a>
                <a href="#" class="footer-links">E-commerce Growth</a>
                <a href="#" class="footer-links">SEO Traffic Growth</a>
            </div>

            <div class="company-footer-list">
                <p class="footer-title">Other</p>
                <a href="<?= htmlspecialchars(site_url('about.php'), ENT_QUOTES, 'UTF-8') ?>" class="footer-links">About Us</a>
                <a href="#" class="footer-links">Careers</a>
                <a href="#" class="footer-links">Press & Media</a>
                <a href="#" class="footer-links">Privacy Policy</a>
                <a href="#" class="footer-links">Terms & Conditions</a>
            </div>
        </div>
        <p class="copyright text-center">© 2025 Samarth Infoservices. All rights reserved.</p>
    </div>
</footer>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade popup-btn" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="popform-flex d-flex justify-content-between ">
            <div class="popup-left">
                <img class="modal-image" src="<?= image_attr('popup_react.png') ?>" alt="" width="100%">
            </div>
            <div class="get-right popup-right">
                <p class="get-form-head">Fill the form &amp; get Your Free <span class="heading-title">PPC Strategy</span> Today!</p>
                <form autocomplete="off" id="form-footer" class="m-0" action="<?= htmlspecialchars(site_url('create.php'), ENT_QUOTES, 'UTF-8') ?>" method="post">
                    <div class="input-form">
                        <input type="text" class="form-control" placeholder="Your Name" name="name" required="">
                    </div>
                    <div class="input-form">
                        <input type="email" class="form-control" placeholder="Email Address" name="email" required="">
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
                        <input type="text" class="form-control" placeholder="Website URL" name="web_url" required="">
                    </div>
                    <div class="input-form">
                        <textarea class="form-control" placeholder="Message" rows="3" name="message" required=""></textarea>
                    </div>
                    <div class="about-btn about-btn-green text-start">
                        <button>Get a FREE Consulation</button>
                    </div>
             </form>
         </div>
        </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> 
<script>
    AOS.init();
    AOS.init({
  duration: 1500,
})

// Add this script to your existing code
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('myinput');
    if (!slider) {
        return;
    }

    const budgetDisplay = document.createElement('div');
    budgetDisplay.className = 'budget-value-display';
    budgetDisplay.innerHTML = `<strong>$${slider.value}</strong>`;

    // Insert the display above the slider
    slider.parentNode.insertBefore(budgetDisplay, slider);
    
    // Update function
    function updateBudgetDisplay() {
        const value = slider.value;
        budgetDisplay.innerHTML = `<strong>$${value}</strong>`;
        
        // Update gradient background
        const percentage = (value - slider.min) / (slider.max - slider.min) * 100;
        slider.style.background = `linear-gradient(to right, #1AFF94 0%, #1AFF94 ${percentage}%, #4D80FF ${percentage}%, #4D80FF 100%)`;
    }
    
    // Initialize
    updateBudgetDisplay();
    
    // Add event listener
    slider.addEventListener('input', updateBudgetDisplay);
    
    // Add name attribute for form submission
    slider.setAttribute('name', 'budget');
    
    // Update range values to match dollar amounts (0-500)
    slider.setAttribute('min', '0');
    slider.setAttribute('max', '500');
    slider.setAttribute('value', '250');
    slider.setAttribute('step', '50');
    
    // Update the progress result labels if they exist
    const progressResult = document.querySelector('.progress-result');
    if (progressResult) {
        const labels = progressResult.querySelectorAll('p');
        if (labels.length >= 2) {
            labels[0].textContent = '$0';
            labels[1].textContent = '$500';
        }
    }
});

$(document).ready(function() {  

$('.modal-button').click(function (){
    var title = $(this).attr('data-title');
    var image = $(this).attr('data-image');
    $('.heading-title').html(title);
    $('.modal-image').attr('src', (window.IMAGES_BASE || '/smartinfoservice/images/') + encodeURIComponent(image || ''));
})

$(".industries-slider").slick({
    arrows: false,
    speed: 5000,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: 'linear',
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    swipeToSlide: false,
    centerMode: true,
    variableWidth: true,
    focusOnSelect: false,
    pauseOnHover: false,
    responsive: [{
    breakpoint: 750,
    settings: {
    slidesToShow: 3,
    }
    }]
    });
});

$('.testimonial-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 4000,
    dots: false,
    infinite: true,
    cssEase: 'linear',
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 770,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]

});

$('.case-study-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 4000,
    dots: false,
    infinite: true,
    cssEase: 'linear',
    responsive: [{
        breakpoint: 480,
        settings: {
            dots: true
        }
    }]

});

    $('.service-testimonial-flex').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,
        dots: true,
        infinite: true,
        cssEase: 'linear',
        responsive: [{
                breakpoint: 990,
                settings: {
                    dots: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    dots: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]

    });
$('.service-testimonial-flex1').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 4000,
    dots: false,
    rtl: true,
    infinite: true,
    cssEase: 'linear',
    responsive: [{
        breakpoint: 480,
        settings: {
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }]

}); 
</script> 
<script >

    $(".navbar-toggler").click(function() {
        $("body").toggleClass('bg-layer');
        $(this).toggleClass('menu-close');
    });

(function () {
    const slider = document.getElementById("myinput");
    if (!slider) {
        return;
    }
    const min = slider.min;
    const max = slider.max;
    const value = slider.value;
    slider.style.background = `linear-gradient(to right, #1AFF94 0%, #1AFF94 ${(value - min) / (max - min) * 100}%, #4D80FF ${(value - min) / (max - min) * 100}%, #4D80FF 100%)`;
    slider.oninput = function() {
        this.style.background = `linear-gradient(to right, #1AFF94 0%, #1AFF94 ${(this.value - this.min) / (this.max - this.min) * 100}%, #4D80FF ${(this.value - this.min) / (this.max - this.min) * 100}%, #4D80FF 100%)`;
    };
})();
</script>
<?php
if (!defined('SITE_HTML_CLOSED')) {
    define('SITE_HTML_CLOSED', true);
    echo '</body></html>';
}
?>