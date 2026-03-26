<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart Empty | Jack Store</title>
    <link rel="icon" href="assets/images/fav.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="cart-page cart-empty-page">
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
</body>

</html>
