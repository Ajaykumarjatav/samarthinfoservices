<div class="input-form-flex d-flex justify-content-between">
    <div class="input-form">
        <label>Full Name*</label>
        <input type="text" class="form-control"name="name" required="">
    </div>
    <div class="input-form">
        <label>Email address*</label>
        <input type="email" class="form-control" name="email" required="">
    </div>
</div>
<div class="input-form-flex d-flex justify-content-between">
    <div class="input-form">
        <label>Phone Number*</label>
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
        <label>Website URL</label>
        <input type="url" class="form-control" name="web_url" required="">
    </div>
</div>
<!-- <div class="monthly-progress">
    <label>Monthly Marketing Budget</label>
    <input id="myinput" type="range" min="0" value="25" max="200" />
    <div class="progress-result d-flex justify-content-between">
        <p>$0</p>
        <p>$500</p>
    </div>
</div> -->
<!-- <div class="monthly-progress">
    <label>Monthly Marketing Budget</label>
    <input id="myinput" name="budget" type="range" min="0" max="500" value="250" step="50" />
    <div class="progress-result d-flex justify-content-between">
        <p>$0</p>
        <p>$500</p>
    </div>
</div> -->
<div class="input-form w-100">
    <label>Monthly Marketing Budget</label>
    <input type="number" class="form-control" name="budget" required>
</div>
<div class="input-form w-100">
    <label>Your Requirements</label>
    <textarea class="form-control"  rows="3" name="message" required=""></textarea>
</div>
<div class="about-btn about-btn-green text-start">
    <button>Get a Proposal<img src="<?= image_attr('serviceform-arrow.svg') ?>" alt="" class="ms-2"></button>
</div>