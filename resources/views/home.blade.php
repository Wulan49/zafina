<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZFN Sport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #007bff 50%, #f8f9fa 50%);
            margin: 0;
            padding: 0;
        }

        /* Navbar Styling */
        .navbar {
            background-color: transparent;
            padding: 20px 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .navbar a {
            color: white;
            font-weight: 500;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 2.5rem;
            color: #fff;
            letter-spacing: 3px;
        }
        .navbar-nav .nav-link {
            font-size: 1.1rem;
            margin-right: 20px;
        }

        /* Right icons */
        .search-icons {
            display: flex;
            align-items: center;
            margin-left: auto; /* Memindahkan ke kanan */
        }
        .search-icons img {
            width: 30px; /* Mengatur ukuran ikon */
            margin-left: 15px; /* Jarak antar ikon */
        }

        /* Hero Section */
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 60px;
            background-color: #007bff;
            color: white;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            position: relative;
            overflow: hidden;
        }
        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3));
            z-index: 1;
        }
        .hero img {
            width: 20%; /* Mengatur ukuran gambar lebih kecil */
            position: relative;
            z-index: 2;
            margin-right: 20px; /* Jarak antara gambar dan teks */
        }
        .hero-text {
            text-align: left;
            max-width: 60%;
            position: relative;
            z-index: 2;
        }
        .hero h1 {
            font-size: 48px;
            font-weight: bold;
        }
        .hero p {
            font-size: 20px;
        }
        .btn-shop {
            margin-top: 20px;
            font-size: 18px;
            padding: 10px 30px;
            background-color: white;
            color: #007bff;
            border-radius: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Black Box */
        .black-box {
            background-color: black;
            width: 100%;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            margin-top: 30px;
        }
        .black-box h2 {
            font-size: 28px;
            font-weight: 700;
        }

        /* Carousel Styling */
        .carousel-inner img {
            max-width: 80%;
            margin: 0 auto;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: black;
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }

        /* Features Section */
        .features-section {
            background-color: #f8f9fa;
            padding: 50px 0;
        }
        .features-section .feature-item {
            text-align: center;
            padding: 20px;
        }
        .features-section .feature-item h3 {
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .features-section .feature-item p {
            font-size: 18px;
            color: #666;
        }

        /* Footer */
        .footer {
            background-color: #333;
            color: white;
            padding: 40px 0;
            text-align: center;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ZFN Sport</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/shop">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sale">Sale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/confirm">Confirm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
                <div class="search-icons">
                    <!-- Search Form -->
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <!-- Keranjang dan Akun di sebelah Search -->
                    <a href="/store">
                        <img src="{{ asset('images/keranjang.png') }}" alt="Keranjang"> <!-- Gambar Keranjang -->
                    </a>
                    <a href="/akun">
                        <img src="{{ asset('images/user.png') }}" alt="Akun"> <!-- Gambar Akun -->
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <img src="images/olahraga.png" alt="olahraga">
        <div class="hero-text">
            <h1>Welcome to ZFN Sport</h1>
            <p>Your ultimate destination for sports gear and apparel. Elevate your performance with the best products!</p>
            <a href="/shop" class="btn btn-shop">Shop Now</a>
        </div>
    </div>

    <!-- Black Box -->
    <div class="black-box">
        <h2>Check Out Our Latest Products!</h2>
    </div>

    <!-- Carousel Section -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/foto1.jpg" class="d-block w-100" alt="foto1">
            </div>
            <div class="carousel-item">
                <img src="images/foto2.jpg" class="d-block w-100" alt="foto2">
            </div>
            <div class="carousel-item">
                <img src="images/foto3.jpg" class="d-block w-100" alt="foto3">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Features Section -->
    <div class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 feature-item">
                    <h3>Quality Products</h3>
                    <p>Our sports gear is made from the highest quality materials.</p>
                </div>
                <div class="col-md-4 feature-item">
                    <h3>Affordable Prices</h3>
                    <p>We offer the best prices without compromising quality.</p>
                </div>
                <div class="col-md-4 feature-item">
                    <h3>Fast Shipping</h3>
                    <p>Get your orders delivered quickly and efficiently.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 ZFN Sport. All Rights Reserved.</p>
            <p>Designed by Your Name</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
