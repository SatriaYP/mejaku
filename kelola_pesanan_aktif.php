<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pesanan</title>
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

        .status-card.baru {
            background-color: #f9f9f9;
            /* Light gray */
        }

        .status-card.aktif {
            background-color: #b71c1c;
            /* Dark red */
            color: white;
        }

        .status-card.selesai {
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

        .order-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .group-label {
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

        .table-status {
            font-size: 14px;
            color: #b71c1c;
            /* Dark red */
        }

        .cancel-btn {
            background-color: #b71c1c;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
        }

        .reminder-btn {
            background-color: #ffc107;
            /* Yellow */
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
        }

        .table-number {
            background-color: #fffbe6;
            /* Light yellow */
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
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="menu-icon">
            <span>&#9776;</span> <!-- Hamburger menu icon -->
        </div>
        <div class="logo">Kelola Pesanan</div>
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
        <h5>Pesanan</h5>
        <div class="d-flex">
            <div class="status-card baru">
                <p class="status-title">Baru</p>
                <p class="status-count">2</p>
            </div>
            <div class="status-card aktif">
                <p class="status-title">Aktif</p>
                <p class="status-count">8</p>
            </div>
            <div class="status-card selesai">
                <p class="status-title">Selesai</p>
                <p class="status-count">8</p>
            </div>
        </div>

        <!-- Orders -->
        <h5 class="mt-4">Rincian</h5>
        <!-- Order Card 1 -->
        <div class="order-card">
            <p class="date-time">Senin, 11 Januari 2025 | 15:30</p>
            <p class="group-label">Grup - 5 Tamu</p>
            <p class="customer-name">Budi Budiman</p>
            <div class="item-details">
                <p>1x Pizza</p>
                <p>1x Es Kopi Susu</p>
            </div>
            <p class="table-status"><i class="bi bi-exclamation-triangle-fill"></i> Status Meja: Penuh</p>
            <div class="d-flex">
                <button class="cancel-btn">Cancel Pesanan</button>
                <button class="reminder-btn">Kirim Reminder</button>
            </div>
            <div class="d-flex justify-content-end">
                <div class="table-number">Nomor Meja<br>2</div>
                <p class="price">Rp 50.000</p>
            </div>
        </div>

        <!-- Order Card 2 -->
        <div class="order-card">
            <p class="date-time">Senin, 11 Januari 2025 | 15:30</p>
            <p class="group-label">Grup - 5 Tamu</p>
            <p class="customer-name">Budi Budiman</p>
            <div class="item-details">
                <p>1x Pizza</p>
                <p>1x Es Kopi Susu</p>
            </div>
            <p class="table-status"><i class="bi bi-check-circle-fill"></i> Status Meja: Tersedia</p>
            <div class="d-flex">
                <button class="cancel-btn">Cancel Pesanan</button>
                <button class="reminder-btn">Kirim Reminder</button>
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