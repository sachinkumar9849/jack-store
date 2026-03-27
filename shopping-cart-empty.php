<?php
$bodyClass = 'cart-page cart-empty-page';
include 'include/header.php';
?>
    <main class="cart-wrap">
        <div class="container cart-container">
            <a href="index.php" class="cart-back-link"><i class="fas fa-arrow-left"></i> Go Back</a>
            <h1>Shopping Cart</h1>
            <p class="cart-count">0 items in your cart</p>

            <section class="cart-empty-state">
                <img src="assets/images/shopping-empty.svg" alt="Empty Shopping Cart">
                <h2>Your Cart is empty</h2>
                <p>Add some products to get started!</p>
                <a href="product-list.php" class="btn-start-shopping">Start Shopping</a>
            </section>
        </div>
    </main>
<?php include 'include/footer.php'?>
