<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyAntara - Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>
    <!-- Animated Background -->
    <div class="clouds">
        <div class="cloud"></div>
        <div class="cloud"></div>
        <div class="cloud"></div>
        <i class="fas fa-plane plane-icon"></i>
        <i class="fas fa-plane plane-icon"></i>
    </div>

    <!-- Login Container -->
    <div class="login-container">
        <!-- Left Side -->
        <div class="login-left">
            <div class="brand-logo">
                <i class="fas fa-plane"></i>
            </div>
            <h1 class="brand-name">SkyAntara</h1>
            <p class="brand-tagline">Langit Nusantara</p>
            
            <ul class="features-list">
                <li>
                    <i class="fas fa-check-circle"></i>
                    <span>Reservasi tiket cepat & mudah</span>
                </li>
                <li>
                    <i class="fas fa-check-circle"></i>
                    <span>Harga terbaik se-Indonesia</span>
                </li>
                <li>
                    <i class="fas fa-check-circle"></i>
                    <span>Layanan pelanggan 24/7</span>
                </li>
                <li>
                    <i class="fas fa-check-circle"></i>
                    <span>Program loyalitas eksklusif</span>
                </li>
            </ul>
        </div>

        <!-- Right Side - Form -->
        <div class="login-right">
            <div class="login-header">
                <h2>Selamat Datang! 👋</h2>
                <p>Masuk ke akun Anda untuk melanjutkan</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <!-- Email -->
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <div class="input-icon">
                        <input type="email" name="email" class="form-control" placeholder="nama@email.com" required autofocus>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <!-- Error (Laravel) -->
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="input-icon">
                        <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                        <i class="fas fa-lock"></i>
                    </div>
                    <!-- Error (Laravel) -->
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember & Forgot -->
                <div class="remember-forgot">
                    <div class="remember-me">
                        <input type="checkbox" id="remember_me" name="remember">
                        <label for="remember_me">Ingat saya</label>
                    </div>
                    <a href="{{ route('password.request') }}" class="forgot-link">Lupa password?</a>
                </div>

                <!-- Login Button -->
                <button type="submit" class="btn-login">
                    <i class="fas fa-sign-in-alt me-2"></i>
                    Masuk
                </button>
            </form>

            <!-- Register Link -->
            <div class="register-link">
                Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>