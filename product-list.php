<?php
$bodyClass = 'product-list-page';
include 'include/header.php';
?>
<main class="product-list-wrap">
    <div class="container-fluid product-list-container">
        <div class="d-flex flex-wrap align-items-center justify-content-between product-list-topbar">
            <h1 class="product-list-title">Explore Products</h1>
            <form class="product-list-search" action="#" method="get">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search products">
            </form>
        </div>

        <div class="row no-gutters product-list-layout">
            <aside class="col-xl-3 col-lg-4 pr-lg-3 product-filter-col">
                <div class="product-filter-card">
                    <div class="filter-head">
                        <h2>Filters</h2>
                        <a href="#">
                            <img src="assets/images/reset.svg" alt="">
                        </a>
                    </div>

                    <div class="filter-block">
                        <h3>Special Products</h3>
                        <label><input type="radio" name="special" checked> New Arrivals</label>
                        <label><input type="radio" name="special"> Best Sellers</label>
                        <label><input type="radio" name="special"> Top Rated</label>
                        <label><input type="radio" name="special"> Customer Favourites</label>
                    </div>

                    <div class="filter-block">
                        <h3>Categories</h3>
                        <label><input type="checkbox" checked> Skincare &amp; Beauty</label>
                        <label><input type="checkbox"> Jewelry &amp; Accessories</label>
                        <label><input type="checkbox"> Bath Essentials</label>
                        <label><input type="checkbox"> Home &amp; Kitchen</label>
                        <a href="#" class="view-more-link">View more</a>
                    </div>

                    <div class="filter-block">
                        <h3>Brands</h3>
                        <label><input type="checkbox" checked> H-ON</label>
                        <label><input type="checkbox"> L.G.</label>
                        <label><input type="checkbox"> Hackilo</label>
                        <label><input type="checkbox"> Baltra</label>
                        <a href="#" class="view-more-link">View more</a>
                    </div>

                    <div class="filter-block">
                        <h3>Price Range</h3>
                        <div class="range-values">
                            <span>Rs.299</span>
                            <span>To</span>
                            <span>Rs.24,999</span>
                        </div>
                        <input type="range" min="299" max="24999" value="15200" class="filter-range">
                    </div>

                    <div class="filter-block">
                        <h3>Ratings</h3>
                        <label><input type="radio" name="rating" checked> Any</label>
                        <label><input type="radio" name="rating"> Above 4 stars</label>
                        <label><input type="radio" name="rating"> Above 3 stars</label>
                        <label><input type="radio" name="rating"> Above 2 stars</label>
                        <label><input type="radio" name="rating"> Above 1 star</label>
                    </div>

                    <div class="filter-block mb-0">
                        <h3>Sizes</h3>
                        <label><input type="radio" name="size" checked> Any</label>
                        <label><input type="radio" name="size"> 250ml</label>
                        <label><input type="radio" name="size"> 500ml</label>
                        <label><input type="radio" name="size"> 1 L</label>
                    </div>
                </div>
            </aside>

            <section class="col-xl-9 col-lg-8 product-grid-col">
                <div class="row product-card-grid">
                    <div class="col-xl-4 col-md-6 mb-3">
                        <article class="list-product-card">
                            <div class="list-product-image-wrap">
                                <span class="list-discount-badge">33% OFF</span>
                                <img src="assets/images/product1.svg" alt="Native Flower Vase">
                            </div>
                            <div class="list-product-body">
                                <small>Fine ceramics</small>
                                <h4>Native Flower Vase</h4>
                                <div class="list-variants"><span>500ml</span><span>1L</span></div>
                                <p class="list-rating"><i class="fas fa-star"></i> 4.8 <span>(245)</span></p>
                                <p class="list-price">Rs. 1,990 <del>Rs. 3,000</del></p>
                            </div>
                        </article>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-3">
                        <article class="list-product-card">
                            <div class="list-product-image-wrap">
                                <span class="list-discount-badge">27% OFF</span>
                                <img src="assets/images/product2.svg" alt="Gorilla Wine Glass">
                            </div>
                            <div class="list-product-body">
                                <small>Fine glass</small>
                                <h4>Gorilla Wine Glass</h4>
                                <div class="list-variants"><span>250ml</span><span>500ml</span><span>1L</span>
                                </div>
                                <p class="list-rating"><i class="fas fa-star"></i> 4.5 <span>(25)</span></p>
                                <p class="list-price">Rs. 489 <del>Rs. 700</del></p>
                            </div>
                        </article>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-3">
                        <article class="list-product-card">
                            <div class="list-product-image-wrap">
                                <span class="list-discount-badge">8% OFF</span>
                                <img src="assets/images/product4.svg" alt="Fluffy Octopus">
                            </div>
                            <div class="list-product-body">
                                <small>Soft Toys &amp; Stationery</small>
                                <h4>Fluffy Octopus</h4>
                                <p class="list-desc">An friend in need to assist you in your toy world</p>
                                <p class="list-rating"><i class="fas fa-star"></i> 4.4 <span>(139)</span></p>
                                <p class="list-price">Rs. 1,220 <del>Rs. 1,350</del></p>
                            </div>
                        </article>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-3">
                        <article class="list-product-card">
                            <div class="list-product-image-wrap">
                                <span class="list-discount-badge">33% OFF</span>
                                <img src="assets/images/product1.svg" alt="Native Flower Vase">
                            </div>
                            <div class="list-product-body">
                                <small>Fine ceramics</small>
                                <h4>Native Flower Vase</h4>
                                <div class="list-variants"><span>500ml</span><span>1L</span></div>
                                <p class="list-rating"><i class="fas fa-star"></i> 4.8 <span>(245)</span></p>
                                <p class="list-price">Rs. 1,990 <del>Rs. 3,000</del></p>
                            </div>
                        </article>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-3">
                        <article class="list-product-card">
                            <div class="list-product-image-wrap">
                                <span class="list-discount-badge">27% OFF</span>
                                <img src="assets/images/product2.svg" alt="Gorilla Wine Glass">
                            </div>
                            <div class="list-product-body">
                                <small>Fine glass</small>
                                <h4>Gorilla Wine Glass</h4>
                                <div class="list-variants"><span>250ml</span><span>500ml</span><span>1L</span>
                                </div>
                                <p class="list-rating"><i class="fas fa-star"></i> 4.5 <span>(25)</span></p>
                                <p class="list-price">Rs. 489 <del>Rs. 700</del></p>
                            </div>
                        </article>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-3">
                        <article class="list-product-card">
                            <div class="list-product-image-wrap">
                                <span class="list-discount-badge">8% OFF</span>
                                <img src="assets/images/product4.svg" alt="Fluffy Octopus">
                            </div>
                            <div class="list-product-body">
                                <small>Soft Toys &amp; Stationery</small>
                                <h4>Fluffy Octopus</h4>
                                <p class="list-desc">An friend in need to assist you in your toy world</p>
                                <p class="list-rating"><i class="fas fa-star"></i> 4.4 <span>(139)</span></p>
                                <p class="list-price">Rs. 1,220 <del>Rs. 1,350</del></p>
                            </div>
                        </article>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-3">
                        <article class="list-product-card">
                            <div class="list-product-image-wrap">
                                <span class="list-discount-badge">33% OFF</span>
                                <img src="assets/images/product1.svg" alt="Native Flower Vase">
                            </div>
                            <div class="list-product-body">
                                <small>Fine ceramics</small>
                                <h4>Native Flower Vase</h4>
                                <div class="list-variants"><span>500ml</span><span>1L</span></div>
                                <p class="list-rating"><i class="fas fa-star"></i> 4.8 <span>(245)</span></p>
                                <p class="list-price">Rs. 1,990 <del>Rs. 3,000</del></p>
                            </div>
                        </article>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-3">
                        <article class="list-product-card">
                            <div class="list-product-image-wrap">
                                <span class="list-discount-badge">27% OFF</span>
                                <img src="assets/images/product2.svg" alt="Gorilla Wine Glass">
                            </div>
                            <div class="list-product-body">
                                <small>Fine glass</small>
                                <h4>Gorilla Wine Glass</h4>
                                <div class="list-variants"><span>250ml</span><span>500ml</span><span>1L</span>
                                </div>
                                <p class="list-rating"><i class="fas fa-star"></i> 4.5 <span>(25)</span></p>
                                <p class="list-price">Rs. 489 <del>Rs. 700</del></p>
                            </div>
                        </article>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-3">
                        <article class="list-product-card">
                            <div class="list-product-image-wrap">
                                <span class="list-discount-badge">8% OFF</span>
                                <img src="assets/images/product4.svg" alt="Fluffy Octopus">
                            </div>
                            <div class="list-product-body">
                                <small>Soft Toys &amp; Stationery</small>
                                <h4>Fluffy Octopus</h4>
                                <p class="list-desc">An friend in need to assist you in your toy world</p>
                                <p class="list-rating"><i class="fas fa-star"></i> 4.4 <span>(139)</span></p>
                                <p class="list-price">Rs. 1,220 <del>Rs. 1,350</del></p>
                            </div>
                        </article>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-3">
                        <article class="list-product-card">
                            <div class="list-product-image-wrap">
                                <span class="list-discount-badge">33% OFF</span>
                                <img src="assets/images/product1.svg" alt="Native Flower Vase">
                            </div>
                            <div class="list-product-body">
                                <small>Fine ceramics</small>
                                <h4>Native Flower Vase</h4>
                                <div class="list-variants"><span>500ml</span><span>1L</span></div>
                                <p class="list-rating"><i class="fas fa-star"></i> 4.8 <span>(245)</span></p>
                                <p class="list-price">Rs. 1,990 <del>Rs. 3,000</del></p>
                            </div>
                        </article>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-3">
                        <article class="list-product-card">
                            <div class="list-product-image-wrap">
                                <span class="list-discount-badge">27% OFF</span>
                                <img src="assets/images/product2.svg" alt="Gorilla Wine Glass">
                            </div>
                            <div class="list-product-body">
                                <small>Fine glass</small>
                                <h4>Gorilla Wine Glass</h4>
                                <div class="list-variants"><span>250ml</span><span>500ml</span><span>1L</span>
                                </div>
                                <p class="list-rating"><i class="fas fa-star"></i> 4.5 <span>(25)</span></p>
                                <p class="list-price">Rs. 489 <del>Rs. 700</del></p>
                            </div>
                        </article>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-3">
                        <article class="list-product-card">
                            <div class="list-product-image-wrap">
                                <span class="list-discount-badge">8% OFF</span>
                                <img src="assets/images/product4.svg" alt="Fluffy Octopus">
                            </div>
                            <div class="list-product-body">
                                <small>Soft Toys &amp; Stationery</small>
                                <h4>Fluffy Octopus</h4>
                                <p class="list-desc">An friend in need to assist you in your toy world</p>
                                <p class="list-rating"><i class="fas fa-star"></i> 4.4 <span>(139)</span></p>
                                <p class="list-price">Rs. 1,220 <del>Rs. 1,350</del></p>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="text-center pt-2 pb-4">
                    <button type="button" class="btn-load-more">Load more</button>
                </div>
            </section>
        </div>
    </div>
</main>
<?php include 'include/footer.php'?>