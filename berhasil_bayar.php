<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Berhasil</title>
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
            text-align: center;
        }

        .success-message {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .description {
            font-size: 14px;
            color: #666;
            margin-bottom: 30px;
        }

        .success-icon {
            width: 150px;
            height: 150px;
            background-color: #b71c1c;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .checkmark {
            width: 80px;
            height: 80px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .point-notification {
            background-color: #fffbe6;
            border: 1px solid #fdd835;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
            display: flex;
            align-items: center;
        }

        .point-icon {
            font-size: 20px;
            color: #fdd835;
            margin-right: 5px;
        }

        .button-container {
            margin-top: 30px;
        }

        .view-reservation-btn {
            background-color: #b71c1c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
            width: 100%;
        }

        .view-receipt-link {
            display: block;
            margin-top: 20px;
            color: #333;
            text-decoration: none;
            font-weight: bold;
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
        <!-- Success Message -->
        <h2 class="success-message">Reservasi Berhasil!</h2>
        <p class="description">Meja kamu sudah siap dipesan. Cek detail reservasi dan nikmati pengalaman makanmu.</p>

        <!-- Success Icon -->
        <div class="success-icon">
            <div class="checkmark">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="green"
                    class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
            </div>
        </div>

        <!-- Point Notification -->
        <div class="point-notification">
            <span class="point-icon">&#128190;</span> <!-- Gift icon -->
            <span>Kamu mendapatkan 100 poin! Gunakan untuk diskon atau promo menarik!</span>
        </div>

        <!-- Button Container -->
        <div class="button-container">
            <button class="view-reservation-btn">Lihat Reservasi Saya</button>
            <a href="#" class="view-receipt-link">Lihat Struk Pembayaran</a>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>