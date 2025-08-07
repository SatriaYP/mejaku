<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MejaKu Partner - Login</title>
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
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;

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

            background-image: url('https://source.unsplash.com/random/600x400/?cafe');
            /* Replace with your image URL */
            background-size: cover;
            background-posi
            ion: center;
            background-repeat: no-repeat;
            padding: 20px;

            text-align: center;
        }

        .login-title {
            font-size: 24px;

            font-weight: bold;
            color: #b71c1c;
            /* Dark red */

            margin-bottom: 10px;
        }

        .login-subtitle {
            font-size: 18px;
            color: #666;

            margin-bottom: 30px;
        }
            

        .form-group {
            margin-bottom: 20px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;

            border-radius: 5px;
        }

        .login-btn {

            background-color: #b71c1c;
            /* Dark red */
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
            
            font-size: 12px;
            color: #b71c1c;
            /* Dark red */
            text-decoration: none;

        }

        .social-login {
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }

        .social-icon {
            font-size: 30px;
            margin: 0 10px;
            cursor: pointer;
        }

        .signup-link {
            font-size: 14px;
            color: #b71c1c;
            /* Dark red */
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
        <div class="logo">MejaKu Partner</div>
        <div class="search-icon">&#128269;</div> <!-- Search icon -->
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Login Container -->
        <div class="login-container">
            <h2 class="login-title">Selamat Datang Kembali</h2>
            <p class="login-subtitle">Masuk ke Dashboard Anda</p>

            <!-- Form -->
            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="input-field" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="input-field" placeholder="Masukkan password">
                    <i class="bi bi-eye-slash float-end" style="cursor: pointer;"></i> <!-- Show/hide password icon -->
                </div>
                <button type="submit" class="login-btn">Masuk</button>
                <div class="remember-me">

                    <input type="checkbox" id="remember">
                    <label for="remember">Simpan Login</label>
                    <a href="#" class="forgot-password">Lupa Kata Sandi?</a>
                </div>
            </form>

            <!-- Separator -->
            <hr class="my-4">

            <!-- Social Login -->
            <div class="social-login">
                <a href="#" class="social-icon"><i class="bi bi-google"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
            </div>

            <!-- Sign Up Link -->
            <p class="signup-link">Belum punya akun? <a href="#">Daftar Sekarang</a></p>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>