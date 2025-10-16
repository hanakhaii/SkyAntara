<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyAntara - Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
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

    <!-- Register Container -->
    <div class="register-container">
        <!-- Left Side - Form -->
        <div class="register-left">
            <div class="register-header">
                <div class="brand-small">
                    <i class="fas fa-plane"></i>
                    <span>SkyAntara</span>
                </div>
                <h2>Daftar Sekarang</h2>
                <p>Buat akun dan nikmati kemudahan booking tiket pesawat</p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="form-group">
                    <label class="form-label">Nama Lengkap</label>
                    <div class="input-icon">
                        <input type="text" name="name" class="form-control" placeholder="Masukkan nama lengkap" required autofocus>
                        <i class="fas fa-user"></i>
                    </div>
                    <!-- Error (Laravel) -->
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <div class="input-icon">
                        <input type="email" name="email" class="form-control" placeholder="nama@email.com" required>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <!-- Error (Laravel) -->
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password Row -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <div class="input-icon">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Min. 8 karakter" required>
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="password-strength">
                            <div class="password-strength-bar" id="strengthBar"></div>
                        </div>
                        <!-- Error (Laravel) -->
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="form-group">
                        <label class="form-label">Konfirmasi Password</label>
                        <div class="input-icon">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi password" required>
                            <i class="fas fa-lock"></i>
                        </div>
                        <!-- Error (Laravel) -->
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

                <!-- Terms & Conditions -->
                <div class="terms-checkbox">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">
                        Saya setuju dengan <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan Privasi</a> SkyAntara
                    </label>
                </div>

                <!-- Register Button -->
                <button type="submit" class="btn-register">
                    <i class="fas fa-user-plus me-2"></i>
                    Daftar Sekarang
                </button>
            </form>
            <!-- Login Link -->
            <div class="login-link">
                Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a>
            </div>
        </div>

        <!-- Right Side - Illustration -->
        <div class="register-right">
            <div class="illustration">
                <i class="fas fa-plane-departure"></i>
            </div>
            <div class="promo-text">
                <h2>Bergabunglah dengan SkyAntara</h2>
                <p>Dapatkan akses ke ratusan destinasi di seluruh Indonesia dengan harga spesial dan promo eksklusif</p>
                <div class="promo-badge">
                    <i class="fas fa-gift me-2"></i>
                    Diskon 50% untuk penerbangan pertama!
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Password Strength Indicator
        const passwordInput = document.getElementById('password');
        const strengthBar = document.getElementById('strengthBar');

        if (passwordInput && strengthBar) {
            passwordInput.addEventListener('input', function() {
                const password = this.value;
                let strength = 0;

                if (password.length >= 8) strength++;
                if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
                if (password.match(/[0-9]/)) strength++;
                if (password.match(/[^a-zA-Z0-9]/)) strength++;

                strengthBar.className = 'password-strength-bar';
                
                if (strength <= 1) {
                    strengthBar.classList.add('weak');
                } else if (strength <= 3) {
                    strengthBar.classList.add('medium');
                } else {
                    strengthBar.classList.add('strong');
                }
            });
        }
    </script>
</body>
</html>