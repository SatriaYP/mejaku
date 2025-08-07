<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrasi Pre-Order</title>
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

        .toggle-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .toggle-label {
            font-size: 16px;
            font-weight: bold;
        }

        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 40px;
            height: 20px;
            margin-left: 10px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .toggle-switch .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ddd;
            transition: 0.4s;
            border-radius: 20px;
        }

        .toggle-switch .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            transition: 0.4s;
            border-radius: 50%;
        }

        .toggle-switch input:checked+.slider {
            background-color: #b71c1c;
            /* Dark red */
        }

        .toggle-switch input:focus+.slider {
            box-shadow: 0 0 1px #b71c1c;
        }

        .toggle-switch input:checked+.slider:before {
            transform: translateX(20px);
        }

        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .button-group button {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
            color: #666;
        }

        .button-group button.active {
            background-color: #ffc107;
            /* Yellow */
            border-color: #ffc107;
            color: white;
        }

        .time-setting {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .time-setting select {
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="menu-icon">
            <span>&#9776;</span> <!-- Hamburger menu icon -->
        </div>
        <div class="logo">Integrasi Pre-Order</div>
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
        <!-- Toggle Switch -->
        <div class="toggle-container">
            <p class="toggle-label">Aktifkan Pre-Order</p>
            <label class="toggle-switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>

        <!-- Button Group -->
        <div class="button-group">
            <button class="active">Semua Menu</button>
            <button>Menu Tertentu</button>
        </div>

        <!-- Time Setting -->
        <h5 class="mt-4">Atur Waktu Pre-Order</h5>
        <div class="time-setting">
            <div>
                <select>
                    <option>Setiap Hari</option>
                    <option>Hari Kerja</option>
                    <option>Minggu Ini</option>
                </select>
            </div>
            <div>
                <select>
                    <option>08:00 - 20:00</option>
                    <option>09:00 - 18:00</option>
                    <option>10:00 - 17:00</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>