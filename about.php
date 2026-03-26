<?php
$bodyClass = 'about-page';
include 'include/header.php';
?>

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

    <main class="about-wrap">
        <div class="container about-container">
            <section class="about-story">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h2>The Story of</h2>
                        <h1>Jack Department Store</h1>
                        <p>
                            Once upon a time, in the heart of a bustling town, there stood a remarkable place known as
                            Jack's Department Store. Founded in 2010 by a visionary named Jack Sharma, this store
                            quickly became the go-to destination for shoppers seeking quality products across all
                            categories.
                        </p>
                        <p>
                            Jack believed that shopping should be an experience, not just a task. He filled the aisles
                            with friendly staff who were always ready to assist, creating a warm and welcoming
                            atmosphere.
                        </p>
                        <p>
                            As the years passed, Jack's commitment to excellence never wavered. He introduced seasonal
                            events, exclusive sales, and even workshops that brought people together.
                        </p>
                    </div>
                    <div class="col-lg-5 text-center">
                        <img src="assets/images/aboutImg.svg" alt="Jack Department Store Story" class="about-story-image">
                    </div>
                </div>

                <div class="about-stats">
                    <div class="stat-item">
                        <h3>15+</h3>
                        <p>Years Experience</p>
                    </div>
                    <div class="stat-item">
                        <h3>50K+</h3>
                        <p>Happy Customers</p>
                    </div>
                    <div class="stat-item">
                        <h3>2K+</h3>
                        <p>Products</p>
                    </div>
                </div>
            </section>

            <section class="mission-vision">
                <h2>Our Mission and Vision</h2>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <article class="mv-card">
                            <img src="assets/images/mission.svg" alt="Mission Image">
                            <h3>Mission</h3>
                            <p>
                                Jack saw shopping as a joyful experience rather than a chore. With friendly staff in
                                every aisle, he created a welcoming atmosphere where families spent weekends exploring
                                the store and discovering unique treasures.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="mv-card">
                            <img src="assets/images/vision.svg" alt="Vision Image">
                            <h3>Vision</h3>
                            <p>
                                Jack viewed shopping as fun, not a chore. With helpful staff, he fostered a warm
                                environment. Families explored the store on weekends, finding unique gifts and making
                                lasting memories.
                            </p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="focus-quality">
                <h2>Focus On Quality Imported Goods From China</h2>
                <div class="row align-items-center quality-content">
                    <div class="col-lg-5 mb-3 mb-lg-0">
                        <img src="assets/images/aboutImg2.svg" alt="Imported Quality Goods" class="quality-image">
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Jack's charming store, renowned for its exceptional quality imported goods from various
                            regions, quickly became a beloved destination for families eager to explore in leisurely
                            weekends.
                        </p>
                        <p>
                            With a dedicated and friendly staff who worked tirelessly to create a warm and inviting
                            atmosphere, Jack's Department Store was a vibrant place where unique gifts could be
                            uncovered, and lasting friendships blossomed among shoppers.
                        </p>
                        <button type="button" class="btn-explore-about">Explore Shop Now <i
                                class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </section>
        </div>
    </main>
<?php include 'include/footer.php'?>
