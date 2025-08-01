<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MejaKu - Reservasi Cepat</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        /* Custom styles */
        body {
            background-color: #f7f4ee;
        }
        .bg-red-dark {
            background-color: #a52a2a;
        }
        .text-red-dark {
            color: #a52a2a;
        }
        .btn-primary {
            background-color: #a52a2a;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #8b1a1a;
        }
    </style>
</head>
<body class="font-sans leading-normal tracking-normal">

    <!-- Header -->
    <header class="bg-white p-4 flex justify-between items-center">
        <button id="menu-btn" class="text-gray-500 focus:outline-none md:hidden">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="flex space-x-4">
            <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 3a1 1 0 011 1v1a1 1 0 11-2 0V4a1 1 0 011-1z"></path><path d="M2 11a1 1 0 011-1h16a1 1 0 110 2H3a1 1 0 01-1-1z"></path><path d="M7 14a1 1 0 112 0h6a1 1 0 110 2h-6a1 1 0 01-1-1z"></path></svg>
            </button>
            <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 3a1 1 0 011 1v1a1 1 0 11-2 0V4a1 1 0 011-1z"></path><path d="M2 11a1 1 0 011-1h16a1 1 0 110 2H3a1 1 0 01-1-1z"></path><path d="M7 14a1 1 0 112 0h6a1 1 0 110 2h-6a1 1 0 01-1-1z"></path></svg>
            </button>
            <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 3a1 1 0 011 1v1a1 1 0 11-2 0V4a1 1 0 011-1z"></path><path d="M2 11a1 1 0 011-1h16a1 1 0 110 2H3a1 1 0 01-1-1z"></path><path d="M7 14a1 1 0 112 0h6a1 1 0 110 2h-6a1 1 0 01-1-1z"></path></svg>
            </button>
        </div>
        <a href="#" class="text-gray-500 hover:text-gray-700 focus:outline-none">
            Log In
        </a>
    </header>

    <!-- Hero Section -->
    <section class="py-10 px-4">
        <div class="max-w-md mx-auto text-center">
            <h1 class="text-2xl font-bold">MejaKu</h1>
            <p class="text-lg mt-2">Reservasi Cepat, Makan nikmat!</p>
            <p class="text-gray-600 mt-2">Pesan tempat favoritmu tanpa antri, nikmati hidangan tanpa gangguan.</p>
            <button class="btn-primary mt-4">Reservasi Sekarang</button>
        </div>
        <img src="assets/images/reservasi-sign.jpg" alt="Reservasi Sign" class="mt-8 w-full max-w-sm mx-auto rounded-lg shadow-lg">
    </section>

    <!-- Search Section -->
    <section class="py-10 px-4">
        <h2 class="text-xl font-bold mb-4">Temukan Tempat Disini</h2>
        <form class="space-y-4">
            <input type="text" placeholder="Cari Resto / Cafe Disini" class="w-full p-2 border rounded">
            <input type="text" placeholder="Kota" class="w-full p-2 border rounded">
            <button type="submit" class="btn-primary w-full">Cari</button>
        </form>
    </section>

    <!-- Recommendations Section -->
    <section class="py-10 px-4">
        <h2 class="text-xl font-bold mb-4">Rekomendasi</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded shadow">
                <img src="assets/images/cafe-lorem.jpg" alt="Cafe Lorem" class="w-full h-48 object-cover rounded-t">
                <h3 class="text-lg font-bold mt-2">Cafe Lorem</h3>
                <p class="text-gray-600">Jakarta</p>
                <div class="flex items-center mt-2">
                    <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.069-3.292z"></path></svg>
                    <span class="ml-1">4.5</span>
                </div>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <img src="assets/images/cafe-brasserie.jpg" alt="Cafe Brasserie" class="w-full h-48 object-cover rounded-t">
                <h3 class="text-lg font-bold mt-2">Cafe Brasserie</h3>
                <p class="text-gray-600">Jakarta</p>
                <div class="flex items-center mt-2">
                    <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.069-3.292z"></path></svg>
                    <span class="ml-1">4.5</span>
                </div>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <img src="assets/images/sushi-house.jpg" alt="Sushi House" class="w-full h-48 object-cover rounded-t">
                <h3 class="text-lg font-bold mt-2">Sushi House</h3>
                <p class="text-gray-600">Bandung</p>
                <div class="flex items-center mt-2">
                    <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.069-3.292z"></path></svg>
                    <span class="ml-1">4.5</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Why MejaKu Section -->
    <section class="py-10 px-4 bg-red-dark text-white">
        <h2 class="text-xl font-bold mb-4">Kenapa harus MejaKu?</h2>
        <p class="mb-4">Reservasi lebih cepat, bebas antre, dan bisa pre-order. Plus, kumpulkan poin untuk reward spesial!</p>
    </section>

    <!-- Features Section -->
    <section class="py-10 px-4">
        <div data-aos="fade-up" class="bg-white p-4 rounded shadow mb-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold">Reservasi Cepat</h3>
                    <p class="text-gray-600">Pesan meja dengan mudah dan dapatkan antrian digital otomatis saat restoran penuh.</p>
                </div>
                <span class="text-5xl font-bold text-red-dark">1</span>
            </div>
        </div>
        <div data-aos="fade-up" class="bg-white p-4 rounded shadow mb-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold">Pre-Order & Cashless Payment</h3>
                    <p class="text-gray-600">Pesan makanan sebelum tiba dan bayar langsung lewat aplikasi. Hemat waktu, bebas ribet!</p>
                </div>
                <span class="text-5xl font-bold text-red-dark">2</span>
            </div>
        </div>
        <div data-aos="fade-up" class="bg-white p-4 rounded shadow">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold">Kumpulkan Poin & Dapatkan Reward</h3>
                    <p class="text-gray-600">Setiap reservasi mengumpulkan poin yang bisa ditukar dengan diskon atau promo eksklusif. Makin sering pesan, makin banyak keuntungan!</p>
                </div>
                <span class="text-5xl font-bold text-red-dark">3</span>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="py-10 px-4">
        <div class="flex justify-center space-x-4">
            <img src="assets/images/logo-kuliner.png" alt="Logo Kuliner" class="h-8">
            <img src="assets/images/logo-kuliner.png" alt="Logo Kuliner" class="h-8">
            <img src="assets/images/logo-kuliner.png" alt="Logo Kuliner" class="h-8">
            <img src="assets/images/logo-kuliner.png" alt="Logo Kuliner" class="h-8">
            <img src="assets/images/logo-kuliner.png" alt="Logo Kuliner" class="h-8">
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white py-10 px-4">
        <div class="max-w-md mx-auto">
            <h2 class="text-xl font-bold mb-4">MejaKu</h2>
            <p class="text-gray-600 mb-4">Partner Resto & Cafe</p>
            <nav class="space-y-2">
                <a href="#" class="text-gray-600 hover:text-gray-800">Kontak</a>
                <a href="#" class="text-gray-600 hover:text-gray-800">Tentang</a>
            </nav>
            <div class="flex justify-center space-x-4 mt-8">
                <a href="#"><img src="assets/images/facebook-icon.png" alt="Facebook" class="h-6"></a>
                <a href="#"><img src="assets/images/instagram-icon.png" alt="Instagram" class="h-6"></a>
                <a href="#"><img src="assets/images/twitter-icon.png" alt="Twitter" class="h-6"></a>
                <a href="#"><img src="assets/images/linkedin-icon.png" alt="LinkedIn" class="h-6"></a>
            </div>
            <hr class="my-4">
            <nav class="flex justify-center space-x-4">
                <a href="#" class="text-gray-600 hover:text-gray-800">Indonesia</a>
                <a href="#" class="text-gray-600 hover:text-gray-800">Privacy</a>
                <a href="#" class="text-gray-600 hover:text-gray-800">Legal</a>
            </nav>
            <p class="text-gray-600 mt-4 text-center">© 2025 MejaKu. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
        });
    </script>
</body>
</html>