<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Restoran</title>
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

        .nav-tabs {
            border-bottom: 2px solid #b71c1c;
            /* Dark red */
        }

        .nav-link {
            font-weight: bold;
            color: #333;
        }

        .nav-link.active {
            color: #b71c1c;
            /* Dark red */
        }

        .photo-section {
            text-align: center;
            margin-top: 20px;
        }

        .restaurant-image {
            width: 100%;
            height: auto;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .image-preview {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-right: 10px;
        }

        .add-image-btn {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .edit-icon {
            font-size: 20px;
            color: #b71c1c;
            /* Dark red */
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="menu-icon">
            <span>&#9776;</span> <!-- Hamburger menu icon -->
        </div>
        <div class="logo">Peraturan / Profil Restoran</div>
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
        <!-- Tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Tentang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Menu Unggulan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ulasan</a>
            </li>
        </ul>

        <!-- Photo Section -->
        <h5>Photo</h5>
        <p>Tambahkan foto interior restoran Anda.</p>
        <img src="https://source.unsplash.com/random/300x200/?cafe" alt="Restoran Interior" class="restaurant-image">

        <!-- Image Previews -->
        <div class="d-flex justify-content-center">
            <img src="https://source.unsplash.com/random/60x60/?cafe" alt="Image 1" class="image-preview">
            <img src="https://source.unsplash.com/random/60x60/?cafe" alt="Image 2" class="image-preview">
            <img src="https://source.unsplash.com/random/60x60/?cafe" alt="Image 3" class="image-preview">
            <button class="add-image-btn"><i class="bi bi-plus-lg"></i></button>
        </div>

        <!-- Nama Restoran -->
        <h5>Nama Restoran</h5>
        <div class="input-group">
            <input type="text" class="input-field" value="Cafe Lorem">
            <span class="input-group-text edit-icon"><i class="bi bi-pencil-fill"></i></span>
        </div>

        <!-- Jam Buka -->
        <h5>Jam Buka</h5>
        <div class="input-group">
            <input type="text" class="input-field" value="08:00 - 22:00">
            <span class="input-group-text edit-icon"><i class="bi bi-pencil-fill"></i></span>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>