<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom styles */
        body {
            font-family: 'Arial', sans-serif;
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

        .item-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .item-name {
            font-weight: bold;
        }

        .item-price {
            color: #333;
        }

        .payment-method {
            margin-top: 20px;
        }

        .payment-method-title {
            font-weight: bold;
        }

        .payment-method-select {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .voucher-message {
            background-color: #fffbe6;
            border: 1px solid #fdd835;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
            display: flex;
            align-items: center;
        }

        .voucher-icon {
            font-size: 20px;
            color: #fdd835;
            margin-right: 5px;
        }

        .payment-details {
            margin-top: 20px;
        }

        .payment-details-title {
            font-weight: bold;
        }

        .payment-table {
            width: 100%;
            border-collapse: collapse;
        }

        .payment-table td {
            padding: 5px 0;
        }

        .payment-table .label {
            font-weight: bold;
        }

        .payment-table .amount {
            text-align: right;
        }

        .total-row {
            font-weight: bold;
        }

        .pay-btn {
            background-color: #b71c1c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
            margin-top: 20px;
            width: 100%;
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
        <!-- Pembayaran Section -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="#" class="text-decoration-none text-secondary"><i class="bi bi-arrow-left"></i> Pembayaran</a>
        </div>

        <!-- Item List -->
        <div class="item-container">
            <div>
                <p class="item-name">Es Kopi Susu</p>
                <p class="item-price">Rp.28.000</p>
            </div>
            <div class="item-quantity">1</div>
        </div>
        <div class="item-container">
            <div>
                <p class="item-name">Es Kopi</p>
                <p class="item-price">Rp.28.000</p>
            </div>
            <div class="item-quantity">1</div>
        </div>

        <!-- Metode Pembayaran -->
        <h5 class="payment-method-title">Metode Pembayaran</h5>
        <div class="payment-method-select">
            <span>Pilih Metode pembayaran</span>
            <span>&#10148;</span> <!-- Right arrow icon -->
        </div>

        <!-- Voucher Message -->
        <div class="voucher-message">
            <span class="voucher-icon">&#128190;</span> <!-- Gift icon -->
            <span>Hore! 1 Voucher Berhasil Digunakan</span>
            <span>&#10148;</span> <!-- Right arrow icon -->
        </div>

        <!-- Rincian Pembayaran -->
        <h5 class="payment-details-title">Rincian Pembayaran</h5>
        <table class="payment-table">
            <tr>
                <td class="label">Total Harga</td>
                <td class="amount">Rp 50.000</td>
            </tr>
            <tr>
                <td class="label">Voucher</td>
                <td class="amount">-Rp 5.000</td>
            </tr>
            <tr>
                <td class="label">Biaya Reservasi</td>
                <td class="amount">Rp 10.000</td>
            </tr>
            <tr>
                <td class="label">Pajak</td>
                <td class="amount">Rp 10.000</td>
            </tr>
            <tr class="total-row">
                <td class="label">Total</td>
                <td class="amount">Rp 50.000</td>
            </tr>
        </table>

        <!-- Pay Button -->
        <button class="pay-btn">Bayar</button>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>