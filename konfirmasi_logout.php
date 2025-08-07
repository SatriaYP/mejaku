<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Logout</title>
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

        .modal-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .logout-icon {
            width: 100px;
            height: 100px;
            background-color: #b71c1c;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .logout-svg {
            width: 80px;
            height: 80px;
            fill: white;
        }

        .confirmation-message {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
        }

        .cancel-btn {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .confirm-btn {
            background-color: #b71c1c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <!-- Modal Container -->
    <div class="modal-container">
        <!-- Modal Title -->
        <h2 class="modal-title">Konfirmasi Logout</h2>

        <!-- Logout Icon -->
        <div class="logout-icon">
            <svg class="logout-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff">
                <path d="M14 17v2H7v-2h7zm1-16C8.9 1 4 5.9 4 12s4.9 11 11 11 11-4.9 11-11S19.1 1 12 1z" />
                <path
                    d="M12 22c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm0-14c-2.2 0-4 1.8-4 4s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4z" />
                <path d="M16 12l-4-4-4 4h8z" />
            </svg>
        </div>

        <!-- Confirmation Message -->
        <p class="confirmation-message">Apakah Anda yakin ingin keluar dari akun MejaKu Partner?</p>

        <!-- Button Group -->
        <div class="button-group">
            <button class="cancel-btn">Batal</button>
            <button class="confirm-btn">Simpan</button>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>