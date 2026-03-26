<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment | Jack Store</title>
    <link rel="icon" href="assets/images/fav.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="payment-page">
    <main class="payment-wrap">
        <div class="container payment-container">
            <a href="checkout.php" class="checkout-back-link"><i class="fas fa-arrow-left"></i> Go Back</a>
            <h1>Payment</h1>
            <p class="checkout-subtitle">Finalize your payment</p>

            <div class="row">
                <section class="col-lg-8">
                    <div class="payment-form-card">
                        <div class="payment-header-row">
                            <img src="assets/images/e-sewa.svg" alt="eSewa" class="payment-brand-logo">
                            <div class="payment-required">
                                <small>Total payment Required</small>
                                <h2>Rs. 17,200</h2>
                            </div>
                        </div>

                        <form action="#" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="payName">Full Name</label>
                                    <input type="text" id="payName" class="form-control" placeholder="eg. Ramesh Thapa">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="payPhone">Phone Number</label>
                                    <input type="text" id="payPhone" class="form-control" placeholder="+977 98XXXXXXXX">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="payEmail">Email Address</label>
                                <input type="email" id="payEmail" class="form-control" placeholder="eg. someone@email.com">
                            </div>

                            <a href="order-confirmed.php" class="btn-checkout-pay">Proceed to payment <i
                                    class="fas fa-arrow-right"></i></a>
                            <a href="shopping-cart.php" class="btn-checkout-back">Go back to Cart</a>
                        </form>
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
                    </div>
                </aside>
            </div>
        </div>
    </main>
</body>

</html>
