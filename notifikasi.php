<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
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

        
        .filter-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }


        .search-input {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            color: #666;
        }

        
        .sort-select {
            background-color: #f9f9f9;

            border: 1px solid #ddd;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            color: #666;

        }

        .notification-section {
            margin-bottom: 20px;
        }

        
        .notification-title {
            font-size: 16px;
            font-weight: bold;

            margin-bottom: 10px;
        }


        .notification-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;

        }

        .notification-icon {
            font-size: 24px;
            margin-right: 10px;

        }

        .notification-detai
            s {
            flex: 1;
        }

        .notification-message {

            font-size: 14px;
            color: #666;
        }

        .notification-time {
            font-size: 12px;
            color: #999;
            margin-top: 5px;
        }

        .close-btn {
            font-size: 20px;
            color: #b71c1c;
            /* Dark red */
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="menu-icon">
            <span>&#9776;</span> <!-- Hamburger menu icon -->
        </div>
        <div class="logo"
                ss="search-icon">&#128269;</div> <!-- Search icon -->
        <div class="notification-icon">
            <i class="bi bi-bell-fill"></i> <!-- Bell icon -->
        </div>
        <div class="settings-icon">
            <i class="bi bi-gear-fill"></i> <!-- Gear icon -->
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Filter Bar -->
        <div class="filter-bar">
            <div class="search-input">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Cari Disini">
                        
            </div>
            <div class="sort-select">
                Sort by :
                <select>
                    <option>Terbaru</option>
                    <option>Terlama</option>
                </select>
            </div>
                        
        </div>

        <!-- Notifications -->
        <h5 class="notification-title">All Notif</h5>

        <!-- Hari Ini -->
        <h5 class="notification-title">Hari Ini</h5>
        <div class="notification-item">
            <i class="notification-icon bi bi-calendar-check-fill"></i>
            <div class="notification-details">
                <p class="notification-message">Reservasi Baru dengan Pre-Order<br><small>Anton telah memesan untuk 2
                        
                        tamu dengan pre-order (1x Pizza, 1x Es Kopi Susu).</small></p>
                <p class="notification-time">5 menit yang lalu</p>
            </div>
            <button class="close-btn"><i class="bi bi-x-lg"></i></button>
        </div>
        <div class="notification-item">
            <i class="notification-icon bi bi-star-fill"></i>
            <div class="notification-details">
                        
                <p class="notification-message">Reservasi Acara Dikonfirmasi<br><small>Acara 'Ulang Tahun' untuk 15 tamu
                        telah dikonfirmasi.</small></p>
                <p class="notification-time">1 jam yang lalu</p>
            </div>
            <button class="close-btn"><i class="bi bi-x-lg"></i></button>
        </div>

        <!-- Kemarin -->
        <h5 class="notification-title">Kemarin</h5>

        <div class="notification-item">
            <i class="notification-icon bi bi-x-circle-fill" style="color: #dc3545;"></i>
            <div class="notification-details">
                <p class="notification-message">Reservasi Dibatalkan<br><small>Reservasi #RES123 atas nama Budi Budiman
                        telah dibatalkan.</small></p>
                <p class="notification-time">Kemarin, 10:15</p>
            </div>
            <button class="close-btn"><i class="bi bi-x-lg"></i></button>
        </div>
        <div class="notification-item">
            <i class="notification-icon bi bi-cash-stack"></i>
            <div class="notification-details">
                <p class="notification-message">Pembayaran Diterima<br><small>Pembayaran sebesar Rp 50.000 untuk
                        reservasi #RES123 telah berhasil.</small></p>
                <p class="notification-time">Kemarin, 11:30</p>
            </div>
            <button class="close-btn"><i class="bi bi-x-lg"></i></button>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>