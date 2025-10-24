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
    <?php $__env->startSection('form-title', 'Hasil Pencarian - SkyAntara'); ?>
    
    <!-- Hero Section -->
    <div class="search-hero">
        <div class="search-hero-content">
            <h1>Hasil Pencarian Penerbangan</h1>
            <p class="search-subtitle">
                <i class="fas fa-plane-departure me-2"></i>
                Dari <strong><?php echo e($origin); ?></strong> ke <strong><?php echo e($destination); ?></strong>
            </p>
        </div>
    </div>

    <main class="search-results-container">
        <!-- Results Summary -->
        <div class="results-summary">
            <div class="summary-content">
                <h3>
                    <i class="fas fa-search me-2"></i>
                    <?php if($flights->isEmpty()): ?>
                        Tidak ada penerbangan ditemukan
                    <?php else: ?>
                        Menemukan <?php echo e($flights->count()); ?> penerbangan
                    <?php endif; ?>
                </h3>
                <p class="text-muted">Hasil pencarian untuk rute yang Anda cari</p>
            </div>
        </div>

        <?php if($flights->isEmpty()): ?>
            <!-- Empty State -->
            <div class="empty-search-state">
                <div class="empty-icon">
                    <i class="fas fa-plane-slash"></i>
                </div>
                <h4>Tidak Ada Penerbangan Ditemukan</h4>
                <p class="text-muted">Maaf, tidak ada penerbangan yang sesuai dengan kriteria pencarian Anda.</p>
                <a href="<?php echo e(route('search')); ?>" class="btn-custom btn-primary-sky">
                    <i class="fas fa-search me-2"></i>Cari Penerbangan Lain
                </a>
            </div>
        <?php else: ?>
            <!-- Flight Results -->
            <div class="flight-results-grid">
                <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flight-card">
                        <div class="flight-card-header">
                            <div class="flight-code">
                                <i class="fas fa-plane me-2"></i>
                                <?php echo e($flight->flight_code); ?>

                            </div>
                            <div class="flight-price">
                                Rp <?php echo e(number_format($flight->price, 0, ',', '.')); ?>

                                <span class="price-label">/orang</span>
                            </div>
                        </div>

                        <div class="flight-route">
                            <div class="route-section">
                                <div class="airport-info">
                                    <div class="airport-code"><?php echo e($flight->route->origin); ?></div>
                                    <div class="airport-name"><?php echo e($flight->route->origin_name ?? '-'); ?></div>
                                    <div class="flight-time"><?php echo e($flight->departure_time->format('H:i')); ?></div>
                                </div>
                            </div>

                            <div class="route-connector">
                                <div class="flight-duration">
                                    <?php echo e($flight->arrival_time->diffInHours($flight->departure_time)); ?>j 
                                    <?php echo e($flight->arrival_time->diff($flight->departure_time)->format('%I')); ?>m
                                </div>
                                <div class="connector-line">
                                    <div class="connector-dot start"></div>
                                    <div class="connector-line-main"></div>
                                    <div class="connector-dot end"></div>
                                </div>
                                <div class="connector-icon">
                                    <i class="fas fa-plane"></i>
                                </div>
                            </div>

                            <div class="route-section">
                                <div class="airport-info">
                                    <div class="airport-code"><?php echo e($flight->route->destination); ?></div>
                                    <div class="airport-name"><?php echo e($flight->route->destination_name ?? '-'); ?></div>
                                    <div class="flight-time"><?php echo e($flight->arrival_time->format('H:i')); ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="flight-details">
                            <div class="detail-item">
                                <i class="fas fa-calendar me-2"></i>
                                <?php echo e($flight->departure_time->format('d M Y')); ?>

                            </div>
                            <div class="detail-item">
                                <i class="fas fa-clock me-2"></i>
                                <?php echo e($flight->departure_time->format('H:i')); ?> - <?php echo e($flight->arrival_time->format('H:i')); ?>

                            </div>
                        </div>

                        <div class="flight-card-actions">
                            <a href="<?php echo e(route('reservations.create', $flight->id)); ?>" class="btn-book-flight">
                                <i class="fas fa-ticket-alt me-2"></i>
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Load More Section -->
            <div class="load-more-section">
                <button class="btn-load-more">
                    <i class="fas fa-redo me-2"></i>
                    Muat Lebih Banyak
                </button>
            </div>
        <?php endif; ?>
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
<?php endif; ?><?php /**PATH C:\laragon\www\Skyantara\resources\views/search-result.blade.php ENDPATH**/ ?>