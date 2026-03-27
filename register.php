<?php
$bodyClass = 'register-page';
include 'include/header.php';
?>
    <main class="register-wrapper">
        <section class="register-card">
            <div class="register-media">
                <img src="assets/images/register.png" alt="Register at Jack Store">
            </div>

            <div class="register-form-panel">
                <a href="index.php" class="register-close" aria-label="Close register form">
                    <i class="fas fa-times"></i>
                </a>

                <h1 class="register-title">Register</h1>

                <form class="register-form" action="#" method="post">
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="eg. Shraddha">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="eg. Bajracharya">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <input type="tel" class="form-control" id="mobile" placeholder="eg. +977 98XXXXXXXX">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-icon-wrap">
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                            <span class="input-icon"><i class="far fa-eye-slash"></i></span>
                        </div>
                        <p class="password-strength">Password strength: -</p>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword">Re-type Password</label>
                        <div class="input-icon-wrap">
                            <input type="password" class="form-control" id="confirmPassword"
                                placeholder="Enter your password again">
                            <span class="input-icon"><i class="far fa-eye-slash"></i></span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-register-submit">Create Account</button>
                </form>

                <p class="register-login-text">
                    Already have an account yet?
                    <a href="login.php">Log In</a>
                </p>
            </div>
        </section>
    </main>
<?php include 'include/footer.php'?>
