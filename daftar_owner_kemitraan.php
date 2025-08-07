<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selesaikan Pendaftaran</title>
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

        .step-progress {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .step-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ddd;
            color: #333;
            font-weight: bold;
            margin-right: 10px;
        }

        .step-circle.active {
            background-color: #b71c1c;
            /* Dark red */
            color: white;
        }

        .step-label {
            font-size: 12px;
            color: #b71c1c;
            /* Dark red */
            margin-left: 10px;
        }

        .pricing-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .pricing-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .price {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .features-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .feature-icon {
            font-size: 20px;
            color: #b71c1c;
            /* Dark red */
            margin-right: 10px;
        }

        .next-btn {
            background-color: #b71c1c;
            /* Dark red */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
            width: 100%;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <!-- Content -->
    <div class="content">
        <!-- Logo and Title -->
        <h1 class="logo">MejaKu Partner</h1>
        <h2>Selesaikan Pendaftaran Anda</h2>
        <p class="subtitle">Jangkau lebih banyak pelanggan dan kelola reservasi dengan mudah.</p>

        <!-- Step Progress -->
        <div class="step-progress">
            <div class="step-circle active"><i class="bi bi-check-circle-fill"></i></div>
            <span class="step-label">Informasi Restoran</span>
            <div class="step-circle">2</div>
            <span class="step-label">Kemitraan</span>
            <div class="step-circle">3</div>
            <span class="step-label">Pembayaran Mitra</span>
        </div>

        <!-- Pricing Card -->
        <div class="pricing-card">
            <p class="pricing-title">Biaya Aktivasi Akun</p>
            <p class="price">Rp 250.000<br><small>Sekali bayar</small></p>
            <p class="pricing-title">Fitur Paket Dasar yang Anda Dapatkan Selamanya:</p>
            <ul class="features-list">
                <li class="feature-item">
                    <i class="feature-icon bi bi-check-circle-fill"></i>
                    <span>Manajemen Reservasi : untuk mengelola semua pemesanan tempat.</span>
                </li>
                <li class="feature-item">
                    <i class="feature-icon bi bi-check-circle-fill"></i>
                    <span>Kelola Menu : untuk menambah dan mengatur menu restoran Anda.</span>
                </li>
                <li class="feature-item">
                    <i class="feature-icon bi bi-check-circle-fill"></i>
                    <span>Kelola Pesanan : untuk melihat pesanan yang masuk.</span>
                </li>
                <li class="feature-item">
                    <i class="feature-icon bi bi-check-circle-fill"></i>
                    <span>Kelola Promo : untuk membuat promo dan diskon dasar.</span>
                </li>
            </ul>
        </div>

        <!-- Next Button -->
        <button class="next-btn">Lanjut</button>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>