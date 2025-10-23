<?php if (isset($component)) { $__componentOriginal2880b66d47486b4bfeaf519598a469d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2880b66d47486b4bfeaf519598a469d6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!-- Main Content -->
    <main class="main-content">
        <!-- Top Bar -->
        <div class="top-bar">
            <h2><i class="fas fa-chart-line me-2" style="color: #87CEEB;"></i>Dashboard Admin</h2>
            <div class="admin-profile">
                <div class="admin-avatar">AD</div>
                <div class="admin-info">
                    <h5>Admin Utama</h5>
                    <p>Administrator</p>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="stats-container">
            <div class="stat-card blue">
                <div class="stat-icon">
                    <i class="fas fa-plane-departure"></i>
                </div>
                <div class="stat-label">Total Penerbangan Hari Ini</div>
                <div class="stat-value"><?php echo e($totalFlightsToday ?? 0); ?></div>
                <div class="stat-change">
                    <i class="fas fa-arrow-up"></i>
                    12% dari kemarin
                </div>
            </div>

            <div class="stat-card brown">
                <div class="stat-icon">
                    <i class="fas fa-ticket-alt"></i>
                </div>
                <div class="stat-label">Tiket Terjual Bulan Ini</div>
                <div class="stat-value"><?php echo e(number_format($ticketsSold ?? 0)); ?></div>
                <div class="stat-change">
                    <i class="fas fa-arrow-up"></i>
                    18% dari bulan lalu
                </div>
            </div>

            <div class="stat-card green">
                <div class="stat-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="stat-label">Pendapatan Bulan Ini</div>
                <div class="stat-value">Rp <?php echo e(number_format($totalRevenue ?? 0, 0, ',', '.')); ?></div>
                <div class="stat-change">
                    <i class="fas fa-arrow-up"></i>
                    25% dari bulan lalu
                </div>
            </div>

            <div class="stat-card orange">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-label">Penumpang Aktif</div>
                <div class="stat-value"><?php echo e(number_format($activePassengers ?? 0)); ?></div>
                <div class="stat-change">
                    <i class="fas fa-arrow-up"></i>
                    9% dari bulan lalu
                </div>
            </div>
        </div>

        <!-- Recent Flights -->
        <div class="content-card">
            <div class="card-header-custom">
                <h4><i class="fas fa-plane me-2" style="color: #87CEEB;"></i>Penerbangan Hari Ini</h4>
                <a href="<?php echo e(route('admin.flights.index')); ?>" class="btn-action btn-primary-custom">
                    Lihat Semua
                </a>
            </div>
            <div class="table-responsive">
                <table class="table-custom">
                    <thead>
                        <tr>
                            <th>No. Penerbangan</th>
                            <th>Rute</th>
                            <th>Waktu</th>
                            <th>Status</th>
                            <th>Kapasitas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><strong><?php echo e($flight->flight_code); ?></strong></td>
                            <td>
                                <?php echo e($flight->route->origin ?? '-'); ?> → <?php echo e($flight->route->destination ?? '-'); ?>

                            </td>
                            <td>
                                <?php echo e($flight->departure_time->format('H:i')); ?> → <?php echo e($flight->arrival_time->format('H:i')); ?>

                            </td>
                            <td><span class="badge-status badge-success"><?php echo e($flight->status); ?></span></td>
                            <td><?php echo e($flight->available_seats); ?></td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?php echo e(route('admin.flights.edit', $flight->id)); ?>" class="btn-icon edit"><i class="fas fa-edit"></i></a>
                                    <form action="<?php echo e(route('admin.flights.destroy', $flight->id)); ?>" method="POST" style="display:inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn-icon delete" onclick="return confirm('Yakin hapus penerbangan ini?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-center">Belum ada penerbangan hari ini.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Recent Reservations -->
        <div class="content-card">
            <div class="card-header-custom">
                <h4><i class="fas fa-ticket-alt me-2" style="color: #87CEEB;"></i>Reservasi Terbaru</h4>
                <a href="<?php echo e(route('admin.reservations.index')); ?>" class="btn-action btn-primary-custom">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table-custom">
                    <thead>
                        <tr>
                            <th>ID Booking</th>
                            <th>Nama Pemesan</th>
                            <th>Penerbangan</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><strong><?php echo e($reservation->id); ?></strong></td>
                            <td><?php echo e($reservation->user->name ?? 'Tidak diketahui'); ?></td>
                            <td>
                                <?php echo e($reservation->flight->route->origin ?? '-'); ?> → <?php echo e($reservation->flight->route->destination ?? '-'); ?>

                            </td>
                            <td><?php echo e($reservation->created_at->format('d M Y')); ?></td>
                            <td>
                                <span class="badge-status badge-success">
                                    <?php echo e(ucfirst($reservation->status ?? 'Pending')); ?>

                                </span>
                            </td>
                            <td>Rp <?php echo e(number_format($reservation->total_price, 0, ',', '.')); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-center">Belum ada pemesanan terbaru.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $attributes = $__attributesOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $component = $__componentOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__componentOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\Skyantara\resources\views/admin/index.blade.php ENDPATH**/ ?>