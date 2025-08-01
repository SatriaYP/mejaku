<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Cafe - MejaKu</title>
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
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #8b1a1a;
        }

        .carousel-image {
            height: 250px;
            object-fit: cover;
            width: 100%;
        }
    </style>
</head>

<body class="font-sans leading-normal tracking-normal">

    <!-- Header -->
    <header class="bg-white p-4 flex justify-between items-center">
        <button id="menu-btn" class="text-gray-500 focus:outline-none md:hidden">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="flex space-x-4">
            <img src="assets/images/logo-mejaku.png" alt="MejaKu Logo" class="h-6">
            <span class="text-xl font-bold text-red-dark">MejaKu</span>
        </div>
        <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.817-4.818A6 6 0 012 8zm6.374.126A3.997 3.997 0 0112 10a4 4 0 01-1.172-.874Z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </header>

    <!-- Breadcrumb -->
    <nav class="bg-white p-4">
        <ol class="list-reset flex items-center">
            <li><a href="#" class="text-gray-600 hover:text-gray-800">/</a></li>
            <li class="mx-2">></li>
            <li><a href="#" class="text-gray-600 hover:text-gray-800">Cafe Lorem</a></li>
            <li class="mx-2">></li>
            <li><span class="text-gray-600">Reservasi</span></li>
        </ol>
    </nav>

    <!-- Carousel -->
    <section class="relative">
        <div class="carousel relative w-full">
            <div class="carousel-inner relative overflow-hidden w-full">
                <div class="carousel-item absolute inset-0 transition duration-500 transform translate-x-0">
                    <img src="assets/images/cafe-lorem.jpg" alt="Cafe Lorem" class="block w-full carousel-image">
                </div>
            </div>
            <button
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <button
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </section>

    <!-- Cafe Details -->
    <section class="py-10 px-4">
        <div class="max-w-md mx-auto">
            <h1 class="text-2xl font-bold">Cafe Lorem</h1>
            <p class="text-gray-600 mb-2">Jakarta <span class="text-yellow-500"><svg class="w-4 h-4 inline"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.069-3.292z">
                        </path>
                    </svg> 4.5</span></p>
            <p class="text-gray-600 mt-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            </p>
        </div>
    </section>

    <!-- Reservation Form -->
    <section class="py-10 px-4">
        <div class="max-w-md mx-auto">
            <h2 class="text-xl font-bold mb-4">Reservasi</h2>
            <form>
                <div class="flex space-x-4 mb-4">
                    <input type="date" value="2025-01-11" class="w-1/2 p-2 border rounded">
                    <div class="w-1/2 flex items-center">
                        <label for="guests" class="mr-2">Tamu</label>
                        <select id="guests" class="p-2 border rounded">
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <h3 class="text-lg font-bold mb-2">Pilih Jam</h3>
                <div class="flex flex-wrap space-x-2 space-y-2">
                    <button class="p-2 bg-gray-200 rounded">08:00</button>
                    <button class="p-2 bg-gray-200 rounded">09:00</button>
                    <button class="p-2 bg-red-dark text-white rounded">10:00</button>
                    <button class="p-2 bg-gray-200 rounded">11:00</button>
                    <button class="p-2 bg-gray-200 rounded">12:00</button>
                    <button class="p-2 bg-gray-200 rounded">13:00</button>
                    <button class="p-2 bg-gray-200 rounded">14:00</button>
                    <button class="p-2 bg-gray-200 rounded">15:00</button>
                </div>
                <h3 class="text-lg font-bold mb-2 mt-4">Area</h3>
                <div class="flex space-x-2">
                    <button class="p-2 bg-gray-200 rounded">Indoor</button>
                    <button class="p-2 bg-red-dark text-white rounded">Outdoor</button>
                    <button class="p-2 bg-gray-200 rounded">Semi Outdoor</button>
                </div>
                <button type="submit" class="btn-primary mt-4">Lanjut Reservasi</button>
            </form>
        </div>
    </section>

    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
        });
    </script>
</body>

</html>