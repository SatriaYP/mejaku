<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Premium</title>
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

        .section-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .description {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        .pricing-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .plan-label {
            background-color: #fffbe6;
            /* Light yellow */
            border: 1px solid #ddd;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            color: #b71c1c;
            /* Dark red */
        }

        .price {
            font-size: 24px;
            font-weight: bold;
            margin-top: 10px;
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

        .upgrade-btn {
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
    <!-- Header -->
    <div class="header">
        <div class="menu-icon">
            <span>&#9776;</span> <!-- Hamburger menu icon -->
        </div>
        <div class="logo">Pengaturan / Paket Premium</div>
        <div class="search-icon">&#128269;</div> <!-- Search icon -->
        <div class="notification-icon">
            <i class="bi bi-bell-fill"></i> <!-- Bell icon -->
        </div>
        <div class="settings-icon">
            <i class="bi bi-gear-fill"></i> <!-- Gear icon -->
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Section Title -->
        <h2 class="section-title">Tingkatkan Fitur Anda</h2>
        <p class="description">Dapatkan wawasan lebih dalam dan kelola restoran Anda lebih efisien dengan Paket Premium.
        </p>

        <!-- Pricing Cards -->
        <div class="pricing-card">
            <p class="plan-label">Paket Premium Tahunan</p>
            <p class="price">Rp 1.490.000<br><small>/Tahun</small></p>
        </div>
        <div class="pricing-card">
            <p class="plan-label">Paket Premium Bulanan</p>
            <p class="price">Rp 149.000<br><small>/Bulan</small></p>
        </div>

        <!-- Features List -->
        <p>Semua fitur gratis, ditambah:</p>
        <ul class="features-list">
            <li class="feature-item">
                <i class="feature-icon bi bi-check-circle-fill"></i>
                <span>Analitik Pelanggan : Pahami data total reservasi, jam sibuk, dan menu favorit pelanggan.</span>
            </li>
            <li class="feature-item">
                <i class="feature-icon bi bi-check-circle-fill"></i>
                <span>Integrasi Pre-Order : Aktifkan fitur pre-order untuk semua atau menu tertentu.</span>
            </li>
            <li class="feature-item">
                <i class="feature-icon bi bi-check-circle-fill"></i>
                <span>Manajemen Acara : Kelola reservasi untuk acara khusus seperti ulang tahun atau gathering.</span>
            </li>
        </ul>

        <!-- Upgrade Button -->
        <button class="upgrade-btn">Upgrade ke Premium Sekarang</button>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>