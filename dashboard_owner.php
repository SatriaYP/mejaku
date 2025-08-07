<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

        .dashboard-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .cafe-name {
            font-size: 16px;
            color: #666;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            cursor: pointer;
        }

        .card-icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .card-title {
            font-size: 16px;
            font-weight: bold;
        }

        .premium-feature {
            background-color: #fffbe6;
            /* Light yellow */
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .premium-badge {
            background-color: #b71c1c;
            /* Dark red */
            color: white;
            font-size: 12px;
            padding: 2px 5px;
            border-radius: 5px;
            margin-right: 5px;
        }

        .promo-stats {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .promo-stats-item {
            flex: 1;
            text-align: center;
            padding: 10px;
            border-right: 1px solid #ddd;
        }

        .promo-stats-item:last-child {
            border-right: none;
        }

        .promo-stats-label {
            font-size: 14px;
            color: #666;
        }

        .promo-stats-value {
            font-size: 24px;
            font-weight: bold;
        }

        .stats-section {
            margin-top: 20px;
        }

        .stats-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stats-filter {
            font-size: 12px;
            color: #666;
        }

        .stats-chart {
            margin-top: 20px;
        }

        .chart-bar {
            height: 20px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .chart-bar.tamu {
            background-color: #b71c1c;
            /* Dark red */
        }

        .chart-bar.reservasi {
            background-color: #0d6efd;
            /* Blue */
        }

        .chart-bar.pesanan {
            background-color: #ffc107;
            /* Yellow */
        }

        .chart-tooltip {
            position: absolute;
            background-color: #b71c1c;
            /* Dark red */
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            z-index: 1;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="menu-icon">
            <span>&#9776;</span> <!-- Hamburger menu icon -->
        </div>
        <div class="logo">Dashboard</div>
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
        <!-- Dashboard Title -->
        <h2 class="dashboard-title">Dashboard</h2>
        <p class="cafe-name">Cafe Lorem</p>

        <!-- Quick Actions -->
        <div class="row g-3">
            <div class="col-md-6">
                <div class="card" onclick="window.location.href='#';">
                    <i class="bi bi-calendar-check-fill card-icon"></i>
                    <p class="card-title">Manajemen Reservasi</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" onclick="window.location.href='#';">
                    <i class="bi bi-bookmark-fill card-icon"></i>
                    <p class="card-title">Kelola Menu</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" onclick="window.location.href='#';">
                    <i class="bi bi-phone-vibrate-fill card-icon"></i>
                    <p class="card-title">Kelola Pesanan</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" onclick="window.location.href='#';">
                    <i class="bi bi-tag-fill card-icon"></i>
                    <p class="card-title">Kelola Promo</p>
                </div>
            </div>
        </div>

        <!-- Premium Features -->
        <h5 class="mt-4">Fitur Premium</h5>
        <div class="row g-3">
            <div class="col-md-4">
                <div class="premium-feature">
                    <span class="premium-badge">Pro</span>
                    <p>Analitik Pelanggan</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="premium-feature">
                    <span class="premium-badge">Pro</span>
                    <p>Integrasi Pre-Order</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="premium-feature">
                    <span class="premium-badge">Pro</span>
                    <p>Manajemen Acara</p>
                </div>
            </div>
        </div>

        <!-- Promosi & Iklan -->
        <h5 class="mt-4">Promosi & Iklan</h5>
        <div class="promo-stats">
            <div class="promo-stats-item">
                <p class="promo-stats-label">Promo Aktif</p>
                <p class="promo-stats-value">3</p>
            </div>
            <div class="promo-stats-item">
                <p class="promo-stats-label">Total Pengguna</p>
                <p class="promo-stats-value">90 Orang</p>
            </div>
            <button class="btn btn-outline-secondary">+ Promo</button>
        </div>

        <!-- Statistik -->
        <div class="stats-section">
            <div class="stats-header">
                <p>Statistik</p>
                <div class="stats-filter">
                    <select>
                        <option>Bulan</option>
                    </select>
                    <span>&#8942;</span> <!-- Dropdown arrow icon -->
                </div>
            </div>
            <div class="stats-chart">
                <div class="chart-bar tamu" style="width: 100%;">
                    <span class="chart-tooltip">113</span>
                </div>
                <div class="chart-bar reservasi" style="width: 80%;"></div>
                <div class="chart-bar pesanan" style="width: 60%;"></div>
                <div class="chart-axis">
                    <span>10</span>
                    <span>20</span>
                    <span>30</span>
                    <span>40</span>
                    <span>50</span>
                    <span>60</span>
                    <span>70</span>
                    <span>80</span>
                    <span>90</span>
                    <span>100</span>
                    <span>110</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>