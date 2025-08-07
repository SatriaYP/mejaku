<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pembayaran Mitra</title>
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

        .content {
            padding: 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .payment-details {
            margin-bottom: 20px;
        }

        .payment-total {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .payment-virtual-account {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .instructions {
            margin-top: 20px;
        }

        .instruction-step {
            margin-bottom: 5px;
        }

        .deadline-section {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .clock-icon {
            font-size: 30px;
            margin-right: 10px;
        }

        .deadline-text {
            font-size: 16px;
            font-weight: bold;
        }

        .check-payment-btn {
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
    <!-- Content -->
    <div class="content">
        <!-- Logo -->
        <h1 class="logo">MejaKu Partner</h1>

        <!-- Detail Pembayaran Mitra -->
        <h2 class="subtitle">Detail Pembayaran Mitra</h2>
        <div class="payment-details">
            <p class="payment-total">Total<br>Rp 260.000</p>
            <p class="payment-virtual-account">Nomor Virtual Akun<br>12345678909876</p>
        </div>

        <!-- Tata Cara -->
        <h2 class="subtitle">Tata Cara</h2>
        <ol class="instructions">
            <li class="instruction-step">Masuk ke menu Transfer pada myBCA.</li>
            <li class="instruction-step">Pilih Virtual Account > Transfer to new beneficiary.</li>
            <li class="instruction-step">Masukkan Kode Pembayaran 12345678909876.</li>
            <li class="instruction-step">Masukkan PIN Anda, lalu pilih Kirim.</li>
            <li class="instruction-step">Status transaksi akan dikirim melalui SMS dan dapat digunakan sebagai bukti
                pembayaran.</li>
        </ol>

        <!-- Deadline Section -->
        <div class="deadline-section">
            <i class="clock-icon bi bi-clock-fill"></i>
            <div class="deadline-text">
                Selesaikan pembayaranmu sebelum<br>
                <span>28 Juli 2025</span> <br>
                <span>23.59 WIB</span>
            </div>
        </div>

        <!-- Check Payment Button -->
        <button class="check-payment-btn">Periksa Status Pembayaran</button>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>