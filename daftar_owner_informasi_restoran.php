<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selesaikan Pendaftaran</title>
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

        .content {
            padding: 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }

        .step-progress {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .step-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ddd;
            color: #333;
            font-weight: bold;
            margin-right: 10px;
        }

        .step-circle.active {
            background-color: #b71c1c;
            /* Dark red */
            color: white;
        }

        .step-label {
            font-size: 12px;
            color: #b71c1c;
            /* Dark red */
            margin-left: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .next-btn {
            background-color: #b71c1c;
            /* Dark red */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
            width: 100%;
            margin-top: 20px;
        }

        .restaurant-icon {
            width: 100px;
            height: 100px;
            background-color: #e0e0e0;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
        }

        .edit-icon {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: #b71c1c;
            /* Dark red */
            color: white;
            border-radius: 50%;
            padding: 5px;
            font-size: 12px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Content -->
    <div class="content">
        <!-- Logo and Title -->
        <h1 class="logo">MejaKu Partner</h1>
        <h2>Selesaikan Pendaftaran Anda</h2>
        <p class="subtitle">Jangkau lebih banyak pelanggan dan kelola reservasi dengan mudah.</p>

        <!-- Step Progress -->
        <div class="step-progress">
            <div class="step-circle active">1</div>
            <span class="step-label">Informasi Restoran</span>
            <div class="step-circle">2</div>
            <span class="step-label">Kemitraan</span>
            <div class="step-circle">3</div>
            <span class="step-label">Pembayaran Mitra</span>
        </div>

        <!-- Restaurant Icon -->
        <div class="restaurant-icon">
            <i class="bi bi-house-fill" style="font-size: 40px;"></i>
            <span class="edit-icon"><i class="bi bi-pencil-fill"></i></span>
        </div>

        <!-- Form Fields -->
        <form>
            <div class="form-group">
                <label for="restaurantName">Nama Restoran</label>
                <input type="text" id="restaurantName" class="input-field" placeholder="Masukkan nama restoran">
            </div>
            <div class="form-group">
                <label for="restaurantAddress">Alamat Lengkap Restoran</label>
                <input type="text" id="restaurantAddress" class="input-field"
                    placeholder="Masukkan alamat lengkap restoran">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea id="description" class="input-field" rows="3"
                    placeholder="Masukkan deskripsi restoran"></textarea>
            </div>
            <button type="submit" class="next-btn">Lanjut</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>