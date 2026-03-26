<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Jack Store</title>
    <link rel="icon" href="assets/images/fav.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="register-page login-page">
    <main class="register-wrapper">
        <section class="register-card">
            <div class="register-media">
                <img src="assets/images/login.svg" alt="Login to Jack Store">
            </div>

            <div class="register-form-panel login-form-panel">
                <a href="index.php" class="register-close" aria-label="Close login form">
                    <i class="fas fa-times"></i>
                </a>

                <h1 class="register-title">Login</h1>

                <form class="register-form login-form" action="#" method="post">
                    <div class="form-group">
                        <label for="credential">Credential</label>
                        <input type="text" class="form-control" id="credential"
                            placeholder="Enter your email/mobile number/username">
                    </div>

                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <div class="input-icon-wrap">
                            <input type="password" class="form-control" id="loginPassword"
                                placeholder="Enter your password">
                            <span class="input-icon"><i class="far fa-eye-slash"></i></span>
                        </div>
                        <a href="#" class="forgot-password-link">Forgot Password?</a>
                    </div>

                    <button type="submit" class="btn btn-register-submit">Login</button>
                </form>

                <p class="register-login-text">
                    Don't have an account yet?
                    <a href="register.php">Register</a>
                </p>
            </div>
        </section>
    </main>
</body>

</html>
