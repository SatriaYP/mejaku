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

        .payment-method-section {
            margin-bottom: 20px;
        }

        .payment-method-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .payment-method-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .payment-method-item:last-child {
            border-bottom: none;
        }

        .bank-logo {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        .bank-name {
            font-weight: bold;
        }

        .account-number {
            font-size: 14px;
            color: #666;
        }

        .radio-button {
            margin-left: auto;
        }

        .continue-btn {
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
                            class="bi bi-arrow-left"></i> Pembayaran</a></li>
                <li class="breadcrumb-item active" aria-current="page">Metode Pembayaran</li>
            </ol>
        </nav>

        <!-- Payment Methods -->
        <!-- Internet Banking -->
        <div class="payment-method-section">
            <h3 class="payment-method-title">Internet Banking</h3>
            <div class="payment-method-item">
                <div>
                    <img src="https://source.unsplash.com/random/30x30/?mandiri" alt="Bank Mandiri" class="bank-logo">
                    <div>
                        <p class="bank-name">Bank Mandiri</p>
                        <p class="account-number">132 123 123 5678</p>
                    </div>
                </div>
                <div class="radio-button">
                    <input type="radio" name="payment-method" id="mandiri-radio">
                    <label for="mandiri-radio"></label>
                </div>
            </div>
            <div class="payment-method-item">
                <div>
                    <img src="https://source.unsplash.com/random/30x30/?bri" alt="Bank Rakyat Indonesia"
                        class="bank-logo">
                    <div>
                        <p class="bank-name">Bank Rakyat Indonesia</p>
                        <p class="account-number">001 1234 5678 9900</p>
                    </div>
                </div>
                <div class="radio-button">
                    <input type="radio" name="payment-method" id="bri-radio">
                    <label for="bri-radio"></label>
                </div>
            </div>
        </div>

        <!-- E-Wallet -->
        <div class="payment-method-section">
            <h3 class="payment-method-title">E-Wallet</h3>
            <div class="payment-method-item">
                <div>
                    <img src="https://source.unsplash.com/random/30x30/?seabank" alt="SeaBank" class="bank-logo">
                    <div>
                        <p class="bank-name">SeaBank</p>
                        <p class="account-number">+62 812-3456-7890</p>
                    </div>
                </div>
                <div class="radio-button">
                    <input type="radio" name="payment-method" id="seabank-radio">
                    <label for="seabank-radio"></label>
                </div>
            </div>
            <div class="payment-method-item">
                <div>
                    <img src="https://source.unsplash.com/random/30x30/?gopay" alt="GoPay" class="bank-logo">
                    <div>
                        <p class="bank-name">GoPay</p>
                        <p class="account-number">+62 812-3456-7890</p>
                    </div>
                </div>
                <div class="radio-button">
                    <input type="radio" name="payment-method" id="gopay-radio">
                    <label for="gopay-radio"></label>
                </div>
            </div>
        </div>

        <!-- Transfer Akun Virtual -->
        <div class="payment-method-section">
            <h3 class="payment-method-title">Transfer Akun Virtual</h3>
            <div class="payment-method-item">
                <div>
                    <img src="https://source.unsplash.com/random/30x30/?mandiri" alt="Bank Mandiri" class="bank-logo">
                    <div>
                        <p class="bank-name">Bank Mandiri</p>
                    </div>
                </div>
                <div class="radio-button">
                    <input type="radio" name="payment-method" id="virtual-mandiri-radio">
                    <label for="virtual-mandiri-radio"></label>
                </div>
            </div>
            <div class="payment-method-item">
                <div>
                    <img src="https://source.unsplash.com/random/30x30/?bri" alt="Bank Rakyat Indonesia"
                        class="bank-logo">
                    <div>
                        <p class="bank-name">Bank Rakyat Indonesia</p>
                    </div>
                </div>
                <div class="radio-button">
                    <input type="radio" name="payment-method" id="virtual-bri-radio">
                    <label for="virtual-bri-radio"></label>
                </div>
            </div>
            <div class="payment-method-item">
                <div>
                    <img src="https://source.unsplash.com/random/30x30/?bca" alt="Bank Central Asia" class="bank-logo">
                    <div>
                        <p class="bank-name">Bank Central Asia</p>
                    </div>
                </div>
                <div class="radio-button">
                    <input type="radio" name="payment-method" id="virtual-bca-radio">
                    <label for="virtual-bca-radio"></label>
                </div>
            </div>
        </div>

        <!-- Continue Button -->
        <button class="continue-btn">Lanjutkan</button>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>