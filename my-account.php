<?php
$bodyClass = 'my-account-page';
include 'include/header.php';
?>

<main class="myaccount-wrap">
    <div class="container">
        <!-- Page Header -->
        <div class="myaccount-header">
            <h1>My Account</h1>
            <p>Manage your profile and view your orders</p>
        </div>

        <div class="myaccount-layout">
            <!-- Left: Profile Card -->
            <div class="myaccount-profile-card">
                <div class="profile-avatar">
                    <img src="https://ui-avatars.com/api/?name=Jenish+Sharma&background=e2e8f0&color=8b96a5&size=100&font-size=0.35&bold=true" alt="Jenish Sharma">
                </div>
                <h3 class="profile-name">Jenish Sharma</h3>
                <span class="profile-role-badge">Customer</span>

                <div class="profile-info-list">
                    <div class="profile-info-item">
                        <span class="profile-info-label">Phone Number</span>
                        <span class="profile-info-value">+977 9876543201</span>
                    </div>
                    <div class="profile-info-item">
                        <span class="profile-info-label">Email Address</span>
                        <span class="profile-info-value">jenisharma@gmail.com</span>
                    </div>
                </div>

                <div class="profile-actions">
                    <button class="btn-edit-profile">Edit Profile</button>
                    <button class="btn-logout">Logout &nbsp;<i class="fas fa-arrow-right"></i></button>
                </div>
            </div>

            <!-- Right: Orders List -->
            <div class="myaccount-orders">
                <!-- Order 1 -->
                <div class="order-card">
                    <div class="order-card-left">
                        <div class="order-id-row">
                            <h4 class="order-id">ORD-2026-425</h4>
                            <span class="order-status-badge status-processing">Processing</span>
                        </div>
                        <p class="order-date">Ordered date: February 10, 2026</p>
                        <p class="order-total">Rs. 5,488</p>
                    </div>
                    <div class="order-card-right">
                        <p class="order-items-heading">Items (4)</p>
                        <div class="order-items-list">
                            <div class="order-item-row">
                                <span class="item-name">Native Flower Vase &nbsp;<span class="item-qty">x2</span></span>
                                <span class="item-price">Rs. 1,990</span>
                            </div>
                            <div class="order-item-row">
                                <span class="item-name">Knife and Fork Set &nbsp;<span class="item-qty">x1</span></span>
                                <span class="item-price">Rs. 1,999</span>
                            </div>
                            <div class="order-item-row">
                                <span class="item-name">Gorilla Wine &nbsp;<span class="item-qty">x3</span></span>
                                <span class="item-price">Rs. 489</span>
                            </div>
                            <div class="order-item-row">
                                <span class="item-name">Fluffy Octopus &nbsp;<span class="item-qty">x2</span></span>
                                <span class="item-price">Rs. 1,220</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order 2 -->
                <div class="order-card">
                    <div class="order-card-left">
                        <div class="order-id-row">
                            <h4 class="order-id">ORD-2026-371</h4>
                            <span class="order-status-badge status-on-delivery">On Delivery</span>
                        </div>
                        <p class="order-date">Ordered date: February 01, 2026</p>
                        <p class="order-total">Rs. 3,989</p>
                    </div>
                    <div class="order-card-right">
                        <p class="order-items-heading">Items (2)</p>
                        <div class="order-items-list">
                            <div class="order-item-row">
                                <span class="item-name">Native Flower Vase &nbsp;<span class="item-qty">x2</span></span>
                                <span class="item-price">Rs. 1,990</span>
                            </div>
                            <div class="order-item-row">
                                <span class="item-name">Knife and Fork Set &nbsp;<span class="item-qty">x1</span></span>
                                <span class="item-price">Rs. 1,999</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order 3 -->
                <div class="order-card">
                    <div class="order-card-left">
                        <div class="order-id-row">
                            <h4 class="order-id">ORD-2026-240</h4>
                            <span class="order-status-badge status-delivered">Delivered</span>
                        </div>
                        <p class="order-date">Delivered date: January 14, 2026</p>
                        <p class="order-total">Rs. 489</p>
                    </div>
                    <div class="order-card-right">
                        <p class="order-items-heading">Items (1)</p>
                        <div class="order-items-list">
                            <div class="order-item-row">
                                <span class="item-name">Gorilla Wine &nbsp;<span class="item-qty">x3</span></span>
                                <span class="item-price">Rs. 489</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order 4 -->
                <div class="order-card">
                    <div class="order-card-left">
                        <div class="order-id-row">
                            <h4 class="order-id">ORD-2025-899</h4>
                            <span class="order-status-badge status-cancelled">Cancelled</span>
                        </div>
                        <p class="order-date">Cancelled date: December 14, 2025</p>
                        <p class="order-total">Rs. 12,489</p>
                    </div>
                    <div class="order-card-right">
                        <p class="order-items-heading">Items (5)</p>
                        <div class="order-items-list">
                            <div class="order-item-row">
                                <span class="item-name">Native Flower Vase &nbsp;<span class="item-qty">x2</span></span>
                                <span class="item-price">Rs. 1,990</span>
                            </div>
                            <div class="order-item-row">
                                <span class="item-name">Knife and Fork Set &nbsp;<span class="item-qty">x1</span></span>
                                <span class="item-price">Rs. 1,999</span>
                            </div>
                            <div class="order-item-row">
                                <span class="item-name">Gorilla Wine &nbsp;<span class="item-qty">x3</span></span>
                                <span class="item-price">Rs. 489</span>
                            </div>
                            <div class="order-item-row">
                                <a href="#" class="view-more-items">View 2+ more items</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'include/footer.php' ?>
