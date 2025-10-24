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
                        Beberapa informasi penting masih kosong. Profil yang lengkap akan membantu kami memberikan
                        pengalaman yang lebih personal.
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
                <h4><a href="<?php echo e(route('reservations.index')); ?>">Pemesanan Saya</a></h4>
            </div>
            <div class="action-card green">
                <div class="action-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h4><a href="<?php echo e(route('search')); ?>">Check-in Online</a></h4>
            </div>
        </div>

        <!-- Recent Flights -->
        <div class="content-section">
            <div class="section-header">
                <h3><i class="fas fa-history me-2" style="color: #87CEEB;"></i>Riwayat Penerbangan</h3>
            </div>

            <?php $__empty_1 = true; $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="reservation-card-item">
                    <div class="reservation-header">
                        <div class="reservation-id">#BK<?php echo e(str_pad($reservation->id, 6, '0', STR_PAD_LEFT)); ?></div>
                        <div class="reservation-status status-completed"><?php echo e(ucfirst($reservation->status)); ?></div>
                    </div>

                    <div class="flight-info">
                        <div class="airport-info">
                            <div class="airport-code"><?php echo e($reservation->flight->route->origin); ?></div>
                            <div class="airport-name"><?php echo e($reservation->flight->route->origin_name ?? '-'); ?></div>
                            <div class="detail-value"><?php echo e($reservation->flight->departure_time->format('H:i')); ?></div>
                        </div>
                        <div class="flight-arrow">
                            <i class="fas fa-plane"></i>
                            <div class="flight-duration">
                                
                                <?php echo e($reservation->flight->arrival_time->diffInHours($reservation->flight->departure_time)); ?>h
                                <?php echo e($reservation->flight->arrival_time->diff($reservation->flight->departure_time)->format('%I')); ?>m
                            </div>
                        </div>
                        <div class="airport-info">
                            <div class="airport-code"><?php echo e($reservation->flight->route->destination); ?></div>
                            <div class="airport-name"><?php echo e($reservation->flight->route->destination_name ?? '-'); ?></div>
                            <div class="detail-value"><?php echo e($reservation->flight->arrival_time->format('H:i')); ?></div>
                        </div>
                    </div>

                    <div class="reservation-details">
                        <div class="detail-item">
                            <div class="detail-label">Tanggal</div>
                            <div class="detail-value"><?php echo e($reservation->flight->departure_time->format('d M Y')); ?></div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Penerbangan</div>
                            <div class="detail-value"><?php echo e($reservation->flight->flight_code); ?></div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Jumlah Tiket</div>
                            <div class="detail-value"><?php echo e($reservation->ticket_quantity); ?></div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Total Harga</div>
                            <div class="detail-value">Rp<?php echo e(number_format($reservation->total_price, 0, ',', '.')); ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-muted text-center mt-3">Belum ada riwayat penerbangan.</p>
            <?php endif; ?>
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