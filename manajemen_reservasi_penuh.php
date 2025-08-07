<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Reservasi</title>
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

        .status-card {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            cursor: pointer;
            margin-right: 10px;
            padding: 10px;
        }

        .status-card.penuh {
            background-color: #b71c1c;
            /* Dark red */
            color: white;
        }

        .status-card.tersedia {
            background-color: #f9f9f9;
            /* Light gray */
        }

        .status-card.direservasi {
            background-color: #f9f9f9;
            /* Light gray */
        }

        .status-title {
            font-size: 16px;
            font-weight: bold;
        }

        .status-count {
            font-size: 24px;
            font-weight: bold;
        }

        .reservation-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .reservation-group {
            font-size: 14px;
            font-weight: bold;
            color: #b71c1c;
            /* Dark red */
        }

        .customer-name {
            font-size: 16px;
            font-weight: bold;
        }

        .item-details {
            margin-top: 5px;
            font-size: 14px;
            color: #666;
        }

        .date-time {
            font-size: 14px;
            color: #666;
        }

        .status-badge {
            background-color: #fffbe6;
            /* Light yellow */
            color: #b71c1c;
            /* Dark red */
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
        }

        .table-number {
            background-color: #f9f9f9;
            /* Light gray */
            border: 1px solid #ddd;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            color: #666;
        }

        .price {
            font-size: 16px;
            color: #b71c1c;
            /* Dark red */
        }

        .action-buttons {
            margin-top: 10px;
        }

        .action-btn {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="menu-icon">
            <span>&#9776;</span> <!-- Hamburger menu icon -->
        </div>
        <div class="logo">Manajemen Reservasi</div>
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
        <!-- Status Cards -->
        <h5>Meja</h5>
        <div class="d-flex">
            <div class="status-card penuh">
                <p class="status-title">Penuh</p>
                <p class="status-count">10</p>
            </div>
            <div class="status-card tersedia">
                <p class="status-title">Tersedia</p>
                <p class="status-count">8</p>
            </div>
            <div class="status-card direservasi">
                <p class="status-title">Direservasi</p>
                <p class="status-count">8</p>
            </div>
        </div>

        <!-- Reservation Cards -->
        <!-- Card 1 -->
        <div class="reservation-card">
            <p class="reservation-group">Grup - 5 Tamu</p>
            <p class="customer-name">Budi Budiman</p>
            <div class="item-details">
                <p>1x Pizza</p>
                <p>1x Es Kopi Susu</p>
            </div>
            <p class="date-time">Senin, 11 Januari 2025<br>15:30</p>
            <p class="status-badge">Penuh</p>
            <div class="action-buttons">
                <button class="action-btn">Ubah Pesanan</button>
                <button class="action-btn">Sudah Kosong</button>
            </div>
            <div class="d-flex justify-content-end">
                <div class="table-number">Nomor Meja<br>2</div>
                <p class="price">Rp 50.000</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="reservation-card">
            <p class="reservation-group">Biasa</p>
            <p class="customer-name">Budi Budiman</p>
            <div class="item-details">
                <p>1x Pizza</p>
                <p>1x Es Kopi Susu</p>
            </div>
            <p class="date-time">Senin, 11 Januari 2025<br>15:30</p>
            <p class="status-badge">Penuh</p>
            <div class="action-buttons">
                <button class="action-btn">Ubah Pesanan</button>
                <button class="action-btn">Sudah Kosong</button>
            </div>
            <div class="d-flex justify-content-end">
                <div class="table-number">Nomor Meja<br>2</div>
                <p class="price">Rp 50.000</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>