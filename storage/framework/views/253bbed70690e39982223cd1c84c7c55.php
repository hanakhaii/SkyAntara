<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyAntara - Langit Nusantara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/welcome.css')); ?>">
    <style>
        .hero {
            background-image: url('<?php echo e(asset("img/airlineshorizontal.jpg")); ?>');
        }
    </style>
</head>
<body>
    <!-- Animated Clouds -->
    <div class="clouds">
        <div class="cloud"></div>
        <div class="cloud"></div>
        <div class="cloud"></div>
    </div>

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <i class="fas fa-plane"></i>
                    SkyAntara
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#destinasi">Destinasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang">Tentang</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="btn btn-register" href="<?php echo e(route('register')); ?>">Daftar</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="btn btn-login" href="<?php echo e(route('login')); ?>">Masuk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="hero" id="home">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h1>Jelajahi<br>Nusantara</h1>
                            <p class="subtitle">Terbang ke seluruh Indonesia dengan kenyamanan dan pelayanan terbaik</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features">
            <div class="container">
                <h2 class="section-title">Mengapa SkyAntara?</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="fas fa-shield-alt feature-icon"></i>
                            <h3>Aman & Terpercaya</h3>
                            <p>Keamanan dan kenyamanan penumpang adalah prioritas utama kami dengan sertifikasi internasional</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="fas fa-clock feature-icon"></i>
                            <h3>Tepat Waktu</h3>
                            <p>Kami berkomitmen untuk selalu tiba tepat waktu di setiap destinasi dengan on-time performance 95%</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="fas fa-tag feature-icon"></i>
                            <h3>Harga Terbaik</h3>
                            <p>Dapatkan harga spesial dan promo menarik setiap harinya untuk perjalanan Anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Destinations Section -->
        <section class="destinations" id="destinasi">
            <div class="container">
                <h2 class="section-title">Destinasi Populer</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="destination-card">
                            <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=800" alt="Bali" class="destination-img">
                            <div class="destination-overlay">
                                <h4>Bali</h4>
                                <p><i class="fas fa-plane-departure me-2"></i>Mulai dari Rp 750.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="destination-card">
                            <img src="https://images.unsplash.com/photo-1555400038-63f5ba517a47?w=800" alt="Jakarta" class="destination-img">
                            <div class="destination-overlay">
                                <h4>Jakarta</h4>
                                <p><i class="fas fa-plane-departure me-2"></i>Mulai dari Rp 650.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="destination-card">
                            <img src="https://images.unsplash.com/photo-1596422846543-75c6fc197f07?w=800" alt="Yogyakarta" class="destination-img">
                            <div class="destination-overlay">
                                <h4>Yogyakarta</h4>
                                <p><i class="fas fa-plane-departure me-2"></i>Mulai dari Rp 550.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-section">
                    <h5>
                        <i class="fas fa-plane me-2"></i>
                        SkyAntara
                    </h5>
                    <p style="color: rgba(255,255,255,0.7); line-height: 1.8;">
                        Maskapai kebanggaan Indonesia yang menghubungkan seluruh nusantara dengan pelayanan terbaik.
                    </p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-2 footer-section">
                    <h5>Perusahaan</h5>
                    <ul>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Berita</a></li>
                        <li><a href="#">Investor</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-section">
                    <h5>Layanan</h5>
                    <ul>
                        <li><a href="#">Booking Online</a></li>
                        <li><a href="#">Check-in</a></li>
                        <li><a href="#">Status Penerbangan</a></li>
                        <li><a href="#">Bagasi</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-section">
                    <h5>Hubungi Kami</h5>
                    <ul>
                        <li><i class="fas fa-phone me-2"></i> 0800-1-SKYANTARA</li>
                        <li><i class="fas fa-envelope me-2"></i> info@skyantara.id</li>
                        <li><i class="fas fa-map-marker-alt me-2"></i> Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 SkyAntara Airlines. All Rights Reserved. | Langit Nusantara</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\laragon\www\Skyantara\resources\views/welcome.blade.php ENDPATH**/ ?>