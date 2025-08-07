<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi Berhasil</title>
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

        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .success-message {
            font-size: 24px;
            font-weight: bold;
            color: #b71c1c;
            /* Dark red */
            margin-bottom: 20px;
        }

        .menu-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin: 0 auto;
        }

        .confirmation-text {
            font-size: 16px;
            color: #666;
            margin-top: 20px;
        }

        .ok-btn {
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
    <!-- Container -->
    <div class="container">
        <!-- Success Message -->
        <p class="success-message">Berhasil!</p>

        <!-- Menu Image -->
        <img src="https://source.unsplash.com/random/150x150/?menu" alt="Menu" class="menu-image">

        <!-- Confirmation Text -->
        <p class="confirmation-text">Menu 'Nasi Goreng Spesial' telah berhasil ditambahkan.</p>

        <!-- OK Button -->
        <button class="ok-btn">Ok</button>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>