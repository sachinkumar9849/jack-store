<?php include 'include/header.php'?>

    <!-- Hero Slider -->
    <section class="hero-container">
        <div class="container">
            <div class="slider-wrapper">
                <div class="hero-slider">
                    <div class="slider-item">
                        <img src="assets/images/sliderimg.svg" alt="Valentine's Day Discount">
                    </div>
                    <div class="slider-item">
                        <img src="assets/images/sliderimg.svg" alt="Valentine's Day Discount">
                    </div>
                </div>
                <div class="hero-controls"></div>
            </div>
        </div>
    </section>

    <!-- Shop by Category -->
    <section class="category-section py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <div>
                    <h2 class="font-weight-bold mb-1">Shop by Category</h2>
                    <p class="subTitle">Explore our wide range of products</p>
                </div>
                <div class="category-arrows d-flex gap-3">
                    <button class="cat-prev"><i class="fas fa-arrow-left"></i></button>
                    <button class="cat-next"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="category-slider">
                <div class="category-item text-center">
                    <div class="category-img-wrapper">
                        <img src="assets/images/category1.svg" alt="Skincare & Beauty">
                    </div>
                    <p class="mt-3 font-weight-bold">Skincare & Beauty</p>
                </div>
                <div class="category-item text-center">
                    <div class="category-img-wrapper">
                        <img src="assets/images/category2.svg" alt="Jewelry & Fashion">
                    </div>
                    <p class="mt-3 font-weight-bold">Jewelry & Fashion</p>
                </div>
                <div class="category-item text-center">
                    <div class="category-img-wrapper">
                        <img src="assets/images/category1.svg" alt="Body & Bath">
                    </div>
                    <p class="mt-3 font-weight-bold">Body & Bath</p>
                </div>
                <div class="category-item text-center">
                    <div class="category-img-wrapper">
                        <img src="assets/images/category2.svg" alt="Home & Kitchen">
                    </div>
                    <p class="mt-3 font-weight-bold">Home & Kitchen</p>
                </div>
                <div class="category-item text-center">
                    <div class="category-img-wrapper">
                        <img src="assets/images/category1.svg" alt="Fine Ceramics">
                    </div>
                    <p class="mt-3 font-weight-bold">Fine Ceramics</p>
                </div>
                <div class="category-item text-center">
                    <div class="category-img-wrapper">
                        <img src="assets/images/category2.svg" alt="Fine Glass">
                    </div>
                    <p class="mt-3 font-weight-bold">Fine Glass</p>
                </div>
                <div class="category-item text-center">
                    <div class="category-img-wrapper">
                        <img src="assets/images/category1.svg" alt="Soft Toys">
                    </div>
                    <p class="mt-3 font-weight-bold">Soft Toys</p>
                </div>
                <div class="category-item text-center">
                    <div class="category-img-wrapper">
                        <img src="assets/images/category2.svg" alt="Kid Sections">
                    </div>
                    <p class="mt-3 font-weight-bold">Kid Sections</p>
                </div>
            </div>
        </div>
    </section>



    <!-- Best Selling Products -->
    <section class="product-section py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h2 class="font-weight-bold mb-1">Best Selling Products</h2>
                    <p class="subTitle">Top picks loved by our customers</p>
                </div>
                <a href="product-list.php" class="explore-all-link">Explore all <i class="fas fa-arrow-right ml-1"></i></a>
            </div>

            <div class="row">
                <!-- Product 1 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <span class="discount-badge">33% OFF</span>
                            <img src="assets/images/product1.svg" alt="Native Flower Vase">
                        </div>
                        <div class="product-info">
                            <span class="product-cat">Fine ceramics</span>
                            <h5 class="product-title"><a href="product-detail.php" class="product-title-link">Native Flower Vase</a></h5>
                            <div class="variant-selection">
                                <button class="variant-btn active">500ml</button>
                                <button class="variant-btn">1L</button>
                            </div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <strong>4.8</strong> <span>(245)</span>
                            </div>
                            <div class="product-price">
                                <span class="curr-price">Rs. 1,990</span>
                                <span class="old-price">Rs. 3,000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <span class="discount-badge">27% OFF</span>
                            <img src="assets/images/product2.svg" alt="Gorilla Wine Glass">
                        </div>
                        <div class="product-info">
                            <span class="product-cat">Fine glass</span>
                            <h5 class="product-title"><a href="product-detail.php" class="product-title-link">Gorilla Wine Glass</a></h5>
                            <div class="variant-selection">
                                <button class="variant-btn active">250ml</button>
                                <button class="variant-btn">500ml</button>
                                <button class="variant-btn">1L</button>
                            </div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <strong>4.5</strong> <span>(25)</span>
                            </div>
                            <div class="product-price">
                                <span class="curr-price">Rs. 489</span>
                                <span class="old-price">Rs. 700</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <span class="discount-badge">14% OFF</span>
                            <img src="assets/images/product3.svg" alt="Orange Skinny Wash">
                        </div>
                        <div class="product-info">
                            <span class="product-cat">Skincare & Beauty</span>
                            <h5 class="product-title"><a href="product-detail.php" class="product-title-link">Orange Skinny Wash</a></h5>
                            <p class="text-muted small mb-3">Refreshing your skin with the power of vitamin C</p>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <strong>4.9</strong> <span>(89)</span>
                            </div>
                            <div class="product-price">
                                <span class="curr-price">Rs. 670</span>
                                <span class="old-price">Rs. 780</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <span class="discount-badge">8% OFF</span>
                            <img src="assets/images/product4.svg" alt="Fluffy Octopus">
                        </div>
                        <div class="product-info">
                            <span class="product-cat">Soft Toys & Stationery</span>
                            <h5 class="product-title"><a href="product-detail.php" class="product-title-link">Fluffy Octopus</a></h5>
                            <p class="text-muted small mb-3">An friend in need to assist you in your toy world</p>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <strong>4.4</strong> <span>(139)</span>
                            </div>
                            <div class="product-price">
                                <span class="curr-price">Rs. 1,220</span>
                                <span class="old-price">Rs. 1,350</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <span class="discount-badge">20% OFF</span>
                            <img src="assets/images/product5.svg" alt="Knife and Fork Set">
                        </div>
                        <div class="product-info">
                            <span class="product-cat">Home & Kitchen</span>
                            <h5 class="product-title"><a href="product-detail.php" class="product-title-link">Knife and Fork Set</a></h5>
                            <p class="text-muted small mb-3">5 set of antique knife and forks, perfect for the best
                                culinary practice</p>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <strong>4.2</strong> <span>(245)</span>
                            </div>
                            <div class="product-price">
                                <span class="curr-price">Rs. 1,999</span>
                                <span class="old-price">Rs. 2,500</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <span class="discount-badge">18% OFF</span>
                            <img src="assets/images/product6.svg" alt="Bridal Bangles">
                        </div>
                        <div class="product-info">
                            <span class="product-cat">Jewelry & Accessories</span>
                            <h5 class="product-title"><a href="product-detail.php" class="product-title-link">Bridal Bangles</a></h5>
                            <p class="text-muted small mb-3">Gold plated bangles crafted to fit the perfect bride makeup
                            </p>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <strong>4.6</strong> <span>(245)</span>
                            </div>
                            <div class="product-price">
                                <span class="curr-price">Rs. 3,499</span>
                                <span class="old-price">Rs. 4,250</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 7 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <span class="discount-badge">42% OFF</span>
                            <img src="assets/images/product7.svg" alt="Floral Cup">
                        </div>
                        <div class="product-info">
                            <span class="product-cat">Fine Ceramics</span>
                            <h5 class="product-title"><a href="product-detail.php" class="product-title-link">Floral Cup</a></h5>
                            <div class="variant-selection">
                                <button class="variant-btn active">100ml</button>
                                <button class="variant-btn">200ml</button>
                                <button class="variant-btn">500ml</button>
                            </div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <strong>4.3</strong> <span>(245)</span>
                            </div>
                            <div class="product-price">
                                <span class="curr-price">Rs. 1,199</span>
                                <span class="old-price">Rs. 2,000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 8 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <span class="discount-badge">48% OFF</span>
                            <img src="assets/images/product8.svg" alt="Orange Water Heating">
                        </div>
                        <div class="product-info">
                            <span class="product-cat">Home & Kitchen</span>
                            <h5 class="product-title"><a href="product-detail.php" class="product-title-link">Orange Water Heating...</a></h5>
                            <p class="text-muted small mb-3">Water heating at the tip of your fingertip and within few
                                seconds</p>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <strong>4.3</strong> <span>(245)</span>
                            </div>
                            <div class="product-price">
                                <span class="curr-price">Rs. 2,199</span>
                                <span class="old-price">Rs. 4,000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-section pb-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h2 class="font-weight-bold mb-1">Recommended For You</h2>

                </div>
                <a href="product-list.php" class="explore-all-link">Explore all <i class="fas fa-arrow-right ml-1"></i></a>
            </div>

            <div class="row">
                <!-- Product 1 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <span class="discount-badge">33% OFF</span>
                            <img src="assets/images/product1.svg" alt="Native Flower Vase">
                        </div>
                        <div class="product-info">
                            <span class="product-cat">Fine ceramics</span>
                            <h5 class="product-title"><a href="product-detail.php" class="product-title-link">Native Flower Vase</a></h5>
                            <div class="variant-selection">
                                <button class="variant-btn active">500ml</button>
                                <button class="variant-btn">1L</button>
                            </div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <strong>4.8</strong> <span>(245)</span>
                            </div>
                            <div class="product-price">
                                <span class="curr-price">Rs. 1,990</span>
                                <span class="old-price">Rs. 3,000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <span class="discount-badge">27% OFF</span>
                            <img src="assets/images/product2.svg" alt="Gorilla Wine Glass">
                        </div>
                        <div class="product-info">
                            <span class="product-cat">Fine glass</span>
                            <h5 class="product-title"><a href="product-detail.php" class="product-title-link">Gorilla Wine Glass</a></h5>
                            <div class="variant-selection">
                                <button class="variant-btn active">250ml</button>
                                <button class="variant-btn">500ml</button>
                                <button class="variant-btn">1L</button>
                            </div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <strong>4.5</strong> <span>(25)</span>
                            </div>
                            <div class="product-price">
                                <span class="curr-price">Rs. 489</span>
                                <span class="old-price">Rs. 700</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <span class="discount-badge">14% OFF</span>
                            <img src="assets/images/product3.svg" alt="Orange Skinny Wash">
                        </div>
                        <div class="product-info">
                            <span class="product-cat">Skincare & Beauty</span>
                            <h5 class="product-title"><a href="product-detail.php" class="product-title-link">Orange Skinny Wash</a></h5>
                            <p class="text-muted small mb-3">Refreshing your skin with the power of vitamin C</p>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <strong>4.9</strong> <span>(89)</span>
                            </div>
                            <div class="product-price">
                                <span class="curr-price">Rs. 670</span>
                                <span class="old-price">Rs. 780</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <span class="discount-badge">8% OFF</span>
                            <img src="assets/images/product4.svg" alt="Fluffy Octopus">
                        </div>
                        <div class="product-info">
                            <span class="product-cat">Soft Toys & Stationery</span>
                            <h5 class="product-title"><a href="product-detail.php" class="product-title-link">Fluffy Octopus</a></h5>
                            <p class="text-muted small mb-3">An friend in need to assist you in your toy world</p>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <strong>4.4</strong> <span>(139)</span>
                            </div>
                            <div class="product-price">
                                <span class="curr-price">Rs. 1,220</span>
                                <span class="old-price">Rs. 1,350</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <span class="discount-badge">20% OFF</span>
                            <img src="assets/images/product5.svg" alt="Knife and Fork Set">
                        </div>
                        <div class="product-info">
                            <span class="product-cat">Home & Kitchen</span>
                            <h5 class="product-title"><a href="product-detail.php" class="product-title-link">Knife and Fork Set</a></h5>
                            <p class="text-muted small mb-3">5 set of antique knife and forks, perfect for the best
                                culinary practice</p>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <strong>4.2</strong> <span>(245)</span>
                            </div>
                            <div class="product-price">
                                <span class="curr-price">Rs. 1,999</span>
                                <span class="old-price">Rs. 2,500</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <span class="discount-badge">18% OFF</span>
                            <img src="assets/images/product6.svg" alt="Bridal Bangles">
                        </div>
                        <div class="product-info">
                            <span class="product-cat">Jewelry & Accessories</span>
                            <h5 class="product-title"><a href="product-detail.php" class="product-title-link">Bridal Bangles</a></h5>
                            <p class="text-muted small mb-3">Gold plated bangles crafted to fit the perfect bride makeup
                            </p>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <strong>4.6</strong> <span>(245)</span>
                            </div>
                            <div class="product-price">
                                <span class="curr-price">Rs. 3,499</span>
                                <span class="old-price">Rs. 4,250</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 7 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <span class="discount-badge">42% OFF</span>
                            <img src="assets/images/product7.svg" alt="Floral Cup">
                        </div>
                        <div class="product-info">
                            <span class="product-cat">Fine Ceramics</span>
                            <h5 class="product-title"><a href="product-detail.php" class="product-title-link">Floral Cup</a></h5>
                            <div class="variant-selection">
                                <button class="variant-btn active">100ml</button>
                                <button class="variant-btn">200ml</button>
                                <button class="variant-btn">500ml</button>
                            </div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <strong>4.3</strong> <span>(245)</span>
                            </div>
                            <div class="product-price">
                                <span class="curr-price">Rs. 1,199</span>
                                <span class="old-price">Rs. 2,000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 8 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <span class="discount-badge">48% OFF</span>
                            <img src="assets/images/product8.svg" alt="Orange Water Heating">
                        </div>
                        <div class="product-info">
                            <span class="product-cat">Home & Kitchen</span>
                            <h5 class="product-title"><a href="product-detail.php" class="product-title-link">Orange Water Heating...</a></h5>
                            <p class="text-muted small mb-3">Water heating at the tip of your fingertip and within few
                                seconds</p>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <strong>4.3</strong> <span>(245)</span>
                            </div>
                            <div class="product-price">
                                <span class="curr-price">Rs. 2,199</span>
                                <span class="old-price">Rs. 4,000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section -->
    <section class="">
        <div class="container">
            <div class="testimonials-section py-5">
                <div class="text-center">
                    <span class="reviews-badge"><i class="fas fa-star mr-1"></i> Customer Reviews</span>
                    <h2 class="font-weight-bold mt-3 mb-2">What Our Customers Say</h2>
                    <p class="text-muted mx-auto" style="max-width: 600px;">Join thousands of satisfied customers who
                        trust
                        Jack Department Store for their shopping needs</p>
                </div>

                <div class="testimonial-slider-wrapper">
                    <div class="testimonial-slider">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-item">
                            <div class="testimonial-card">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <i class="fas fa-quote-right quote-icon"></i>
                                </div>
                                <span class="testimonial-cat">Jewelry & Accessories</span>
                                <p class="testimonial-text mt-3">
                                    "Amazing quality products! The delivery was super fast and the customer service was
                                    exceptional. I've been shopping here for 6 months now and never disappointed."
                                </p>
                                <div class="user-info d-flex align-items-center mt-4">
                                    <div class="user-avatar">RK</div>
                                    <div class="ml-3">
                                        <h6 class="mb-0 font-weight-bold">Rajesh Kumar</h6>
                                        <small class="subTitle">Kathmandu</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="testimonial-item">
                            <div class="testimonial-card">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <i class="fas fa-quote-right quote-icon"></i>
                                </div>
                                <span class="testimonial-cat">Home & Kitchen</span>
                                <p class="testimonial-text mt-3">
                                    "The variety of products is unmatched. I found everything I needed for my new
                                    kitchen in
                                    one place. Highly recommend Jack Store for quality and service!"
                                </p>
                                <div class="user-info d-flex align-items-center mt-4">
                                    <div class="user-avatar" style="background: #ff4757;">AS</div>
                                    <div class="ml-3">
                                        <h6 class="mb-0 font-weight-bold">Anita Sharma</h6>
                                        <small class="subTitle">Lalitpur</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 3 -->
                        <div class="testimonial-item">
                            <div class="testimonial-card">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <i class="fas fa-quote-right quote-icon"></i>
                                </div>
                                <span class="testimonial-cat">Skincare & Beauty</span>
                                <p class="testimonial-text mt-3">
                                    "Fast shipping and great packaging. The products are authentic and represent great
                                    value. Jack Store has become my go-to for all beauty essentials."
                                </p>
                                <div class="user-info d-flex align-items-center mt-4">
                                    <div class="user-avatar" style="background: #27ae60;">BP</div>
                                    <div class="ml-3">
                                        <h6 class="mb-0 font-weight-bold">Bikas Pokhrel</h6>
                                        <small class="subTitle">Pokhara</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation Arrows -->
                    <button class="test-prev"><i class="fas fa-arrow-left"></i></button>
                    <button class="test-next"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Section -->
    <section class="welcome-container my-5">
        <div class="container">
            <div class="welcome-box text-center">
                <!-- Decorative Shapes -->
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>

                <div class="welcome-content">
                    <img src="assets/images/wel.svg" alt="Welcome Character" class="welcome-img mb-4">
                    <h2 class="welcome-title mb-3">Welcome to Jack Store</h2>
                    <p class="welcome-desc mx-auto mb-5">
                        Your trusted one-stop destination for quality products across all categories. Since 2010, we've
                        been committed to providing exceptional shopping experiences with a wide range of electronics,
                        clothing, household items, and much more.
                    </p>

                    <div class="row stats-row">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3 class="stat-number">15+</h3>
                            <p class="stat-label">Years Experience</p>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3 class="stat-number">50K+</h3>
                            <p class="stat-label">Happy Customers</p>
                        </div>
                        <div class="col-md-4">
                            <h3 class="stat-number">2K+</h3>
                            <p class="stat-label">Products</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Section -->
    <section class="subscribe-section py-5">
        <div class="container">
            <div class="subscribe-row d-flex align-items-center flex-wrap">
                <div class="subscribe-info col-lg-6 mb-5 mb-lg-0">
                    <span class="exclusive-badge mb-4">
                        <i class="far fa-envelope mr-2"></i> Exclusive Offers
                    </span>
                    <h2 class="subscribe-title mb-4">
                        <span class="gift-emoji">🎁</span> Join 50,000+ Happy Subscribers!
                    </h2>
                    <p class="subscribe-text mb-4">
                        Subscribe to receive exclusive deals, new arrivals, and special discounts directly in your
                        inbox.
                    </p>
                    <ul class="benefit-list d-flex flex-wrap list-unstyled">
                        <li><i class="fas fa-check mr-2"></i> Weekly Deals</li>
                        <li><i class="fas fa-check mr-2"></i> Early Access</li>
                        <li><i class="fas fa-check mr-2"></i> Free Shipping Codes</li>
                    </ul>
                </div>

                <div class="subscribe-form-container col-lg-6">
                    <div class="subscribe-card p-4 p-md-5">
                        <h4 class="mb-4 text-white font-weight-bold">Subscribe Us</h4>
                        <form class="d-flex flex-wrap">
                            <input type="email" class="form-control subscribe-input mb-3 mb-md-0 mr-md-3"
                                placeholder="Enter your email address">
                            <button type="submit" class="btn btn-subscribe">
                                Subscribe Now <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                        </form>
                        <hr class="my-4 border-light opacity-25">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <span class="secure-text">
                                <i class="fas fa-lock mr-2 text-warning"></i> 100% secure, Unsubscribe anytime.
                            </span>
                            <span class="sub-count-text">Join 50K+ subscribers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
<?php include 'include/footer.php'?>
