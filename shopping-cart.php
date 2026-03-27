<?php
$bodyClass = 'cart-page cart-filled-page';
include 'include/header.php';
?>
    <main class="cart-wrap">
        <div class="container cart-container">
            <a href="index.php" class="cart-back-link"><i class="fas fa-arrow-left"></i> Go Back</a>
            <h1>Shopping Cart</h1>
            <p class="cart-count">3 items in your cart</p>

            <div class="row">
                <!-- Cart Items Column -->
                <div class="col-lg-8">
                    <!-- Cart Item 1 -->
                    <div class="cart-item-card">
                        <div class="cart-item-badge">33% OFF</div>
                        <div class="cart-item-image">
                            <img src="assets/images/product1.svg" alt="Native Flower Vase">
                        </div>
                        <div class="cart-item-info">
                            <div class="cart-item-header">
                                <div>
                                    <span class="cart-item-category">Fine ceramics</span>
                                    <h3 class="cart-item-name">Native Flower Vase</h3>
                                </div>
                                <button class="cart-item-remove" title="Remove item"><i class="fas fa-trash-alt"></i></button>
                            </div>
                            <div class="cart-item-variants">
                                <span class="variant-tag active">500ml</span>
                                <span class="variant-tag">1L</span>
                            </div>
                            <div class="cart-item-bottom">
                                <div class="cart-item-price">
                                    <span class="price-current">Rs. 1,990</span>
                                    <span class="price-original">Rs. 3,000</span>
                                </div>
                                <div class="cart-qty-control">
                                    <button class="qty-btn qty-minus"><i class="fas fa-minus"></i></button>
                                    <span class="qty-value">2</span>
                                    <button class="qty-btn qty-plus"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Item 2 -->
                    <div class="cart-item-card">
                        <div class="cart-item-image">
                            <img src="assets/images/product2.svg" alt="Knife and Fork Set">
                        </div>
                        <div class="cart-item-info">
                            <div class="cart-item-header">
                                <div>
                                    <span class="cart-item-category">Fine ceramics</span>
                                    <h3 class="cart-item-name">Knife and Fork Set</h3>
                                </div>
                                <button class="cart-item-remove" title="Remove item"><i class="fas fa-trash-alt"></i></button>
                            </div>
                            <div class="cart-item-bottom">
                                <div class="cart-item-price">
                                    <span class="price-current">Rs. 1,999</span>
                                </div>
                                <div class="cart-qty-control">
                                    <button class="qty-btn qty-minus"><i class="fas fa-minus"></i></button>
                                    <span class="qty-value">1</span>
                                    <button class="qty-btn qty-plus"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Item 3 -->
                    <div class="cart-item-card">
                        <div class="cart-item-badge">27% OFF</div>
                        <div class="cart-item-image">
                            <img src="assets/images/product3.svg" alt="Gorilla Wine">
                        </div>
                        <div class="cart-item-info">
                            <div class="cart-item-header">
                                <div>
                                    <span class="cart-item-category">Fine glass</span>
                                    <h3 class="cart-item-name">Gorilla Wine</h3>
                                </div>
                                <button class="cart-item-remove" title="Remove item"><i class="fas fa-trash-alt"></i></button>
                            </div>
                            <div class="cart-item-variants">
                                <span class="variant-tag active">250ml</span>
                                <span class="variant-tag">500ml</span>
                                <span class="variant-tag">1L</span>
                            </div>
                            <div class="cart-item-bottom">
                                <div class="cart-item-price">
                                    <span class="price-current">Rs. 489</span>
                                    <span class="price-original">Rs. 700</span>
                                </div>
                                <div class="cart-qty-control">
                                    <button class="qty-btn qty-minus"><i class="fas fa-minus"></i></button>
                                    <span class="qty-value">3</span>
                                    <button class="qty-btn qty-plus"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Item 4 -->
                    <div class="cart-item-card">
                        <div class="cart-item-badge">8% OFF</div>
                        <div class="cart-item-image">
                            <img src="assets/images/product4.svg" alt="Fluffy Octopus">
                        </div>
                        <div class="cart-item-info">
                            <div class="cart-item-header">
                                <div>
                                    <span class="cart-item-category">Soft Toys & Stationery</span>
                                    <h3 class="cart-item-name">Fluffy Octopus</h3>
                                </div>
                                <button class="cart-item-remove" title="Remove item"><i class="fas fa-trash-alt"></i></button>
                            </div>
                            <div class="cart-item-bottom">
                                <div class="cart-item-price">
                                    <span class="price-current">Rs. 1,220</span>
                                    <span class="price-original">Rs. 1,350</span>
                                </div>
                                <div class="cart-qty-control">
                                    <button class="qty-btn qty-minus"><i class="fas fa-minus"></i></button>
                                    <span class="qty-value">2</span>
                                    <button class="qty-btn qty-plus"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary Column -->
                <div class="col-lg-4">
                    <div class="cart-summary-card">
                        <h2 class="cart-summary-title">Order Summary</h2>

                        <div class="cart-summary-row">
                            <span>Subtotal</span>
                            <strong>Rs. 129,000</strong>
                        </div>
                        <div class="cart-summary-row saving">
                            <span>Total Saving</span>
                            <strong>Rs. 22,000</strong>
                        </div>

                        <hr class="cart-summary-divider">

                        <div class="cart-summary-total">
                            <span>Total</span>
                            <strong>Rs. 117,000</strong>
                        </div>

                        <a href="checkout.php" class="btn-cart-checkout">
                            Proceed to Checkout <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="product-list.php" class="btn-cart-continue">Continue Shopping</a>

                        <div class="cart-trust-badges">
                            <div class="trust-badge-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>Secure Checkout</span>
                            </div>
                            <div class="trust-badge-item">
                                <i class="fas fa-credit-card"></i>
                                <span>Multiple Payment Options</span>
                            </div>
                            <div class="trust-badge-item">
                                <i class="fas fa-truck"></i>
                                <span>Cash on Delivery Available</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include 'include/footer.php'?>
