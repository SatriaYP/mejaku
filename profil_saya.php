<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
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

        .profile-section {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .profile-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .profile-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }

        .profile-name {
            font-size: 16px;
            font-weight: bold;
        }

        .profile-email {
            font-size: 14px;
            color: #666;
        }

        .edit-profile-btn {
            background-color: #b71c1c;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 50%;
            font-size: 14px;
        }

        .progress-bar {
            height: 5px;
            background-color: #ddd;
            border-radius: 5px;
            margin-top: 10px;
        }

        .progress-fill {
            height: 5px;
            background-color: #b71c1c;
            border-radius: 5px;
            width: 90%;
            /* Adjust based on progress percentage */
        }

        .profile-progress {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
        }

        .list-group {
            margin-top: 20px;
        }

        .list-group-item {
            border: none;
            padding: 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        .list-group-item:last-child {
            border-bottom: none;
        }

        .list-group-item-text {
            font-size: 14px;
            color: #666;
        }

        .settings-title {
            font-size: 14px;
            font-weight: bold;
            color: #b71c1c;
            margin-bottom: 10px;
        }

        .arrow-icon {
            font-size: 18px;
            color: #ccc;
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
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary"><i
                            class="bi bi-arrow-left"></i> Profil Saya</a></li>
            </ol>
        </nav>

        <!-- Profile Section -->
        <div class="profile-section">
            <!-- Profile Header -->
            <div class="profile-header">
                <div>
                    <img src="https://source.unsplash.com/random/50x50/?user" alt="Profile Picture"
                        class="profile-image">
                    <div>
                        <p class="profile-name">Budi Budiman</p>
                        <p class="profile-email">budibudiman@gmail.com</p>
                    </div>
                </div>
                <button class="edit-profile-btn"><i class="bi bi-pencil-square"></i></button>
            </div>

            <!-- Progress Bar -->
            <div class="progress-bar">
                <div class="progress-fill" style="width: 90%;"></div>
            </div>
            <p class="profile-progress">90%<br>9 / 10 profile data filled</p>

            <!-- Menu List -->
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="list-group-item-text">ProfIL</span>
                        <span class="arrow-icon">&#10148;</span> <!-- Right arrow icon -->
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="list-group-item-text">Riwayat Reservasi</span>
                        <span class="arrow-icon">&#10148;</span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="list-group-item-text">Poin Saya</span>
                        <span class="arrow-icon">&#10148;</span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="list-group-item-text">Metode Pembayaran</span>
                        <span class="arrow-icon">&#10148;</span>
                    </div>
                </li>
            </ul>

            <!-- Settings Section -->
            <h6 class="settings-title">Settings</h6>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="list-group-item-text">Bahasa</span>
                        <span class="arrow-icon">&#10148;</span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="list-group-item-text">Notifikasi</span>
                        <span class="arrow-icon">&#10148;</span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="list-group-item-text">Kebijakan Privasi</span>
                        <span class="arrow-icon">&#10148;</span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="list-group-item-text">Bantuan & Dukungan</span>
                        <span class="arrow-icon">&#10148;</span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="list-group-item-text">Tentang Website</span>
                        <span class="arrow-icon">&#10148;</span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="list-group-item-text">Log Out</span>
                        <span class="arrow-icon">&#10148;</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>