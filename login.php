<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MejaKu - Masuk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        .header {
            background-color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e0e0e0;
        }

        .menu-icon {
            background-color: #333;
            color: white;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }

        .logo {
            font-weight: bold;
            margin-left: 10px;
        }

        .search-icon {
            font-size: 20px;
        }

        .content {
            padding: 20px;
        }

        .login-container {
            max-width: 400px;
            margin: 0 auto;
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .login-subtitle {
            font-size: 18px;
            color: #666;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }

        .login-btn {
            background-color: #b71c1c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
            width: 100%;
            margin-top: 20px;
        }

        .remember-me {
            margin-top: 10px;
            font-size: 12px;
        }

        .forgot-password {
            float: right;
            font-size: 12px;
            color: #b71c1c;
            text-decoration: none;
        }

        .or-separator {
            margin: 20px 0;
            text-align: center;
        }

        .social-login {
            margin-top: 20px;
            text-align: center;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-block;
            margin: 0 10px;
            cursor: pointer;
        }

        .google-icon {
            background-color: #4285F4;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .facebook-icon {
            background-color: #1877F2;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
        }

        .register-link a {
            color: #b71c1c;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="menu-icon">
            <span>&#9776;</span> <!-- Hamburger menu icon -->
        </div>
        <div class="logo">MejaKu</div>
        <div class="search-icon">&#128269;</div> <!-- Search icon -->
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Login Container -->
        <div class="login-container">
            <!-- Background Image -->
            <img src="https://source.unsplash.com/random/400x200/?cafe" alt="Cafe Scene" class="w-100 mb-4">

            <!-- Login Header -->
            <div class="login-header">
                <h2 class="login-title">Selamat Datang Kembali</h2>
                <p class="login-subtitle">Masuk ke Akun Anda</p>
            </div>

            <!-- Form -->
            <form>
                <!-- Email -->
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Masukkan email">
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" id="password" class="form-control" placeholder="Masukkan password">
                        <span class="input-group-text"><i class="bi bi-eye-slash"></i></span>
                    </div>
                </div>

                <!-- Login Button -->
                <button type="submit" class="login-btn">Masuk</button>

                <!-- Remember Me and Forgot Password -->
                <div class="d-flex justify-content-between mt-3">
                    <div class="remember-me">
                        <input type="checkbox" id="remember-me">
                        <label for="remember-me">Simpan Login</label>
                    </div>
                    <a href="#" class="forgot-password">Lupa Kata Sandi?</a>
                </div>

                <!-- OR Separator -->
                <hr class="or-separator">
                <p class="text-center">Atau Masuk Dengan</p>

                <!-- Social Login -->
                <div class="social-login">
                    <a href="#" class="social-icon google-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-google" viewBox="0 0 16 16">
                            <path
                                d="M15.545 6.558a.5.5 0 0 1 .048.782A7.488 7.488 0 0 1 8 13.5c-3.29 0-6.03-.975-8.36-2.43A11.4 11.4 0 0 1 8 1.5a11.4 11.4 0 0 1 8.36 2.43 3.286 3.286 0 0 0 .048-.782l.518.154a.5.5 0 0 1 .047.772l-.518.154zm-8.822.996a3.286 3.286 0 0 0-.047.772l.518.154a.5.5 0 0 1 .047.772l-.518.154c-3.535.68-6.067 3.502-6.552 6.712a.525.525 0 0 1-.01 0A5.772 5.772 0 0 1 0 8.56 5.982 5.982 0 0 1 1.757 1.661 5.005 5.005 0 0 1 8 1.5a5.772 5.772 0 0 1 6.493 5.197.517.517 0 0 1-.01 0 5.982 5.982 0 0 1-6.553 6.712z" />
                        </svg>
                    </a>
                    <a href="#" class="social-icon facebook-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.049-8.049-8.049S0 3.603 0 8.049a8.049 8.049 0 1 0 16 0z" />
                            <path
                                d="M11.186 8.572v-6.135h3.441v6.135H11.186zM8 12.293V10H7.5a.5.5 0 0 1-.5-.5V9c0-.253.134-.488.336-.654s.452-.298.752-.298c.422 0 .814.199 1.038.488.207.237.376.59.376 1.038 0 .475-.27.825-.683 1.097A4.904 4.904 0 0 1 8 12.293z" />
                        </svg>
                    </a>
                </div>

                <!-- Register Link -->
                <div class="register-link">
                    Belum punya akun? <a href="#">Daftar Sekarang</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>