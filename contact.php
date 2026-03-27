<?php
$bodyClass = 'contact-page';
include 'include/header.php';
?>
<main class="contact-wrap">
    <div class="container contact-container">
        <a href="javascript:history.back()" class="go-back-link"><i class="fas fa-arrow-left"></i> Go Back</a>
        
        <div class="contact-header">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you! Send us a message and we'll respond as soon as possible.</p>
        </div>

        <div class="row">
            <!-- Left Column: Form -->
            <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="contact-form-card">
                    <h2>Send us a Message</h2>
                    <p class="form-desc">Fill out the form below and our team will get back to you shortly.</p>
                    
                    <form action="#" method="POST" class="contact-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" placeholder="eg. Ramesh Thapa">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" placeholder="+977 98XXXXXXXXX">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="eg. someone@email.com">
                        </div>
                        <div class="form-group message-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="5" placeholder="Write your message here" maxlength="250" oninput="document.getElementById('charCount').textContent = this.value.length + '/250'"></textarea>
                            <div class="char-count-wrap"><span id="charCount">0/250</span></div>
                        </div>
                        <button type="submit" class="btn btn-send-message">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Right Column: Locations -->
            <div class="col-lg-5">
                <h3 class="store-locations-title">Our Store Locations</h3>
                
                <div class="store-location-card mb-4 mt-3">
                    <div class="map-thumbnail">
                        <!-- Simulated map using an iframe to look like the static thumbnail -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14128.989710385966!2d85.3056044!3d27.709384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1700000000000!5m2!1sen!2snp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="store-info">
                        <h4>Jamal Store</h4>
                        <div class="store-contact-row">
                            <div class="icon-wrap phone"><i class="fas fa-phone-alt"></i></div>
                            <span>+977 9876543210</span>
                        </div>
                        <div class="store-contact-row">
                            <div class="icon-wrap email"><i class="far fa-envelope"></i></div>
                            <span>info@jamaljackstore.com</span>
                        </div>
                        <div class="store-contact-row">
                            <div class="icon-wrap whatsapp"><i class="fab fa-whatsapp"></i></div>
                            <span>+977 9816217172</span>
                        </div>
                    </div>
                </div>

                <div class="store-location-card">
                    <div class="map-thumbnail">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14130.857353934944!2d85.2911131!3d27.7020815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb185c5edc384d%3A0xe5a4ab488730ad3d!2sKalimati%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1700000000000!5m2!1sen!2snp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="store-info">
                        <h4>Kalimati Store</h4>
                        <div class="store-contact-row">
                            <div class="icon-wrap phone"><i class="fas fa-phone-alt"></i></div>
                            <span>+977 9871056872</span>
                        </div>
                        <div class="store-contact-row">
                            <div class="icon-wrap email"><i class="far fa-envelope"></i></div>
                            <span>info@kalimatijackstore.com</span>
                        </div>
                        <div class="store-contact-row">
                            <div class="icon-wrap whatsapp"><i class="fab fa-whatsapp"></i></div>
                            <span>+977 9816217782</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<?php include 'include/footer.php'; ?>
