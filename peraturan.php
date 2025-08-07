<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peraturan</title>
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

        .profile-section {
            text-align: center;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .restaurant-name {
            font-size: 16px;
            font-weight: bold;
        }

        .restaurant-location {
            font-size: 14px;
            color: #666;
        }

        .opening-hours {
            font-size: 14px;
            color: #28a745;
            /* Green */
        }

        .progress-bar {
            background-color: #b71c1c;
            /* Dark red */
            height: 5px;
            margin-top: 10px;
        }

        .profile-progress {
            font-size: 14px;
            font-weight: bold;
            margin-top: 10px;
        }

        .settings-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .settings-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .settings-title {
            font-size: 14px;
            font-weight: bold;
        }

        .settings-arrow {
            font-size: 18px;
            color: #666;
        }

        .settings-group {
            margin-top: 20px;
        }

        .settings-group-title {
            font-size: 16px;
            font-weight: bold;
            color: #b71c1c;
            /* Dark red */
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="menu-icon">
            <span>&#9776;</span> <!-- Hamburger menu icon -->
        </div>
        <div class="logo">Peraturan</div>
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
        <!-- Profile Section -->
        <div class="profile-section">
            <img src="https://source.unsplash.com/random/100x100/?cafe" alt="Cafe Logo" class="profile-image">
            <p class="restaurant-name">Cafe Lorem</p>
            <p class="restaurant-location">Jakarta</p>
            <p class="opening-hours">Buka • tutup Pukul 22:00</p>
            <div class="progress-bar" style="width: 100%;"></div>
            <p class="profile-progress">100%<br>10 / 10 profile data filled</p>
        </div>

        <!-- Settings List -->
        <ul class="settings-list">
            <li class="settings-item">
                <span class="settings-title">Profil Restoran</span>
                <span class="settings-arrow">></span>
            </li>
            <li class="settings-item">
                <span class="settings-title">Manajemen Akun</span>
                <span class="settings-arrow">></span>
            </li>
            <li class="settings-item">
                <span class="settings-title">Pembayaran</span>
                <span class="settings-arrow">></span>
            </li>
            <li class="settings-item">
                <span class="settings-title">Paket Premium</span>
                <span class="settings-arrow">></span>
            </li>
        </ul>

        <!-- Settings Group -->
        <div class="settings-group">
            <h5 class="settings-group-title">Pengaturan</h5>
            <ul class="settings-list">
                <li class="settings-item">
                    <span class="settings-title">Bahasa</span>
                    <span class="settings-arrow">></span>
                </li>
                <li class="settings-item">
                    <span class="settings-title">Notifikasi</span>
                    <span class="settings-arrow">></span>
                </li>
                <li class="settings-item">
                    <span class="settings-title">Kebijakan Privasi</span>
                    <span class="settings-arrow">></span>
                </li>
                <li class="settings-item">
                    <span class="settings-title">Bantuan & Dukungan</span>
                    <span class="settings-arrow">></span>
                </li>
                <li class="settings-item">
                    <span class="settings-title">Tentang Website</span>
                    <span class="settings-arrow">></span>
                </li>
                <li class="settings-item">
                    <span class="settings-title">Log Out</span>
                    <span class="settings-arrow">></span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>