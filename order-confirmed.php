<?php
$bodyClass = 'order-confirm-page';
include 'include/header.php';
?>
<main class="order-confirm-wrap">
    <div class="order-confirm-card">
        <div class="order-confirm-icon">
            <i class="fas fa-check"></i>
        </div>
        <h1>Order Confirmed!</h1>
        <p>Your order has been placed and will be delivered to you soon!</p>

        <a href="product-list.php" class="btn-order-continue">Continue Shopping <i class="fas fa-arrow-right"></i></a>
        <a href="my-account.php" class="btn-order-view">View my orders</a>
    </div>
</main>
<?php include 'include/footer.php'?>