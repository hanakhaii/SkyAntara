<?php if (isset($component)) { $__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e = $attributes; } ?>
<?php $component = App\View\Components\Nav::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Nav::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('form-title', 'Reservasi Saya'); ?>

    <main class="dashboard-container">
        <!-- My Reservation Section -->
        <div class="content-section" id="reservation">
            <div class="section-header">
                <h3><i class="fas fa-ticket-alt me-2" style="color: #87CEEB;"></i>Pemesanan Saya</h3>
                <a href="<?php echo e(url('/search')); ?>" class="btn-custom btn-primary-sky">
                    <i class="fas fa-plus me-2"></i>Pesan Tiket Baru
                </a>
            </div>

            <?php if($reservations->isEmpty()): ?>
                <p class="text-muted mt-3">Belum ada reservasi yang dibuat.</p>
            <?php else: ?>
                <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $schedule = $reservation->schedule; 
                        $route = $schedule?->flightRoute;
                    ?>

                    <div class="reservation-card-item">
                        <div class="reservation-header">
                            <div class="reservation-id">#BK<?php echo e(str_pad($reservation->id, 6, '0', STR_PAD_LEFT)); ?></div>
                            <div class="reservation-status 
                                <?php echo e($reservation->status === 'pending' ? 'status-pending' : ($reservation->status === 'approved' ? 'status-upcoming' : 'status-cancelled')); ?>">
                                <?php echo e(ucfirst($reservation->status)); ?>

                            </div>
                        </div>

                        <div class="flight-info">
                            <div class="airport-info">
                                <div class="airport-code"><?php echo e($schedule->route->origin ?? '-'); ?></div>
                                <div class="detail-value"><?php echo e($schedule->departure_time->format('H:i') ?? '-'); ?></div>
                            </div>
                            <div class="flight-arrow">
                                <i class="fas fa-plane"></i>
                            </div>
                            <div class="airport-info">
                                <div class="airport-code"><?php echo e($schedule->route->destination ?? '-'); ?></div>
                                <div class="detail-value"><?php echo e($schedule->arrival_time->format('H:i') ?? '-'); ?></div>
                            </div>
                        </div>

                        <div class="reservation-details">
                            <div class="detail-item">
                                <div class="detail-label">Jumlah Tiket</div>
                                <div class="detail-value"><?php echo e($reservation->ticket_quantity); ?></div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Total Harga</div>
                                <div class="detail-value">Rp <?php echo e(number_format($reservation->total_price, 0, ',', '.')); ?></div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Penerbangan</div>
                                <div class="detail-value"><?php echo e($schedule->flight_code ?? '-'); ?></div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Tanggal Pemesanan</div>
                                <div class="detail-value"><?php echo e($reservation->created_at->format('d M Y H:i')); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php endif; ?><?php /**PATH C:\laragon\www\Skyantara\resources\views/user_reservations/index.blade.php ENDPATH**/ ?>