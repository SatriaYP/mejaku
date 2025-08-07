<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analitik Pelanggan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .chart-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .filter-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .filter-label {
            font-size: 14px;
            color: #666;
        }

        .filter-select {
            font-size: 12px;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .chart-container {
            position: relative;
        }

        .tooltip {
            position: absolute;
            background-color: #fffbe6;
            /* Light yellow */
            color: #b71c1c;
            /* Dark red */
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
        <div class="logo">Analitik Pelanggan</div>
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
        <!-- Total Reservasi -->
        <div class="card">
            <div class="filter-group">
                <h5 class="chart-title">Total Reservasi</h5>
                <div class="filter-label">Bulan</div>
                <select class="filter-select">
                    <option>Hari Ini</option>
                    <option>Minggu Ini</option>
                    <option>Bulan Ini</option>
                </select>
                <div class="more-options">
                    <span>&#8942;</span> <!-- Dropdown arrow icon -->
                </div>
            </div>
            <div class="chart-container">
                <canvas id="totalReservationsChart"></canvas>
                <div class="tooltip" style="display: none;">482 Reservasi</div>
            </div>
        </div>

        <!-- Jam Sibuk -->
        <div class="card">
            <div class="filter-group">
                <h5 class="chart-title">Jam Sibuk</h5>
                <div class="filter-label">Hari Ini</div>
                <select class="filter-select">
                    <option>Hari Ini</option>
                    <option>Minggu Ini</option>
                    <option>Bulan Ini</option>
                </select>
                <div class="more-options">
                    <span>&#8942;</span> <!-- Dropdown arrow icon -->
                </div>
            </div>
            <div class="chart-container">
                <canvas id="busyHoursChart"></canvas>
                <div class="tooltip" style="display: none;">200 Reservasi</div>
            </div>
        </div>

        <!-- Menu Favorite Pelanggan -->
        <h5 class="chart-title">Menu Favorite Pelanggan</h5>
        <div class="card">
            <div class="chart-container">
                <canvas id="favoriteMenuChart"></canvas>
                <div class="tooltip" style="display: none;">280 Penjualan</div>
            </div>
        </div>
    </div>

    <!-- Script for Charts -->
    <script>
        // Total Reservasi Chart
        const totalReservationsData = {
            labels: ['19', '21', '23', '25', '27', '29'],
            datasets: [{
                label: 'Total Reservasi',
                data: [482, 500, 450, 420, 380, 400],
                backgroundColor: '#b71c1c', // Dark red
            }]
        };
        const totalReservationsConfig = {
            type: 'bar',
            data: totalReservationsData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 100
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        enabled: false
                    }
                }
            }
        };
        const totalReservationsChart = new Chart(
            document.getElementById('totalReservationsChart'),
            totalReservationsConfig
        );

        // Jam Sibuk Chart
        const busyHoursData = {
            labels: ['11', '12', '13', '14', '15', '16'],
            datasets: [{
                label: 'Jam Sibuk',
                data: [200, 550, 300, 400, 350, 500],
                backgroundColor: '#0d6efd', // Blue
            }]
        };
        const busyHoursConfig = {
            type: 'bar',
            data: busyHoursData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 100
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        enabled: false
                    }
                }
            }
        };
        const busyHoursChart = new Chart(
            document.getElementById('busyHoursChart'),
            busyHoursConfig
        );

        // Menu Favorite Pelanggan Chart
        const favoriteMenuData = {
            labels: ['Menu A', 'Menu B', 'Menu C', 'Menu D', 'Menu E', 'Menu F', 'Menu G', 'Menu H'],
            datasets: [{
                label: 'Penjualan',
                data: [50, 70, 80, 60, 90, 100, 85, 75],
                backgroundColor: '#ffc107', // Yellow
            }]
        };
        const favoriteMenuConfig = {
            type: 'bar',
            data: favoriteMenuData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 50
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        enabled: false
                    }
                }
            }
        };
        const favoriteMenuChart = new Chart(
            document.getElementById('favoriteMenuChart'),
            favoriteMenuConfig
        );
    </script>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>