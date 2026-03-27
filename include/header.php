<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jack Store</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/images/fav.png" type="image/png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap 4.6 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body<?php if (isset($bodyClass) && $bodyClass !== ''): ?> class="<?php echo htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8'); ?>"<?php endif; ?>>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container position-relative">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.svg" alt="Jack Store">
            </a>

            <div class="nav-item-shop ml-4">
                <button class="btn btn-shop">
                    Shop
                    <i class="fas fa-chevron-down" style="font-size: 0.8rem;"></i>
                </button>
                <div class="mega-menu">
                    <div class="container">
                        <div class="row w-100">
                            <div class="col-md-9 menu-section">
                                <h6>Shop by Category</h6>
                                <ul class="menu-links">
                                    <li><a href="#">Skincare & Beauty</a></li>
                                    <li><a href="#">Jewelry & Accessories</a></li>
                                    <li><a href="#">Bath Essentials</a></li>
                                    <li><a href="#">Home & Kitchen</a></li>
                                    <li><a href="#">Fine Ceramics</a></li>
                                    <li><a href="#">Fine Glass</a></li>
                                    <li><a href="#">Soft Toys & Stationery</a></li>
                                    <li><a href="#">Kids Section</a></li>
                                    <li><a href="#">Home Decors</a></li>
                                    <li><a href="#">Electronic Gadgets</a></li>
                                    <li><a href="#">Bags</a></li>
                                    <li><a href="#">Nightwear & Innerwear</a></li>
                                    <li><a href="#">Footwears</a></li>
                                    <li><a href="#">Hygiene and Wellness</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 menu-section trending">
                                <h6>Trending Now</h6>
                                <ul class="menu-links" style="grid-template-columns: 1fr;">
                                    <li><a href="#">New Arrivals</a></li>
                                    <li><a href="#">Best Sellers</a></li>
                                    <li><a href="#">Top Rated</a></li>
                                    <li><a href="#">Customer Favorites</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search for products, brands and more...">
                <i class="fas fa-search search-icon"></i>
            </div>

            <div class="d-flex align-items-center">
                <a href="login.php" class="nav-right-item">
                    <i class="far fa-user" style="font-size: 1.1rem;"></i>
                    Account
                </a>
                <a href="shopping-cart.php" class="btn-cart">
                    <i class="fas fa-shopping-cart"></i>
                    Cart
                    <span class="cart-badge">3</span>
                </a>
            </div>
        </div>
    </nav>
