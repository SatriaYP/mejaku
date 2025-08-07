<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Restoran</title>
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

        .content {
            padding: 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
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

        .signup-btn {
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

        .terms-checkbox {
            font-size: 12px;
            margin-top: 10px;
        }

        .social-login {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .social-icon {
            font-size: 30px;
            margin: 0 10px;
            cursor: pointer;
        }

        .login-link {
            font-size: 14px;
            color: #b71c1c;
            /* Dark red */
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- Content -->
    <div class="content">
        <!-- Logo and Title -->
        <h1 class="logo">MejaKu Partner</h1>
        <h2>Daftarkan Restoran Anda</h2>
        <p class="subtitle">Jangkau lebih banyak pelanggan dan kelola reservasi dengan mudah.</p>

        <!-- Form Fields -->
        <form>
            <div class="form-group">
                <label for="fullName">Nama Lengkap Pemilik</label>
                <input type="text" id="fullName" class="input-field" placeholder="Masukkan nama lengkap pemilik">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="input-field" placeholder="Masukkan email">
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon</label>
                <input type="tel" id="phone" class="input-field" placeholder="Masukkan nomor telepon">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="input-field" placeholder="Masukkan password">
                <i class="bi bi-eye-slash float-end" style="cursor: pointer;"></i> <!-- Show/hide password icon -->
            </div>
            <div class="form-group terms-checkbox">
                <input type="checkbox" id="termsCheckbox">
                <label for="termsCheckbox">Dengan mengklik “Daftar” Anda menerima syarat dan ketentuan kami</label>
            </div>
            <button type="submit" class="signup-btn">Daftar</button>
        </form>

        <!-- Separator -->
        <hr class="my-4">

        <!-- Social Login -->
        <div class="social-login">
            <a href="#" class="social-icon"><i class="bi bi-google"></i></a>
            <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
        </div>

        <!-- Login Link -->
        <p>Sudah punya akun? <a href="#" class="login-link">Masuk</a></p>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>