<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Saya</title>
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
            background-color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        .reservation-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .reservation-title {
            font-size: 16px;
            font-weight: bold;
        }

        .reservation-date {
            font-size: 14px;
            color: #666;
        }

        .reservation-status {
            font-size: 12px;
            color: red;
            text-transform: uppercase;
        }

        .table-details {
            margin-top: 10px;
        }

        .total-price {
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }

        .action-buttons {
            margin-top: 10px;
        }

        .cancel-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .contact-btn {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .rate-btn {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .table-number {
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
        <div class="logo">MejaKu</div>
        <div class="search-icon">&#128269;</div> <!-- Search icon -->
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary"><i
                            class="bi bi-arrow-left"></i> Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reservasi Saya</li>
            </ol>
        </nav>

        <!-- Reservation Cards -->
        <!-- Card 1 -->
        <div class="reservation-card">
            <div class="d-flex justify-content-between">
                <div>
                    <p class="reservation-title">Cafe Lorem</p>
                    <p class="reservation-date">Senin, 11 Januari 2025 | 15:30</p>
                    <p class="reservation-status">Reservasi</p>
                </div>
                <div class="table-number">Nomor Meja<br>2</div>
            </div>
            <p class="reservation-title">Budi Budiman</p>
            <div class="table-details">
                <p>1x Pizza</p>
                <p>1x Es Kopi Susu</p>
            </div>
            <p class="total-price">Rp 50.000</p>
            <div class="action-buttons">
                <button class="cancel-btn">Batalkan Reservasi</button>
                <button class="contact-btn">Hubungi Cafe</button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="reservation-card">
            <div class="d-flex justify-content-between">
                <div>
                    <p class="reservation-title">Cafe Lorem</p>
                    <p class="reservation-date">Senin, 10 Januari 2025 | 15:30</p>
                    <p class="reservation-status">Reservasi</p>
                </div>
                <div class="table-number">Nomor Meja<br>2</div>
            </div>
            <p class="reservation-title">Budi Budiman</p>
            <div class="table-details">
                <p>1x Pizza</p>
                <p>1x Es Kopi Susu</p>
            </div>
            <p class="total-price">Rp 50.000</p>
            <div class="action-buttons">
                <button class="rate-btn">Beri Rating</button>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>