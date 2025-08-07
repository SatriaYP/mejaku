<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Premium - Pembayaran</title>
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
        .payment-method-card {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .bank-logo {
            width: 30px;
            height: 30px;
            object-fit: cover;
            margin-right: 10px;
        }
        .voucher-message {
            background-color: #fffbe6; /* Light yellow */
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
        .summary-table {
            margin-top: 20px;
        }
        .summary-label {
            font-size: 14px;
            font-weight: bold;
        }
        .summary-value {
            font-size: 14px;
            text-align: right;
        }
        .pay-btn {
            background-color: #b71c1c; /* Dark red */
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
        <div class="logo">Paket Premium / Pembayaran</div>
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
        <!-- Paket Section -->
        <h5>Paket</h5>
        <p>Paket Premium Bulanan</p>

        <!-- Metode Pembayaran -->
        <h5>Metode Pembayaran</h5>
        <div class="payment-method-card">
            <div>
                <img src="https://source.unsplash.com/random/30x30/?mandiri" alt="Bank Mandiri" class="bank-logo">
                <div>
                    <p class="summary-label">Bank Mandiri</p>
                    <p class="summary-value">132.145.321.640</p>
                </div>
            </div>
            <button class="action-btn"><i class="bi bi-chevron-right"></i></button>
        </div>

        <!-- Voucher Message -->
        <div class="voucher-message">
            <i class="bi bi-exclamation-triangle-fill" style="color: #b71c1c;"></i> <!-- Warning icon -->
            <span>Hore! 1 Voucher Berhasil Digunakan</span>
            <button class="action-btn"><i class="bi bi-chevron-right"></i></button>
        </div>

        <!-- Ringkasan Pesanan -->
        <h5>Ringkasan Pesanan</h5>
        <table class="summary-table">
            <tr>
                <td class="summary-label">Total Harga</td>
                <td class="summary-value">Rp 149.000</td>
            </tr>
            <tr>
                <td class="summary-label">Voucher</td>
                <td class="summary-value">-Rp 4.900</td>
            </tr>
            <tr>
                <td class="summary-label">Pajak</td>
                <td class="summary-value">Rp 10.000</td>
            </tr>
            <tr>
                <td class="summary-label">Total</td>
                <td class="summary-value">Rp 154.100</td>
            </tr>
        </table>

        <!-- Pay Button -->
        <button class="pay-btn">Bayar</button>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>