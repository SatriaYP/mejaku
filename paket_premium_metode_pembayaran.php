<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Pembayaran</title>
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

        .payment-method-section {
            margin-bottom: 20px;
        }

        .payment-method-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .payment-method-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .payment-method-name {
            font-size: 14px;
            font-weight: bold;
        }

        .payment-method-details {
            font-size: 12px;
            color: #666;
        }

        .continue-btn {
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
        <div class="logo">Pembayaran / Metode Pembayaran</div>
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
        <!-- Internet Banking -->
        <div class="payment-method-section">
            <h5 class="payment-method-title">Internet Banking</h5>
            <div class="payment-method-item">
                <div>
                    <img src="https://source.unsplash.com/random/30x30/?mandiri" alt="Bank Mandiri"
                        style="width: 30px; height: 30px; object-fit: cover; margin-right: 10px;">
                    <div>
                        <p class="payment-method-name">Bank Mandiri</p>
                        <p class="payment-method-details">132 145 321 640</p>
                    </div>
                </div>
                <input type="radio" name="payment-method" value="bank-mandiri">
            </div>
        </div>

        <!-- E-Wallet -->
        <div class="payment-method-section">
            <h5 class="payment-method-title">E-Wallet</h5>
            <div class="payment-method-item">
                <div>
                    <img src="https://source.unsplash.com/random/30x30/?seabank" alt="SeaBank"
                        style="width: 30px; height: 30px; object-fit: cover; margin-right: 10px;">
                    <div>
                        <p class="payment-method-name">SeaBank</p>
                        <p class="payment-method-details">+62 812-3456-1234</p>
                    </div>
                </div>
                <input type="radio" name="payment-method" value="seabank">
            </div>
            <div class="payment-method-item">
                <div>
                    <img src="https://source.unsplash.com/random/30x30/?gopay" alt="GoPay"
                        style="width: 30px; height: 30px; object-fit: cover; margin-right: 10px;">
                    <div>
                        <p class="payment-method-name">GoPay</p>
                        <p class="payment-method-details">+62 812-3456-1234</p>
                    </div>
                </div>
                <input type="radio" name="payment-method" value="gopay">
            </div>
        </div>

        <!-- Transfer Akun Virtual -->
        <div class="payment-method-section">
            <h5 class="payment-method-title">Transfer Akun Virtual</h5>
            <div class="payment-method-item">
                <div>
                    <img src="https://source.unsplash.com/random/30x30/?mandiri" alt="Bank Mandiri"
                        style="width: 30px; height: 30px; object-fit: cover; margin-right: 10px;">
                    <div>
                        <p class="payment-method-name">Bank Mandiri</p>
                    </div>
                </div>
                <input type="radio" name="payment-method" value="bank-mandiri-virtual">
            </div>
            <div class="payment-method-item">
                <div>
                    <img src="https://source.unsplash.com/random/30x30/?bri" alt="Bank Rakyat Indonesia"
                        style="width: 30px; height: 30px; object-fit: cover; margin-right: 10px;">
                    <div>
                        <p class="payment-method-name">Bank Rakyat Indonesia</p>
                    </div>
                </div>
                <input type="radio" name="payment-method" value="bri-virtual">
            </div>
            <div class="payment-method-item">
                <div>
                    <img src="https://source.unsplash.com/random/30x30/?bca" alt="Bank Central Asia"
                        style="width: 30px; height: 30px; object-fit: cover; margin-right: 10px;">
                    <div>
                        <p class="payment-method-name">Bank Central Asia</p>
                    </div>
                </div>
                <input type="radio" name="payment-method" value="bca-virtual">
            </div>
            <div class="payment-method-item">
                <div>
                    <img src="https://source.unsplash.com/random/30x30/?bni" alt="Bank Negara Indonesia"
                        style="width: 30px; height: 30px; object-fit: cover; margin-right: 10px;">
                    <div>
                        <p class="payment-method-name">Bank Negara Indonesia</p>
                    </div>
                </div>
                <input type="radio" name="payment-method" value="bni-virtual">
            </div>
        </div>

        <!-- Continue Button -->
        <button class="continue-btn">Lanjutkan</button>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>