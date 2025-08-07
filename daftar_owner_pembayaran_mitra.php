<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selesaikan Pendaftaran</title>
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
            color: #666;
            margin-bottom: 20px;
        }

        .step-progress {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .step-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ddd;
            color: #333;
            font-weight: bold;
            margin-right: 10px;
        }

        .step-circle.active {
            background-color: #b71c1c;
            /* Dark red */
            color: white;
        }

        .step-label {
            font-size: 12px;
            color: #b71c1c;
            /* Dark red */
            margin-left: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
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
        <!-- Logo and Title -->
        <h1 class="logo">MejaKu Partner</h1>
        <h2>Selesaikan Pendaftaran Anda</h2>
        <p class="subtitle">Langkah terakhir untuk mengaktifkan akun Cafe Lorem Anda.</p>

        <!-- Step Progress -->
        <div class="step-progress">
            <div class="step-circle active"><i class="bi bi-check-circle-fill"></i></div>
            <span class="step-label">Informasi Restoran</span>
            <div class="step-circle active"><i class="bi bi-check-circle-fill"></i></div>
            <span class="step-label">Kemitraan</span>
            <div class="step-circle">3</div>
            <span class="step-label">Pembayaran Mitra</span>
        </div>

        <!-- Paket Section -->
        <h5>Paket</h5>
        <p>Biaya Aktivasi Akun</p>

        <!-- Metode Pembayaran -->
        <h5>Metode Pembayaran</h5>
        <div class="form-group">
            <select class="input-field">
                <option>Pilih Metode pembayaran</option>
                <!-- Add more options as needed -->
            </select>
        </div>

        <!-- Ringkasan Pesanan -->
        <h5>Ringkasan Pesanan</h5>
        <table class="summary-table">
            <tr>
                <td class="summary-label">Total Harga</td>
                <td class="summary-value">Rp 250.000</td>
            </tr>
            <tr>
                <td class="summary-label">Pajak</td>
                <td class="summary-value">Rp 10.000</td>
            </tr>
            <tr>
                <td class="summary-label">Total</td>
                <td class="summary-value">Rp 260.000</td>
            </tr>
        </table>

        <!-- Pay Button -->
        <button class="pay-btn">Bayar</button>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>