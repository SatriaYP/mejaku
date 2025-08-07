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
            background-color: #b71c1c;
            /* Dark red */
            color: white;
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

        .table-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        .table-card {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
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

        <!-- Table Grid -->
        <h5 class="mt-4">Meja</h5>
        <div class="table-grid">
            <div class="table-card">1</div>
            <div class="table-card">2</div>
            <div class="table-card">3</div>
            <div class="table-card">4</div>
            <div class="table-card">5</div>
            <div class="table-card">6</div>
            <div class="table-card">7</div>
            <div class="table-card">8</div>
            <div class="table-card">9</div>
            <div class="table-card">10</div>
            <div class="table-card">11</div>
            <div class="table-card">12</div>
            <div class="table-card">13</div>
            <div class="table-card">14</div>
            <div class="table-card">15</div>
            <div class="table-card">16</div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>