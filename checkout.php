<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Jack Store</title>
    <link rel="icon" href="assets/images/fav.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="checkout-page">
    <main class="checkout-wrap">
        <div class="container checkout-container">
            <a href="shopping-cart.php" class="checkout-back-link"><i class="fas fa-arrow-left"></i> Go Back</a>
            <h1>Checkout</h1>
            <p class="checkout-subtitle">Complete your purchase</p>

            <div class="row">
                <section class="col-lg-8">
                    <div class="checkout-card">
                        <h2>Contact Information</h2>
                        <form action="#" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" id="fullName" class="form-control" placeholder="eg. Ramesh Thapa">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" id="phone" class="form-control" placeholder="+977 98XXXXXXXX">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" class="form-control" placeholder="eg. someone@email.com">
                            </div>
                        </form>
                    </div>

                    <div class="checkout-card">
                        <h2>Shipping Address</h2>
                        <form action="#" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="province">Province</label>
                                    <select id="province" class="form-control">
                                        <option>Select Province</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="district">City/District</label>
                                    <select id="district" class="form-control">
                                        <option>Select District</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="street">Street Address</label>
                                    <input type="text" id="street" class="form-control" placeholder="eg. Mangal Bazar">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="houseNo">House No</label>
                                    <input type="text" id="houseNo" class="form-control" placeholder="eg. 178/11">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label for="landmark">Landmark (Optional)</label>
                                <input type="text" id="landmark" class="form-control"
                                    placeholder="eg. Near GEMS school, Pashupati temple, etc">
                            </div>
                        </form>
                    </div>

                    <div class="checkout-card">
                        <h2>Payment Method</h2>
                        <div class="payment-methods-grid">
                            <button class="payment-pill active"><img src="assets/images/e-sewa.svg" alt="eSewa"></button>
                            <button class="payment-pill"><img src="assets/images/khalti.svg" alt="Khalti"></button>
                            <button class="payment-pill"><img src="assets/images/fonePay.svg" alt="FonePay"></button>
                            <button class="payment-pill"><img src="assets/images/visa.svg" alt="Visa"></button>
                            <button class="payment-pill"><img src="assets/images/case-delivery.svg"
                                    alt="Cash On Delivery"></button>
                        </div>
                        <p class="payment-note"><i class="fas fa-info-circle"></i> Cash on delivery is only available for
                            our customers with verified KYC.</p>
                    </div>
                </section>

                <aside class="col-lg-4">
                    <div class="checkout-summary-card">
                        <h2>Order Summary</h2>

                        <div class="checkout-order-item">
                            <img src="assets/images/product1.svg" alt="Native Flower Vase">
                            <div>
                                <h4>Native Flower Vase</h4>
                                <p>Rs. 1,990</p>
                            </div>
                            <small>x2</small>
                        </div>

                        <div class="checkout-order-item">
                            <img src="assets/images/product6.svg" alt="Knife and Fork Set">
                            <div>
                                <h4>Knife and Fork Set</h4>
                                <p>Rs. 1,999</p>
                            </div>
                            <small>x1</small>
                        </div>

                        <div class="checkout-order-item">
                            <img src="assets/images/product2.svg" alt="Gorilla Wine">
                            <div>
                                <h4>Gorilla Wine</h4>
                                <p>Rs. 489</p>
                            </div>
                            <small>x3</small>
                        </div>

                        <div class="checkout-order-item mb-2">
                            <img src="assets/images/product4.svg" alt="Fluffy Octopus">
                            <div>
                                <h4>Fluffy Octopus</h4>
                                <p>Rs. 1,220</p>
                            </div>
                            <small>x2</small>
                        </div>

                        <div class="checkout-summary-row"><span>Subtotal</span><strong>Rs. 19,000</strong></div>
                        <div class="checkout-summary-row saving"><span>Total Saving</span><strong>Rs. 2,000</strong></div>
                        <div class="checkout-summary-row"><span>Delivery Charge</span><strong>Calculating</strong></div>

                        <hr>

                        <div class="checkout-total-row"><span>Total</span><strong>Rs. 17,200</strong></div>

                        <button class="btn-checkout-pay">Proceed to payment <i class="fas fa-arrow-right"></i></button>
                        <a href="shopping-cart.php" class="btn-checkout-back">Go back to Cart</a>
                    </div>
                </aside>
            </div>
        </div>
    </main>
</body>

</html>
