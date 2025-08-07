<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Acara</title>
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

        .event-type-card {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .event-type-card span {
            font-size: 14px;
        }

        .close-icon {
            font-size: 20px;
            color: #b71c1c;
            /* Dark red */
            cursor: pointer;
        }

        .add-event-type-btn {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }

        .reservation-table {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .filter-search-bar {
            display: flex;
            gap: 10px;
        }

        .filter-btn {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            color: #666;
        }

        .search-input {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            color: #666;
        }

        .table-header {
            font-size: 14px;
            font-weight: bold;
            color: #666;
        }

        .table-row {
            margin-top: 10px;
        }

        .status-confirmed {
            color: green;
        }

        .status-pending {
            color: orange;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="menu-icon">
            <span>&#9776;</span> <!-- Hamburger menu icon -->
        </div>
        <div class="logo">Manajemen Acara</div>
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
        <!-- Daftar Jenis Acara -->
        <h5>Daftar Jenis Acara</h5>
        <div class="event-type-card">
            <span>Ulang Tahun</span>
            <span class="close-icon">&times;</span>
        </div>
        <div class="event-type-card">
            <span>Gathering komunitas</span>
            <span class="close-icon">&times;</span>
        </div>
        <div class="event-type-card">
            <span>Meeting</span>
            <span class="close-icon">&times;</span>
        </div>
        <button class="add-event-type-btn">+ Jenis Acara</button>

        <!-- Daftar Reservasi Acara -->
        <h5 class="mt-4">Daftar Reservasi Acara</h5>
        <div class="reservation-table">
            <div class="filter-search-bar">
                <button class="filter-btn"><i class="bi bi-filter"></i> Filter</button>
                <input type="text" class="search-input" placeholder="Search">
            </div>
            <table class="mt-4">
                <thead>
                    <tr>
                        <th class="table-header">No.</th>
                        <th class="table-header">Event</th>
                        <th class="table-header">Jumlah Tamu</th>
                        <th class="table-header">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row">
                        <td>1</td>
                        <td>Ulang Tahun</td>
                        <td>15</td>
                        <td class="status-confirmed">Dikonfirmasi</td>
                    </tr>
                    <tr class="table-row">
                        <td>2</td>
                        <td>Gathering Ko...</td>
                        <td>22</td>
                        <td class="status-pending">Menunggu Pe...</td>
                    </tr>
                    <tr class="table-row">
                        <td>3</td>
                        <td>Meeting</td>
                        <td>22</td>
                        <td class="status-confirmed">Dikonfirmasi</td>
                    </tr>
                    <tr class="table-row">
                        <td>4</td>
                        <td>Ulang Tahun</td>
                        <td>22</td>
                        <td class="status-confirmed">Dikonfirmasi</td>
                    </tr>
                    <tr class="table-row">
                        <td>5</td>
                        <td>Ulang Tahun</td>
                        <td>22</td>
                        <td class="status-confirmed">Dikonfirmasi</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>