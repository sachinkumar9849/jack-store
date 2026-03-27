<?php
$bodyClass = 'faq-page';
include 'include/header.php';
?>
<main class="faq-wrap">
    <div class="container faq-container">
        <div class="faq-header text-center">
            <h1>Frequently Asked Questions</h1>
            <p>We've addressed some of the most frequently asked questions here to help you out!</p>
        </div>

        <div class="faq-accordion" id="faqAccordion">
            <!-- FAQ Item 1 -->
            <div class="faq-card">
                <div class="faq-card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h3 class="faq-title">Can we order from the online store and receive the order at nearest store?</h3>
                    <i class="fas faq-icon"></i>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="faq-card-body">
                        Absolutely! You can easily place an order through our online store. During the checkout process, simply select the nearest store location where you'd like to pick up your items. This convenient option allows you to shop from the comfort of your home while ensuring that your order is ready for you at a location that works best for you. Plus, you can avoid shipping fees and get your items even faster!
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-card">
                <div class="faq-card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h3 class="faq-title">How many days does the delivery take?</h3>
                    <i class="fas faq-icon"></i>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                    <div class="faq-card-body">
                        Delivery typically takes 3-5 business days depending on your location.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-card">
                <div class="faq-card-header collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h3 class="faq-title">Can we pay advance and then pay remaining amount later?</h3>
                    <i class="fas faq-icon"></i>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                    <div class="faq-card-body">
                        Yes, we offer partial payment options for selected items. Please check the product details for eligibility.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-card">
                <div class="faq-card-header collapsed" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h3 class="faq-title">How can I track my order?</h3>
                    <i class="fas faq-icon"></i>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                    <div class="faq-card-body">
                        Once your order is shipped, you will receive a tracking link via email and SMS.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-card">
                <div class="faq-card-header collapsed" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <h3 class="faq-title">What is your return or exchange policy?</h3>
                    <i class="fas faq-icon"></i>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqAccordion">
                    <div class="faq-card-body">
                        We offer a 7-day return and exchange policy for unused items in their original packaging.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="faq-card">
                <div class="faq-card-header collapsed" id="headingSix" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <h3 class="faq-title">Do prices differ between online and in-store?</h3>
                    <i class="fas faq-icon"></i>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqAccordion">
                    <div class="faq-card-body">
                        Prices are generally the same, but exclusive online promotions may apply.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div class="faq-card">
                <div class="faq-card-header collapsed" id="headingSeven" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <h3 class="faq-title">Do I need an account to place an order?</h3>
                    <i class="fas faq-icon"></i>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#faqAccordion">
                    <div class="faq-card-body">
                        No, you can check out as a guest, but creating an account offers faster checkout and order tracking.
                    </div>
                </div>
            </div>
        </div>

        <div class="faq-contact-box">
            <h4>Contact Us</h4>
            <p>If you still have any questions or concerns in your mind, please contact us at:</p>
            <div class="faq-contact-methods">
                <a href="tel:+9779876543210" class="contact-method-item">
                    <div class="method-icon phone">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <span>+977 9876543210</span>
                </a>
                <a href="mailto:info@jackstore.com" class="contact-method-item">
                    <div class="method-icon email">
                        <i class="far fa-envelope"></i>
                    </div>
                    <span>info@jackstore.com</span>
                </a>
                <a href="https://wa.me/9779816217782" class="contact-method-item" target="_blank">
                    <div class="method-icon whatsapp">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <span>+977 9816217782</span>
                </a>
            </div>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'include/footer.php'; ?>
