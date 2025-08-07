<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Menu</title>
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

        .search-bar {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            display: flex;
            align-items: center;
        }

        .search-input {
            border: none;
            outline: none;
            flex: 1;
        }

        .category-btn {
            background-color: #b71c1c;
            /* Dark red */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .add-btn {
            background-color: #fffbe6;
            /* Light yellow */
            border: 1px solid #ddd;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .menu-item {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .menu-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 10px;
        }

        .menu-details {
            flex: 1;
        }

        .menu-name {
            font-size: 16px;
            font-weight: bold;
        }

        .menu-price {
            font-size: 14px;
            color: #666;
        }

        .edit-icon {
            background-color: #b71c1c;
            /* Dark red */
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            cursor: pointer;
        }

        .add-menu-btn {
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
        <div class="logo">Kelola Menu</div>
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
        <!-- Search Bar -->
        <div class="search-bar">
            <i class="bi bi-search"></i>
            <input type="text" class="search-input" placeholder="Cari Disini">
        </div>

        <!-- Category Buttons -->
        <div class="d-flex mt-3">
            <button class="category-btn">Makanan</button>
            <button class="category-btn">Minuman</button>
            <button class="add-btn"><i class="bi bi-plus-lg"></i></button>
        </div>

        <!-- Menu Items -->
        <div class="menu-item">
            <img src="https://source.unsplash.com/random/100x100/?pizza" alt="Pizza" class="menu-image">
            <div class="menu-details">
                <p class="menu-name">Pizza</p>
                <p class="menu-price">Rp 25.000</p>
            </div>
            <button class="edit-icon"><i class="bi bi-pencil-square"></i></button>
        </div>
        <div class="menu-item">
            <img src="https://source.unsplash.com/random/100x100/?tahu" alt="Tahu" class="menu-image">
            <div class="menu-details">
                <p class="menu-name">Tahu</p>
                <p class="menu-price">Rp 25.000</p>
            </div>
            <button class="edit-icon"><i class="bi bi-pencil-square"></i></button>
        </div>
        <div class="menu-item">
            <img src="https://source.unsplash.com/random/100x100/?pizza" alt="Pizza" class="menu-image">
            <div class="menu-details">
                <p class="menu-name">Pizza</p>
                <p class="menu-price">Rp 25.000</p>
            </div>
            <button class="edit-icon"><i class="bi bi-pencil-square"></i></button>
        </div>

        <!-- Add Menu Button -->
        <button class="add-menu-btn">Tambah Menu</button>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>