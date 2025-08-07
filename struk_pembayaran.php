<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembayaran</title>
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

        .receipt-container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .receipt-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .receipt-date {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        .payment-details {
            margin-top: 20px;
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

        .smart-queue {
            margin-top: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .view-reservation-btn {
            background-color: #b71c1c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
            margin-top: 30px;
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
        <!-- Struk Pembayaran Title -->
        <h2 class="text-center">Struk Pembayaran</h2>

        <!-- Receipt Container -->
        <div class="receipt-container">
            <p class="receipt-title">Cafe Lorem</p>
            <p class="receipt-date">Senin, 11 Januari 2025</p>

            <!-- Payment Details -->
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
        </div>

        <!-- Smart Queue -->
        <div class="smart-queue">
            <span>Smart Queue</span>
            <span>&#10148;</span> <!-- Right arrow icon -->
        </div>

        <!-- View Reservation Button -->
        <button class="view-reservation-btn">Lihat Reservasi Saya</button>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>