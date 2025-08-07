<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MejaKu Cafe Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: #fff;
            color: #222;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Navbar style */
        .navbar-custom {
            border-bottom: 1px solid #ddd;
            padding: 0.4rem 1rem;
            font-weight: 600;
            font-size: 1.125rem;
            color: #8b2525;
            user-select: none;
        }

        .navbar-custom .navbar-brand {
            font-weight: 700;
            color: #8b2525;
            font-size: 1.25rem;
        }

        .navbar-custom .navbar-toggler {
            border: none;
            font-size: 1.5rem;
            color: #251e3e;
            padding: 0.1rem 0.4rem;
            margin-right: 0.5rem;
        }

        .breadcrumb-custom {
            font-size: 0.875rem;
            border-bottom: 1px solid #ddd;
            background: transparent;
            margin-bottom: 0.75rem;
            padding: 0 1rem 0.5rem 1rem;
        }

        .breadcrumb-custom .breadcrumb-item a {
            color: #999;
            text-decoration: none;
            font-weight: 400;
        }

        .breadcrumb-custom .breadcrumb-item.active {
            color: #333;
            font-weight: 700;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(0.05) brightness(1.3) saturate(0.7);
            border: 1.5px solid #eee;
            border-radius: 50%;
            background-color: #8b2525;
            box-shadow: 0 2px 6px rgb(139 37 37 / 0.6);
        }

        .section-title {
            font-weight: 700;
            font-size: 1.25rem;
            margin-bottom: 0.4rem;
        }

        .location-text {
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 0.25rem;
        }

        .star-rating {
            color: #f2b01e;
            font-weight: 600;
            font-size: 0.9rem;
            vertical-align: middle;
        }

        .btn-reserve {
            background-color: #8b2525;
            border: none;
            color: #fff;
            font-weight: 600;
            padding: 0.42rem 1.2rem;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            user-select: none;
        }

        .btn-reserve:hover,
        .btn-reserve:focus {
            background-color: #71201d;
            outline: none;
            box-shadow: 0 0 8px #a3403e88;
        }

        .content-section {
            padding: 0 1rem;
        }

        .divider {
            border-top: 1px solid #ddd;
            margin: 1rem 0;
        }

        .menu-images img {
            border-radius: 8px;
            object-fit: cover;
            height: 110px;
            box-shadow: 0 3px 8px rgb(0 0 0 / 0.07);
            cursor: pointer;
            transition: transform 0.2s ease;
            border: 1.5px solid transparent;
        }

        .menu-images img:hover {
            transform: scale(1.07);
            border-color: #8b2525;
            box-shadow: 0 6px 12px rgb(139 37 37 / 0.35);
        }

        .reviews .review-item {
            display: flex;
            align-items: center;
            border-radius: 8px;
            background: #f2f2f2;
            padding: 0.5rem 1rem;
            margin-bottom: 0.7rem;
            user-select: none;
        }

        .reviews .review-item:last-child {
            margin-bottom: 0;
        }

        .review-avatar {
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 0.85rem;
            box-shadow: 0 2px 8px rgb(0 0 0 / 0.12);
            border: 2.5px solid #8b2525;
        }

        .review-text {
            flex: 1;
            font-size: 0.9rem;
            color: #333;
            font-weight: 600;
        }

        .review-sub {
            color: #555;
            font-weight: 400;
            font-size: 0.85rem;
            margin-left: 0.5rem;
            flex-grow: 1;
            font-style: italic;
        }

        .review-rating {
            color: #f2b01e;
            font-weight: 600;
            user-select: none;
            font-size: 0.9rem;
            margin-left: auto;
        }

        .text-muted-clickable {
            color: #999;
            font-size: 0.875rem;
            user-select: none;
            cursor: default;
            text-align: center;
            margin-top: 0.5rem;
            margin-bottom: 1.3rem;
        }

        .btn-reserve-place {
            width: 90%;
            max-width: 380px;
            margin: 0 auto 2rem auto;
            display: block;
            border-radius: 12px;
        }

        footer {
            margin-top: 2rem;
            border-top: 1px solid #ddd;
            padding: 2rem 1rem 3rem 1rem;
            text-align: center;
            font-size: 0.9rem;
            color: #666;
        }

        footer .footer-logo {
            font-weight: 700;
            font-size: 1.25rem;
            color: #8b2525;
            user-select: none;
            margin-bottom: 0.6rem;
        }

        footer a {
            color: #666;
            text-decoration: none;
        }

        footer a:hover,
        footer a:focus {
            text-decoration: underline;
            outline: none;
        }

        footer .footer-links {
            margin-bottom: 1rem;
        }

        footer .social-icons a {
            margin: 0 0.3rem;
            color: #555;
            font-size: 1.3rem;
            text-decoration: none;
            filter: grayscale(15%);
            transition: filter 0.25s ease;
        }

        footer .social-icons a:hover,
        footer .social-icons a:focus {
            filter: grayscale(0%);
            outline: none;
        }

        footer .bottom-links {
            margin-top: 1rem;
            font-size: 0.85rem;
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            color: #888;
            user-select: none;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-custom align-items-center">
        <button class="navbar-toggler" type="button" aria-label="Toggle menu">
            <span class="navbar-toggler-icon">☰</span>
        </button>
        <a class="navbar-brand ms-1" href="#">MejaKu</a>
        <div class="ms-auto me-2">
            <button type="button" class="btn btn-link p-0" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#251e3e" class="bi bi-search"
                    viewBox="0 0 16 16" aria-hidden="true">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85zm-5.493-2.9a5 5 0 1 1 0-7.07 5 5 0 0 1 0 7.07z" />
                </svg>
            </button>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="breadcrumb-custom">
        <ol class="breadcrumb m-0 p-0">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cafe Lorem</li>
        </ol>
        <button class="btn btn-link p-0 border-0" aria-label="More options"
            style="font-size:1.25rem; user-select:none;">⋮</button>
    </nav>

    <!-- Carousel -->
    <div id="cafeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7a1a1682-21a3-4163-8dbe-41334ef1f8f2.png"
                    class="d-block w-100"
                    alt="Cafe interior with red hanging lights and cozy seating area with wooden tables"
                    style="object-fit: cover; height: 280px;" />
            </div>
            <div class="carousel-item">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a8363a7f-e2f6-4a7b-9bd8-bd6eb8c3eb5e.png"
                    class="d-block w-100"
                    alt="Modern cafe window with visible outside signs, warm lighting reflected on glass"
                    style="object-fit: cover; height: 280px;" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#cafeCarousel" data-bs-slide="prev"
            aria-label="Previous slide">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#cafeCarousel" data-bs-slide="next"
            aria-label="Next slide">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <!-- Content Section -->
    <section class="content-section mt-3">
        <div class="d-flex justify-content-between align-items-start">
            <div>
                <h2 class="section-title mb-0">Cafe Lorem</h2>
                <div class="location-text d-flex align-items-center gap-2">
                    Jakarta
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#f2b01e"
                        class="bi bi-star-fill star-rating" viewBox="0 0 16 16" aria-hidden="true">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73-3.523-3.356c-.329-.315-.158-.888.283-.95l4.898-.696 2.084-4.17c.197-.394.73-.394.927 0l2.084 4.17 4.898.696c.441.062.612.635.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <span class="star-rating">4.5</span>
                </div>
            </div>
            <button class="btn btn-reserve align-self-center" type="button"
                aria-label="Reservasi Cafe Lorem">Reservasi</button>
        </div>
        <p class="mt-2 text-secondary" style="font-size: 0.9rem; line-height:1.5;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        </p>
        <div class="divider"></div>

        <!-- Menu -->
        <h3 class="section-title mb-3">Menu</h3>
        <div class="d-flex gap-3 menu-images mb-4">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2e4d5c5a-1901-4e21-b97a-517f9f8976a6.png"
                alt="Close-up image of a cafe menu showing food items and prices printed on cream paper, rustic style"
                onerror="this.style.display='none'" />
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e852649a-ae70-496c-b0d5-c8ecc5403284.png"
                alt="Detailed cafe menu page with food and beverage listings on a chalkboard style board with white text on dark background"
                onerror="this.style.display='none'" />
        </div>

        <!-- Review Section -->
        <h3 class="section-title mb-3">Review</h3>
        <div class="reviews">
            <div class="review-item">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2a4bcf1c-50c5-412d-bda4-451545f39526.png"
                    alt="Avatar of reviewer Budi smiling wearing glasses and light blue shirt, round crop"
                    class="review-avatar" />
                <div class="review-text">Budi</div>
                <div class="review-sub">Makanannya enak, harga oke</div>
                <div class="review-rating" aria-label="Rating 4.5 out of 5 stars">⭐ 4.5</div>
            </div>
            <div class="review-item">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ce7e5694-b48a-4513-800c-8c4d5b53f373.png"
                    alt="Avatar of reviewer Anton with short black hair and white shirt, round crop"
                    class="review-avatar" />
                <div class="review-text">Anton</div>
                <div class="review-sub">Tempat favorite di jakarta!!</div>
                <div class="review-rating" aria-label="Rating 4.8 out of 5 stars">⭐ 4.8</div>
            </div>
        </div>
        <div class="text-muted-clickable">Lihat semua ulasan</div>

        <button class="btn btn-reserve-place btn-reserve" aria-label="Reservasi Tempat">Reservasi Tempat</button>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-logo">MejaKu</div>
        <div class="footer-links fw-light mb-3">
            <div>Partner Resto & Cafe</div>
            <div><a href="#" tabindex="-1">Kontak</a></div>
            <div><a href="#" tabindex="-1">Tentang</a></div>
        </div>
        <div class="social-icons mb-3" role="list" aria-label="Social media links">
            <a href="#" aria-label="Facebook" role="listitem" tabindex="-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#555" viewBox="0 0 24 24"
                    aria-hidden="true">
                    <path
                        d="M22.675 0h-21.35C.597 0 .005.593.005 1.324v21.352C.005 23.406.597 24 1.324 24H12.82v-9.294H9.692v-3.622h3.127V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.243l-1.918.001c-1.504 0-1.794.715-1.794 1.764v2.315h3.588l-.467 3.622h-3.121V24h6.116c.728 0 1.318-.594 1.318-1.324V1.324C23.996.593 23.407 0 22.675 0z" />
                </svg>
            </a>
            <a href="#" aria-label="Instagram" role="listitem" tabindex="-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#555" viewBox="0 0 24 24"
                    aria-hidden="true">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.849.07 1.206.056 2.004.24 2.47.405a4.92 4.92 0 0 1 1.675 1.03 4.919 4.919 0 0 1 1.03 1.676c.165.467.35 1.267.406 2.472.06 1.267.07 1.647.07 4.85 0 3.204-.012 3.584-.07 4.85-.056 1.204-.24 2.003-.406 2.47a4.904 4.904 0 0 1-1.03 1.674 4.926 4.926 0 0 1-1.676 1.03c-.466.165-1.265.35-2.47.406-1.267.059-1.646.07-4.849.07-3.204 0-3.584-.011-4.85-.07-1.204-.056-2.002-.241-2.468-.406a5.012 5.012 0 0 1-2.706-2.706c-.165-.466-.35-1.265-.406-2.47C2.175 15.647 2.163 15.267 2.163 12c0-3.204.012-3.584.07-4.85.057-1.204.241-2.002.406-2.468a5.006 5.006 0 0 1 2.707-2.706c.466-.165 1.265-.35 2.47-.406C8.42 2.175 8.8 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.053.072 5.776.13 4.668.396 3.73.787a7.16 7.16 0 0 0-2.57 1.653 7.132 7.132 0 0 0-1.653 2.57c-.39.938-.657 2.046-.715 3.324C-.013 8.332 0 8.741 0 12c0 3.26-.013 3.669.072 4.947.058 1.278.324 2.386.715 3.323a7.112 7.112 0 0 0 1.653 2.57 7.16 7.16 0 0 0 2.57 1.653c.937.39 2.045.657 3.323.715 1.278.06 1.687.073 4.947.073s3.669-.013 4.947-.073c1.278-.058 2.386-.324 3.323-.715a7.13 7.13 0 0 0 2.57-1.653 7.13 7.13 0 0 0 1.653-2.57c.39-.937.657-2.045.715-3.323.06-1.278.073-1.687.073-4.947s-.013-3.669-.073-4.947c-.058-1.278-.324-2.386-.715-3.324a7.088 7.088 0 0 0-1.653-2.57 7.158 7.158 0 0 0-2.57-1.653c-.938-.39-2.046-.657-3.324-.715C15.668.013 15.259 0 12 0z" />
                    <path
                        d="M12 5.838a6.163 6.163 0 1 0 0 12.325 6.163 6.163 0 0 0 0-12.325zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998z" />
                    <circle cx="18.406" cy="5.594" r="1.44" />
                </svg>
            </a>
            <a href="#" aria-label="Twitter" role="listitem" tabindex="-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#555" viewBox="0 0 24 24"
                    aria-hidden="true">
                    <path
                        d="M23.954 4.569a9.864 9.864 0 0 1-2.825.775 4.938 4.938 0 0 0 2.163-2.724 10.141 10.141 0 0 1-3.127 1.184 4.916 4.916 0 0 0-8.378 4.482A13.937 13.937 0 0 1 1.671 3.149a4.822 4.822 0 0 0-.664 2.471c0 1.704.868 3.208 2.188 4.091a4.902 4.902 0 0 1-2.221-.616c-.053 1.99 1.388 3.866 3.444 4.277a4.904 4.904 0 0 1-2.212.085 4.92 4.92 0 0 0 4.59 3.417 9.866 9.866 0 0 1-6.102 2.104c-.398 0-.79-.023-1.175-.069a13.875 13.875 0 0 0 7.548 2.212c9.055 0 14.005-7.504 14.005-14.004 0-.213-.004-.425-.014-.637a10.012 10.012 0 0 0 2.457-2.548l-.047-.02z" />
                </svg>
            </a>
            <a href="#" aria-label="LinkedIn" role="listitem" tabindex="-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#555" viewBox="0 0 24 24"
                    aria-hidden="true">
                    <path
                        d="M20.452 20.452H16.9v-5.568c0-1.328-.023-3.036-1.848-3.036-1.847 0-2.13 1.445-2.13 2.94v5.664H9.345V9h3.415v1.561h.049c.476-.904 1.637-1.848 3.37-1.848 3.602 0 4.267 2.37 4.267 5.448v6.291zM5.337 7.433a1.98 1.98 0 1 1 .001-3.96 1.98 1.98 0 0 1-.001 3.96zM7.119 20.452H3.55V9h3.568v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.204 24 24 23.227 24 22.271V1.729C24 .774 23.204 0 22.225 0z" />
                </svg>
            </a>
        </div>

        <div class="bottom-links d-flex justify-content-center gap-5 mb-2" role="list" aria-label="Footer bottom links">
            <div role="listitem" tabindex="-1">Indonesia</div>
            <div role="listitem" tabindex="-1">Privacy</div>
            <div role="listitem" tabindex="-1">Legal</div>
        </div>
        <div aria-label="Copyright information" tabindex="-1">© 2025 MejaKu. All Rights Reserved.</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>