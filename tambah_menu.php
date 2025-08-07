<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu</title>
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

        .photo-section {
            background-color: #f9f9f9;
            border: 1px dashed #ddd;
            text-align: center;
            padding: 50px 20px;
            cursor: pointer;
        }

        .camera-icon {
            font-size: 60px;
            color: #b71c1c;
            /* Dark red */
        }

        .placeholder-text {
            font-size: 14px;
            color: #666;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .category-select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .name-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .price-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
        }

        .cancel-btn {
            background-color: #f9f9f9;
            border: 1px solid #b71c1c;
            /* Dark red */
            color: #b71c1c;
            /* Dark red */
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }

        .save-btn {
            background-color: #b71c1c;
            /* Dark red */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
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
        <div class="logo">Kelola Menu / Tambah Menu</div>
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
        <!-- Photo Section -->
        <h5>Photo</h5>
        <p class="placeholder-text">Tambahkan foto menu Anda.</p>
        <div class="photo-section">
            <i class="camera-icon bi bi-camera"></i>
        </div>

        <!-- Form Fields -->
        <div class="form-group">
            <label for="category">Kategori</label>
            <select id="category" class="category-select">
                <option>Pilih kategori menu Anda</option>
                <!-- Add more options as needed -->
            </select>
        </div>

        <div class="form-group">
            <label for="name">Nama Menu</label>
            <input type="text" id="name" class="name-input" placeholder="Tulis nama menu restoran Anda..." />
        </div>

        <div class="form-group">
            <label for="price">Harga</label>
            <input type="text" id="price" class="price-input" placeholder="Rp 20.000" />
        </div>

        <!-- Action Buttons -->
        <div class="action-buttons">
            <button class="cancel-btn">Batal</button>
            <button class="save-btn">Simpan</button>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>