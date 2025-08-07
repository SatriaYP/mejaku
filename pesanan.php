<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
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

        .reservation-details {
            margin-bottom: 20px;
        }

        .total-price {
            font-size: 24px;
            font-weight: bold;
            margin-top: 5px;
        }

        .account-number {
            font-size: 18px;
            margin-top: 5px;
        }

        .payment-instructions {
            margin-top: 20px;
        }

        .instruction-list {
            list-style-type: decimal;
            margin-left: 20px;
        }

        .payment-deadline {
            margin-top: 20px;
            padding: 10px;
            background-color: #fffbe6;
            /* Light yellow background */
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .clock-icon {
            font-size: 30px;
            color: #b71c1c;
            /* Dark red */
            margin-right: 10px;
        }

        .deadline-text {
            font-size: 18px;
            font-weight: bold;
        }

        .check-payment-btn {
            background-color: #b71c1c;
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
        <div class="logo">MejaKu</div>
        <div class="search-icon">&#128269;</div> <!-- Search icon -->
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary"><i
                            class="bi bi-arrow-left"></i> Pesanan</a></li>
            </ol>
        </nav>

        <!-- Reservation Details -->
        <h5 class="reservation-details">Detail Reservasi</h5>
        <p class="total-price">Total<br>Rp 50.000</p>
        <p class="account-number">Nomor Virtual Akun<br>12345678909876</p>

        <!-- Payment Instructions -->
        <h5 class="payment-instructions">Tata Cara</h5>
        <ol class="instruction-list">
            <li>Masuk ke menu Transfer pada myBCA.</li>
            <li>Pilih Virtual Account > Transfer to new beneficiary.</li>
            <li>Masukkan Kode Pembayaran 12345678909876.</li>
            <li>Masukkan PIN Anda, lalu pilih Kirim.</li>
            <li>Status transaksi akan dikirim melalui SMS dan dapat digunakan sebagai bukti pembayaran.</li>
        </ol>

        <!-- Payment Deadline -->
        <div class="payment-deadline">
            <div class="d-flex align-items-center">
                <i class="clock-icon bi bi-clock"></i>
                <div>
                    <p>Selesaikan pembayaranmu sebelum</p>
                    <p class="deadline-text">29 Juli 2025 23.59 WIB</p>
                </div>
            </div>
        </div>

        <!-- Check Payment Status Button -->
        <button class="check-payment-btn">Periksa Status Pembayaran</button>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>