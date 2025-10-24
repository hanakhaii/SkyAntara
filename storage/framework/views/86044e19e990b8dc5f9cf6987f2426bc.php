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
    <main class="main-content">
        <div class="content-card">
            <div class="card-header-custom d-flex justify-content-between align-items-center">
                <h4><i class="fas fa-plane me-2" style="color: #87CEEB;"></i>Data Penerbangan</h4>
                <a href="<?php echo e(route('admin.flights.create')); ?>" class="btn-action btn-primary-custom">
                    <i class="fas fa-plus me-2"></i>Tambah Penerbangan
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped align-middle table-custom">
                    <thead class="table-light">
                        <tr>
                            <th>Kode Penerbangan</th>
                            <th>Rute</th>
                            <th>Waktu</th>
                            <th>Harga</th>
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
                                    <?php echo e($flight->departure_time->format('H:i') ?? '-'); ?> → <?php echo e($flight->arrival_time->format('H:i') ?? '-'); ?>

                                </td>
                                <td>Rp<?php echo e(number_format($flight->price, 0, ',', '.')); ?></td>
                                <td><?php echo e($flight->total_seats); ?> / <?php echo e($flight->available_seats); ?></td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="<?php echo e(route('admin.flights.edit', $flight->id)); ?>" class="btn-icon edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="<?php echo e(route('admin.flights.destroy', $flight->id)); ?>" method="POST" style="display:inline;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn-icon delete" onclick="return confirm('Hapus penerbangan ini?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" class="text-center text-muted">Belum ada data penerbangan.</td>
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
<?php endif; ?><?php /**PATH C:\laragon\www\Skyantara\resources\views/admin/flights/index.blade.php ENDPATH**/ ?>