<?php if (isset($component)) { $__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e = $attributes; } ?>
<?php $component = App\View\Components\Nav::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Nav::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Dashboard SkyAntara']); ?>
    <!-- Main Dashboard -->
    <main class="dashboard-container">
        <!-- Welcome Section -->
        <div class="welcome-section">
            <div class="welcome-content">
                <h1>Selamat Datang, <?php echo e(Auth::user()->name); ?>! 👋</h1>
                <p>Siap untuk petualangan berikutnya? Mari jelajahi destinasi impian Anda</p>
            </div>
        </div>

        <!-- Reminder for Complete Profile -->
        <?php if($isProfileIncomplete): ?>
            <div class="notification-container">
            <div class="profile-notification pulse">
                <div class="notification-header">
                    <div class="notification-icon">!</div>
                    <h3 class="notification-title">Lengkapi Profil Anda!</h3>
                </div>
                <p class="notification-content">
                    Beberapa informasi penting masih kosong. Profil yang lengkap akan membantu kami memberikan pengalaman yang lebih personal.
                </p>
                <div class="progress-container">
                    <div class="progress-label">Kelengkapan Profil: 40%</div>
                    <div class="progress-bar">
                        <div class="progress-fill"></div>
                    </div>
                </div>
                <a href="<?php echo e(route('profile.index')); ?>" class="notification-link">
                    <i>✏️</i> Klik di sini untuk melengkapi
                </a>
            </div>
        </div>
        <?php endif; ?>

        <!-- Quick Actions -->
        <div class="quick-actions">
            <div class="action-card blue">
                <div class="action-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h4><a href="<?php echo e(route('search')); ?>">Cari Penerbangan</a></h4>
            </div>
            <div class="action-card brown">
                <div class="action-icon">
                    <i class="fas fa-ticket-alt"></i>
                </div>
                <h4><a href="<?php echo e(route('bookings')); ?>">Pemesanan Saya</a></h4>
            </div>
            <div class="action-card green">
                <div class="action-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h4><a href="">Check-in Online</a></h4>
            </div>
            <div class="action-card purple">
                <div class="action-icon">
                    <i class="fas fa-suitcase"></i>
                </div>
                <h4>Status Bagasi</h4>
            </div>
        </div>

        <!-- Recent Flights -->
        <div class="content-section">
            <div class="section-header">
                <h3><i class="fas fa-history me-2" style="color: #87CEEB;"></i>Riwayat Penerbangan</h3>
            </div>

            <div class="booking-card-item">
                <div class="booking-header">
                    <div class="booking-id">#BK000987</div>
                    <div class="booking-status status-completed">Selesai</div>
                </div>
                <div class="flight-info">
                    <div class="airport-info">
                        <div class="airport-code">DPS</div>
                        <div class="airport-name">Bali</div>
                        <div class="detail-value">09:15</div>
                    </div>
                    <div class="flight-arrow">
                        <i class="fas fa-plane"></i>
                        <div class="flight-duration">3h 10m</div>
                    </div>
                    <div class="airport-info">
                        <div class="airport-code">CGK</div>
                        <div class="airport-name">Jakarta</div>
                        <div class="detail-value">12:25</div>
                    </div>
                </div>
                <div class="booking-details">
                    <div class="detail-item">
                        <div class="detail-label">Tanggal</div>
                        <div class="detail-value">28 Sep 2025</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Penerbangan</div>
                        <div class="detail-value">SA-154</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Kursi</div>
                        <div class="detail-value">15B</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Status</div>
                        <div class="detail-value">Tiba Tepat Waktu</div>
                    </div>
                </div>
            </div>

            <div class="booking-card-item">
                <div class="booking-header">
                    <div class="booking-id">#BK000856</div>
                    <div class="booking-status status-completed">Selesai</div>
                </div>
                <div class="flight-info">
                    <div class="airport-info">
                        <div class="airport-code">CGK</div>
                        <div class="airport-name">Jakarta</div>
                        <div class="detail-value">16:40</div>
                    </div>
                    <div class="flight-arrow">
                        <i class="fas fa-plane"></i>
                        <div class="flight-duration">2h 20m</div>
                    </div>
                    <div class="airport-info">
                        <div class="airport-code">UPG</div>
                        <div class="airport-name">Makassar</div>
                        <div class="detail-value">19:00</div>
                    </div>
                </div>
                <div class="booking-details">
                    <div class="detail-item">
                        <div class="detail-label">Tanggal</div>
                        <div class="detail-value">15 Sep 2025</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Penerbangan</div>
                        <div class="detail-value">SA-309</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Kursi</div>
                        <div class="detail-value">7D</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Status</div>
                        <div class="detail-value">Tiba Tepat Waktu</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e)): ?>
<?php $attributes = $__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e; ?>
<?php unset($__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e)): ?>
<?php $component = $__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e; ?>
<?php unset($__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\Skyantara\resources\views/dashboard.blade.php ENDPATH**/ ?>