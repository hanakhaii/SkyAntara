<?php if (isset($component)) { $__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e = $attributes; } ?>
<?php $component = App\View\Components\Nav::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Nav::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Cari Penerbangan']); ?>
    <?php $__env->startSection('form-title', 'Cari Penerbangan - SkyAntara'); ?>

    <main>
        <!-- Hero Section -->
        <div class="hero-section">
            <div class="hero-content">
                <h1>Temukan Penerbangan Murah!</h1>
                <p>Jelajahi destinasi impian Anda dengan harga terbaik</p>
            </div>
        </div>

        <!-- Search Container -->
        <div class="search-container">
            <div class="search-card">
                <form action="<?php echo e(route('search.results')); ?>" method="GET">
                    <div class="search-form">
                        <!-- From -->
                        <div class="form-group" style="position: relative;">
                            <label>Dari</label>
                            <i class="fas fa-plane-departure input-icon"></i>
                            <select name="origin" class="form-control">
                                <option value=""></option>
                                <?php $__currentLoopData = $routes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($route->origin); ?>"><?php echo e($route->origin); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <button type="button" class="swap-button">
                                <i class="fas fa-exchange-alt"></i>
                            </button>
                        </div>

                        <!-- To -->
                        <div class="form-group">
                            <label>Ke</label>
                            <i class="fas fa-plane-arrival input-icon"></i>
                            <select name="destination" class="form-control">
                                <option value=""></option>
                                <?php $__currentLoopData = $routes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($route->destination); ?>"><?php echo e($route->destination); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <!-- Search Button -->
                    <button type="submit" class="btn-search">
                        <i class="fas fa-search me-2"></i>
                        Cari Penerbangan
                    </button>
                </form>

            </div>
        </div>

        <!-- Features Section -->
        <div class="features-section">
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h4>Harga Terbaik</h4>
                    <p>Bandingkan harga dari berbagai maskapai dan dapatkan penawaran terbaik</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>Pembayaran Aman</h4>
                    <p>Transaksi dilindungi dengan enkripsi standar internasional</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h4>Dukungan 24/7</h4>
                    <p>Tim customer service kami siap membantu Anda kapan saja</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h4>Promo Eksklusif</h4>
                    <p>Dapatkan diskon dan penawaran spesial untuk pengguna setia</p>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="stats-section">
            <div class="stats-container">
                <div class="stat-item">
                    <h3>50M+</h3>
                    <p>Total Penumpang</p>
                </div>
                <div class="stat-item">
                    <h3>150+</h3>
                    <p>Destinasi</p>
                </div>
                <div class="stat-item">
                    <h3>1M+</h3>
                    <p>Pengguna Aktif</p>
                </div>
                <div class="stat-item">
                    <h3>24/7</h3>
                    <p>Layanan Pelanggan</p>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Trip type tabs functionality
        const tripTabs = document.querySelectorAll('.trip-tab');
        const returnDateField = document.getElementById('returnDateField');

        tripTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                tripTabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                const tripType = this.getAttribute('data-trip');

                // Show/hide return date based on trip type
                if (tripType === 'oneway') {
                    returnDateField.style.display = 'none';
                } else if (tripType === 'roundtrip') {
                    returnDateField.style.display = 'block';
                }
            });
        });

        // Swap button functionality
        const swapButton = document.querySelector('.swap-button');
        swapButton.addEventListener('click', function() {
            const fromSelect = document.querySelector('.search-form .form-group:first-child select');
            const toSelect = document.querySelector('.search-form .form-group:nth-child(2) select');

            const temp = fromSelect.value;
            fromSelect.value = toSelect.value;
            toSelect.value = temp;
        });

        // Form submission
        // document.querySelector('form').addEventListener('submit', function(e) {
        //     e.preventDefault();
        //     alert('Mencari penerbangan... Fitur ini akan menampilkan hasil pencarian!');
        // });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e)): ?>
<?php $attributes = $__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e; ?>
<?php unset($__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e)): ?>
<?php $component = $__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e; ?>
<?php unset($__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\Skyantara\resources\views/search.blade.php ENDPATH**/ ?>