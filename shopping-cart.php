<?php
$bodyClass = 'cart-page';
include 'include/header.php';
?>
    <main class="cart-wrap">
        <div class="container cart-container">
            <a href="index.php" class="cart-back-link"><i class="fas fa-arrow-left"></i> Go Back</a>
            <h1>Shopping Cart</h1>
            <p class="cart-count">3 items in your cart</p>

            <div class="row">
                <section class="col-lg-8">
                    <article class="cart-item-card">
                        <div class="cart-item-image">
                            <span>33% OFF</span>
                            <img src="assets/images/product1.svg" alt="Native Flower Vase">
                        </div>
                        <div class="cart-item-body">
                            <small>Fine ceramics</small>
                            <h3>Native Flower Vase</h3>
                            <p class="cart-item-size"><span class="active">500ml</span><span>1L</span></p>
                            <p class="cart-item-price">Rs. 1,990 <del>Rs. 3,000</del></p>
                        </div>
                        <div class="cart-item-actions">
                            <button class="cart-delete-btn"><i class="far fa-trash-alt"></i></button>
                            <div class="cart-qty">
                                <button>-</button>
                                <span>2</span>
                                <button>+</button>
                            </div>
                        </div>
                    </article>

                    <article class="cart-item-card">
                        <div class="cart-item-image">
                            <img src="assets/images/product6.svg" alt="Knife and Fork Set">
                        </div>
                        <div class="cart-item-body">
                            <small>Fine ceramics</small>
                            <h3>Knife and Fork Set</h3>
                            <p class="cart-item-price">Rs. 1,999</p>
                        </div>
                        <div class="cart-item-actions">
                            <button class="cart-delete-btn"><i class="far fa-trash-alt"></i></button>
                            <div class="cart-qty">
                                <button>-</button>
                                <span>1</span>
                                <button>+</button>
                            </div>
                        </div>
                    </article>

                    <article class="cart-item-card">
                        <div class="cart-item-image">
                            <span>27% OFF</span>
                            <img src="assets/images/product2.svg" alt="Gorilla Wine">
                        </div>
                        <div class="cart-item-body">
                            <small>Fine glass</small>
                            <h3>Gorilla Wine</h3>
                            <p class="cart-item-size"><span class="active">250ml</span><span>500ml</span><span>1L</span>
                            </p>
                            <p class="cart-item-price">Rs. 489 <del>Rs. 700</del></p>
                        </div>
                        <div class="cart-item-actions">
                            <button class="cart-delete-btn"><i class="far fa-trash-alt"></i></button>
                            <div class="cart-qty">
                                <button>-</button>
                                <span>3</span>
                                <button>+</button>
                            </div>
                        </div>
                    </article>

                    <article class="cart-item-card">
                        <div class="cart-item-image">
                            <span>8% OFF</span>
                            <img src="assets/images/product4.svg" alt="Fluffy Octopus">
                        </div>
                        <div class="cart-item-body">
                            <small>Soft Toys &amp; Stationery</small>
                            <h3>Fluffy Octopus</h3>
                            <p class="cart-item-price">Rs. 1,220 <del>Rs. 1,350</del></p>
                        </div>
                        <div class="cart-item-actions">
                            <button class="cart-delete-btn"><i class="far fa-trash-alt"></i></button>
                            <div class="cart-qty">
                                <button>-</button>
                                <span>2</span>
                                <button>+</button>
                            </div>
                        </div>
                    </article>
                </section>

                <aside class="col-lg-4">
                    <div class="order-summary-card">
                        <h2>Order Summary</h2>
                        <div class="summary-row"><span>Subtotal</span><strong>Rs. 129,000</strong></div>
                        <div class="summary-row saving"><span>Total Saving</span><strong>Rs. 22,000</strong></div>
                        <hr>
                        <div class="summary-total"><span>Total</span><strong>Rs. 117,000</strong></div>

                        <button class="btn-checkout">Proceed to Checkout <i class="fas fa-arrow-right"></i></button>
                        <button class="btn-continue">Continue Shopping</button>

                        <ul class="cart-benefits">
                            <li><i class="far fa-check-circle"></i> Secure Checkout</li>
                            <li><i class="far fa-credit-card"></i> Multiple Payment Options</li>
                            <li><i class="fas fa-box"></i> Cash on Delivery Available</li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </main>
<?php include 'include/footer.php'?>
