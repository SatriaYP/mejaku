<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Queue</title>
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

        .message {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .queue-card {
            background-color: #fffbe6;
            /* Light yellow background */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .queue-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .queue-number {
            font-size: 36px;
            font-weight: bold;
            color: #b71c1c;
            /* Dark red */
            margin-bottom: 10px;
        }

        .queue-estimate {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }

        .queue-time {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }

        .skip-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 14px;
            color: #666;
            text-decoration: none;
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
                            class="bi bi-arrow-left"></i> Smart Queue</a></li>
            </ol>
        </nav>

        <!-- Skip Button -->
        <a href="#" class="skip-btn">Lewati</a>

        <!-- Message -->
        <p class="message">
            Mohon maaf, saat ini semua meja sedang penuh. Kami akan memberi notifikasi saat meja tersedia. Terima kasih!
        </p>

        <!-- Queue Card -->
        <div class="queue-card">
            <p class="queue-title">Anda antrean ke-3</p>
            <p class="queue-number">K003</p>
            <p class="queue-estimate">Estimasi Waktu Tunggu</p>
            <p class="queue-time">30:02</p>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>