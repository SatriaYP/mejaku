<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Promo</title>
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

        .promo-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .promo-title {
            font-size: 16px;
            font-weight: bold;
        }

        .promo-subtitle {
            font-size: 14px;
            color: #666;
        }

        .action-btn {
            background-color: #ffc107;
            /* Yellow */
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            margin-right: 5px;
        }

        .delete-btn {
            background-color: #dc3545;
            /* Red */
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
        }

        .add-promo-btn {
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
        <div class="logo">Kelola Promo</div>
        <div class="search-icon">&#128269;</div> <!-- Search icon -->
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Status Cards -->
        <h5>Promo</h5>
        <div class="d-flex">
            <div class="status-card aktif">
                <p class="status-title">Aktif</p>
                <p class="status-count">2</p>
            </div>
            <div class="status-card selesai">
                <p class="status-title">Selesai</p>
                <p class="status-count">8</p>
            </div>
        </div>

        <!-- Rincian Promosi -->
        <h5 class="mt-4">Rincian</h5>
        <!-- Promo Card 1 -->
        <div class="promo-card">
            <p class="promo-title">Voucher Diskon 50%</p>
            <p class="promo-subtitle">Spesial Tahun Baru<br><small>*Max 100 Pengguna</small></p>
            <div class="d-flex justify-content-end">
                <button class="action-btn">Ubah</button>
                <button class="delete-btn"><i class="bi bi-trash-fill"></i></button>
            </div>
        </div>

        <!-- Promo Card 2 -->
        <div class="promo-card">
            <p class="promo-title">Voucher Diskon 50%</p>
            <p class="promo-subtitle">Spesial Tahun Baru<br><small>*Max 100 Pengguna</small></p>
            <div class="d-flex justify-content-end">
                <button class="action-btn">Ubah</button>
                <button class="delete-btn"><i class="bi bi-trash-fill"></i></button>
            </div>
        </div>

        <!-- Add Promo Button -->
        <button class="add-promo-btn">Tambah Promo</button>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>