<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Sidebar</title>
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

        .sidebar {
            background-color: white;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }

        .close-icon {
            font-size: 24px;
            color: #b71c1c;
            /* Dark red */
            cursor: pointer;
        }

        .menu-section {
            margin-bottom: 20px;
        }

        .menu-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .menu-icon {
            font-size: 20px;
            margin-right: 10px;
        }

        .menu-link {
            text-decoration: none;
            color: #b71c1c;
            /* Dark red */
            font-size: 16px;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Header -->
        <div class="header">
            <div class="logo">
                <img src="https://source.unsplash.com/random/40x40/?cafe" alt="Cafe Logo">
                <span>Cafe Lorem</span>
            </div>
            <span class="close-icon" onclick="closeSidebar()">&#10006;</span> <!-- Close icon -->
        </div>

        <!-- Menu Section -->
        <div class="menu-section">
            <h5 class="menu-title">Menu</h5>
            <a href="#" class="menu-item">
                <i class="bi bi-house-door-fill menu-icon"></i>
                <span class="menu-link">Dashboard</span>
            </a>
            <a href="#" class="menu-item">
                <i class="bi bi-calendar-check-fill menu-icon"></i>
                <span class="menu-link">Manajemen reservasi</span>
            </a>
            <a href="#" class="menu-item">
                <i class="bi bi-star-fill menu-icon"></i>
                <span class="menu-link">Kelola Menu</span>
            </a>
            <a href="#" class="menu-item">
                <i class="bi bi-bell-fill menu-icon"></i>
                <span class="menu-link">Kelola Pesanan</span>
            </a>
            <a href="#" class="menu-item">
                <i class="bi bi-heart-fill menu-icon"></i>
                <span class="menu-link">Kelola Promo</span>
            </a>
        </div>

        <!-- Account Section -->
        <div class="menu-section">
            <h5 class="menu-title">Account</h5>
            <a href="#" class="menu-item">
                <i class="bi bi-person-fill menu-icon"></i>
                <span class="menu-link">Tentang MejaKu</span>
            </a>
            <a href="#" class="menu-item">
                <i class="bi bi-gear-fill menu-icon"></i>
                <span class="menu-link">Pengaturan</span>
            </a>
            <a href="#" class="menu-item">
                <i class="bi bi-arrow-left-square-fill menu-icon"></i>
                <span class="menu-link">Logout</span>
            </a>
        </div>
    </div>

    <!-- JavaScript for closing the sidebar -->
    <script>
        function closeSidebar() {
            // Add logic to close the sidebar if needed
            console.log("Close sidebar");
        }
    </script>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>