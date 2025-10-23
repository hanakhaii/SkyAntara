<?php if (isset($component)) { $__componentOriginal0b7c292fb09548ffcda612434d116f73 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0b7c292fb09548ffcda612434d116f73 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.adminform','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('adminform'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('form-title', 'Tambah Rute Baru'); ?>

    <!-- Form Container -->
    <div class="form-container">
        <div class="form-header">
            <h3>Tambah Rute Baru</h3>
            <p>Lengkapi informasi di bawah ini untuk menambahkan rute penerbangan baru</p>
        </div>

        <div class="alert-info">
            <i class="fas fa-info-circle"></i>
            <p>Pastikan semua informasi yang dimasukkan sudah benar. Data yang telah disimpan akan langsung tersedia
                untuk pemesanan penumpang.</p>
        </div>

        <form action="<?php echo e(route('admin.flightroutes.index')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Bandara Keberangkatan<span class="required">*</span></label>
                    <input type="text" class="form-control" name="origin" placeholder="Contoh : Jakarta" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Bandara Tujuan<span class="required">*</span></label>
                    <input type="text" class="form-control" name="destination" placeholder="Contoh : Bali" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Durasi Penerbangan</label>
                    <input type="text" class="form-control" name="duration" placeholder="Contoh : 3h 15m" required>
                </div>
            </div>
            <!-- Form Actions -->
            <div class="form-actions">
                <button type="button" class="btn-custom btn-secondary-admin">
                    <i class="fas fa-times"></i>
                    Batal
                </button>
                <button type="submit" class="btn-custom btn-primary-admin">
                    <i class="fas fa-save"></i>
                    Simpan Penerbangan
                </button>
            </div>
    </div>
    </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0b7c292fb09548ffcda612434d116f73)): ?>
<?php $attributes = $__attributesOriginal0b7c292fb09548ffcda612434d116f73; ?>
<?php unset($__attributesOriginal0b7c292fb09548ffcda612434d116f73); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0b7c292fb09548ffcda612434d116f73)): ?>
<?php $component = $__componentOriginal0b7c292fb09548ffcda612434d116f73; ?>
<?php unset($__componentOriginal0b7c292fb09548ffcda612434d116f73); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\Skyantara\resources\views/admin/flightroutes/create.blade.php ENDPATH**/ ?>