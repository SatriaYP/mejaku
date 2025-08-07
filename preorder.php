<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Order</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom styles */
        body {
            font-family: 'Arial', sans-serif;
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

        .item-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 10px;
        }

        .item-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }

        .item-details {
            margin-left: 15px;
        }

        .price {
            color: #333;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            margin-left: auto;
        }

        .quantity-btn {
            background-color: #f0f0f0;
            border: none;
            padding: 5px 10px;
            border-radius: 50%;
            cursor: pointer;
        }

        .total-section {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total-label {
            font-weight: bold;
        }

        .total-price {
            color: #333;
        }

        .order-btn {
            background-color: #b71c1c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
            margin-top: 20px;
            width: 100%;
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
        <!-- Pre-Order Section -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="#" class="text-decoration-none text-secondary"><i class="bi bi-arrow-left"></i> Pre-Order</a>
            <a href="#" class="text-decoration-none text-secondary">Lewati</a>
        </div>

        <!-- Item 1 -->
        <div class="item-container">
            <img src="https://source.unsplash.com/random/100x100/?food" alt="Tahu Cabe Garam" class="item-image">
            <div class="item-details">
                <p>Tahu cabe garam</p>
                <p class="price">Rp.24.000</p>
            </div>
            <div class="quantity-controls">
                <button class="quantity-btn">-</button>
                <span class="quantity-text">1</span>
                <button class="quantity-btn">+</button>
            </div>
        </div>

        <!-- Item 2 -->
        <div class="item-container">
            <img src="https://source.unsplash.com/random/100x100/?coffee" alt="Es Kopi Susu" class="item-image">
            <div class="item-details">
                <p>Es Kopi Susu</p>
                <p class="price">Rp.28.000</p>
            </div>
            <div class="quantity-controls">
                <button class="quantity-btn">-</button>
                <span class="quantity-text">1</span>
                <button class="quantity-btn">+</button>
            </div>
        </div>

        <!-- Total Section -->
        <div class="total-section">
            <p class="total-label">Total Harga</p>
            <p class="total-price">Rp 50.000</p>
        </div>

        <!-- Order Button -->
        <button class="order-btn">Pesan</button>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>