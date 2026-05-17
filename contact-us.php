<?php
$meta_title = '';
$meta_description = '';
include './header.php';
?>
<section class="other-page-hero">
    <div class="other-hero-inner">

        <h1>Contact Us</h1>

        <div class="breadcrumbs">
            <a href="{{ route('home') }}">Home</a>
            <span>/</span>
            <a href="#" class="current">Contact Us</a>
        </div>

    </div>
</section>

<section class="contact-section cm-pd">
    <div class="container contact-wrapper">

        <div class="contact-form-box txt-lft">
            <span class="section-badge">
                <i></i> CONTACT US
            </span>

            <h2 class="section-title">Get in touch with us</h2>

            <p class="contact-desc">
                We’re here to help you every step of the way. Whether you need expert guidance,
                technical support, or details about our IT solutions, our team is always ready to connect.
            </p>

            <form class="contact-form" id="contactForm" method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" name="full_name" placeholder="Full Name" value="{{ old('full_name') }}">
                        @error('full_name')<div class="text-danger">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}">
                        @error('phone_number')<div class="text-danger">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <input type="text" name="company_name" placeholder="Company Name" value="{{ old('company_name') }}">
                        @error('company_name')<div class="text-danger">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
                        @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group full">
                        <textarea name="message" placeholder="Message">{{ old('message') }}</textarea>
                        @error('message')<div class="text-danger">{{ $message }}</div>@enderror
                    </div>
                </div>

                <button type="submit" class="SM-btn SM-btn-gradient-border btn-icon" id="submitBtn">
                    Submit Message
                    <img src="public/asset/icons/SVG.png" alt="arrow" class="arrow-icon">
                </button>
            </form>

            @if(session('success'))
                <div id="thankYouModal" class="thank-you-modal" role="dialog" aria-modal="true">
                    <div class="thank-you-inner">
                        <button id="thankClose" class="thank-close" aria-label="Close">×</button>
                        <div class="thank-icon">✓</div>
                        <h3>Thanks for reaching out!</h3>
                        <p class="thank-text">{{ session('success') }}</p>
                        <div class="thank-actions"><button id="thankCloseBtn" class="btn btn-primary">Close</button></div>
                    </div>
                </div>
            @endif

            <style>
                .thank-you-modal{position:fixed;inset:0;display:flex;align-items:center;justify-content:center;background:rgba(0,0,0,.45);z-index:9999;animation:modalFade .18s ease}
                .thank-you-inner{background:linear-gradient(180deg,#fff,#fbfbfb);padding:36px;border-radius:12px;max-width:640px;width:90%;text-align:center;box-shadow:0 20px 45px rgba(6,20,33,.35);transform:translateY(0);position:relative}
                .thank-icon{width:84px;height:84px;border-radius:50%;background:linear-gradient(135deg,#12c2e9,#c471ed);color:#fff;font-size:44px;line-height:84px;margin:0 auto 12px}
                .thank-you-inner h3{margin:6px 0 8px;font-size:22px}
                .thank-text{color:#333;margin-bottom:16px;font-size:16px}
                .thank-actions .btn{padding:10px 22px;border-radius:8px}
                .thank-close{position:absolute;top:10px;right:12px;border:0;background:transparent;font-size:24px;line-height:1;color:#444;cursor:pointer}
                @keyframes modalFade{from{opacity:0;transform:translateY(-6px)}to{opacity:1;transform:translateY(0)}}
                .text-danger{color:#c53030;margin-top:6px;font-size:14px}
            </style>

            <script>
                (function(){
                    const form = document.getElementById('contactForm');
                    const submitBtn = document.getElementById('submitBtn');
                    const csrfInput = document.querySelector('input[name="_token"]');
                    const csrf = csrfInput ? csrfInput.value : '';
                    let autoCloseTimer = null;

                    function startAutoClose(modal, ms=6000){
                        clearTimeout(autoCloseTimer);
                        autoCloseTimer = setTimeout(()=>{
                            if(modal) modal.style.display = 'none';
                        }, ms);
                    }

                    function attachCloseHandlers(modal){
                        if(!modal) return;
                        const btn = modal.querySelector('#thankClose');
                        const btn2 = modal.querySelector('#thankCloseBtn');
                        const close = () => { modal.style.display = 'none'; clearTimeout(autoCloseTimer); };
                        if(btn) btn.addEventListener('click', close);
                        if(btn2) btn2.addEventListener('click', close);
                        // click outside to close
                        modal.addEventListener('click', function(e){ if(e.target === modal) close(); });
                    }

                    function validate(){
                        const full = form.full_name.value.trim();
                        const phone = form.phone_number.value.trim();
                        const email = form.email.value.trim();
                        const message = form.message.value.trim();
                        if(!full || !phone || !email || !message) return false;
                        const re = /^\S+@\S+\.\S+$/;
                        return re.test(email);
                    }

                    form.addEventListener('submit', function(e){
                        if(!validate()){
                            return; // let server-side validation show messages on full submit
                        }

                        e.preventDefault();
                        submitBtn.disabled = true;

                        const data = new FormData(form);

                        fetch(form.action, {
                            method: 'POST',
                            credentials: 'same-origin',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': csrf
                            },
                            body: data
                        }).then(res => {
                            if(!res.ok){
                                submitBtn.disabled = false;
                                return res.text().then(text => { console.error('Server error:', text); form.submit(); });
                            }
                            return res.json().catch(() => null);
                        }).then(json => {
                            submitBtn.disabled = false;
                            if(!json) return;
                            if(json && json.success){
                                window.location.href = "/thank-you";
                                //showModal(json.message || 'Thank you!');
                                //form.reset();
                            }
                        }).catch((err) => { console.error(err); submitBtn.disabled = false; form.submit(); });
                    });

                    // function showModal(text){
                    //     let modal = document.getElementById('thankYouModal');
                    //     if(!modal){
                    //         modal = document.createElement('div');
                    //         modal.id = 'thankYouModal';
                    //         modal.className = 'thank-you-modal';
                    //         modal.innerHTML = '<div class="thank-you-inner">'
                    //             + '<button id="thankClose" class="thank-close" aria-label="Close">×</button>'
                    //             + '<div class="thank-icon">✓</div>'
                    //             + '<h3>Thanks for reaching out!</h3>'
                    //             + '<p class="thank-text">'+text+'</p>'
                    //             + '<div class="thank-actions"><button id="thankCloseBtn" class="btn btn-primary">Close</button></div>'
                    //             + '</div>';
                    //         document.body.appendChild(modal);
                    //     } else {
                    //         const txt = modal.querySelector('.thank-text');
                    //         if(txt) txt.textContent = text;
                    //     }
                    //     modal.style.display = 'flex';
                    //     attachCloseHandlers(modal);
                    //     startAutoClose(modal, 6000);
                    // }

                    // if server rendered modal exists, attach handlers and auto-close
                    const serverModal = document.getElementById('thankYouModal');
                    if(serverModal){ attachCloseHandlers(serverModal); startAutoClose(serverModal, 6000); }
                })();
            </script>
        </div>

        <div class="contact-info-wrapper">

            <div class="contact-info-card txt-lft cm-drk-bg process-container">

                <span class="contact-blur-shape-center"></span>
                <span class="contact-blur-shape-right"></span>


                <h3>Need a Help</h3>
                <p>Have question about our IT service or need immediate assistance?</p>

                <span class="info-divider"></span>

                <ul class="contact-info-list">
                    <li>
                        <img src="public/asset/icons/contact phone.png">
                        Phone: <a href="tel:+971502488011" style="color: inherit;text-decoration: none;">+971 50 248 8011</a>
                    </li>
                    <li>
                        <img src="public/asset/icons/mail.png">
                        Email: <a href="mailto:info@sanskrititechnologies.com" style="color: inherit;text-decoration: none;">info@sanskrititechnologies.com</a>
                    </li>
                    <li>
                        <img src="public/asset/icons/contact location.png" alt="">
                        Address: <a href="#">Business Center, Sharjah Publishing City Free Zone, Sharjah, United Arab Emirates</a>
                    </li>
                </ul>
            </div>

            <div class="contact-map">
                <iframe src="https://www.google.com/maps?q=Business Center, Sharjah Publishing City Free Zone, Sharjah, United Arab Emirates&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" allowfullscreen>
                </iframe>
            </div>

        </div>

    </div>
</section>

<?php 
require_once __DIR__ . '/footer.php';
?>