<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Confirmation</title>
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

        .modal-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .logout-icon {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }

        .confirmation-message {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
        }

        .cancel-btn {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
            color: #666;
        }

        .save-btn {
            background-color: #b71c1c;
            /* Dark red */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <!-- Modal Container -->
    <div class="modal-container">
        <!-- Logout Icon -->
        <img src="https://source.unsplash.com/random/100x100/?logout" alt="Logout Icon" class="logout-icon">

        <!-- Confirmation Message -->
        <p class="confirmation-message">Apakah Anda yakin ingin keluar dari akun MejaKu Partner?</p>

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