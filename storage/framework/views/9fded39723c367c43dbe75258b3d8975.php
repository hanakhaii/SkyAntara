<?php if (isset($component)) { $__componentOriginal2880b66d47486b4bfeaf519598a469d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2880b66d47486b4bfeaf519598a469d6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $attributes = $__attributesOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $component = $__componentOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__componentOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>

<main class="main-content">
    <!-- Reservations -->
    <div class="content-card">
        <div class="card-header-custom">
            <h4><i class="fas fa-ticket-alt me-2" style="color: #87CEEB;"></i>Reservasi Terdaftar</h4>
        </div>
        <div class="table-responsive">
            <table class="table-custom">
                <thead>
                    <tr>
                        <th>ID Reservasi</th>
                        <th>Nama Reservasi</th>
                        <th>Penerbangan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><strong><?php echo e($reservation->id); ?></strong></td>
                            <td><?php echo e($reservation->user->name ?? 'Tidak diketahui'); ?></td>
                            <td>
                                <?php echo e($reservation->schedule->route->origin ?? '-'); ?> →
                                <?php echo e($reservation->schedule->route->destination ?? '-'); ?>

                            </td>
                            <td><?php echo e($reservation->created_at->format('d M Y')); ?></td>
                            <td>
                                <?php
                                    $statusClass = [
                                        'pending' => 'badge-warning',
                                        'approved' => 'badge-success',
                                        'cancelled' => 'badge-danger'
                                    ][$reservation->status ?? 'pending'] ?? 'badge-warning';
                                ?>
                                <span class="badge-status <?php echo e($statusClass); ?>">
                                    <?php echo e(ucfirst($reservation->status ?? 'Pending')); ?>

                                </span>
                            </td>
                            <td>Rp <?php echo e(number_format($reservation->total_price, 0, ',', '.')); ?></td>
                            <td>
                                <?php if($reservation->status == 'pending'): ?>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                        Ubah Status
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <form action="<?php echo e(route('admin.reservations.updateStatus', $reservation->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PATCH'); ?>
                                                <input type="hidden" name="status" value="approved">
                                                <button type="submit" class="dropdown-item text-success">
                                                    <i class="fas fa-check me-1"></i> Approve
                                                </button>
                                            </form>
                                        </li>
                                        <li>
                                            <form action="<?php echo e(route('admin.reservations.updateStatus', $reservation->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PATCH'); ?>
                                                <input type="hidden" name="status" value="cancelled">
                                                <button type="submit" class="dropdown-item text-danger">
                                                    <i class="fas fa-times me-1"></i> Cancel
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <?php else: ?>
                                <span class="text-muted">-</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7" class="text-center">Belum ada pemesanan terbaru.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</main><?php /**PATH C:\laragon\www\Skyantara\resources\views/admin/reservations/index.blade.php ENDPATH**/ ?>