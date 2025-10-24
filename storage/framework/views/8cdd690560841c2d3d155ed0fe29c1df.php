<?php if (isset($component)) { $__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e = $attributes; } ?>
<?php $component = App\View\Components\Nav::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Nav::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Form Pemesanan - SkyAntara']); ?>
    <!-- Hero Section -->
    <div class="booking-hero">
        <div class="booking-hero-content">
            <h1>Form Pemesanan Tiket</h1>
            <p class="booking-subtitle">
                <i class="fas fa-plane me-2"></i>
                <?php echo e($schedule->route->origin); ?> → <?php echo e($schedule->route->destination); ?>

            </p>
        </div>
    </div>

    <main class="booking-container">
        <div class="booking-card">
            <!-- Flight Overview -->
            <div class="flight-overview">
                <div class="flight-route-main">
                    <div class="route-info">
                        <div class="airport-primary">
                            <div class="airport-code-large"><?php echo e($schedule->route->origin); ?></div>
                            <div class="airport-name"><?php echo e($schedule->route->origin_name ?? '-'); ?></div>
                            <div class="flight-time-large"><?php echo e($schedule->departure_time->format('H:i')); ?></div>
                        </div>
                        
                        <div class="route-connector-vertical">
                            <div class="connector-line-vertical">
                                <div class="connector-dot-vertical start"></div>
                                <div class="plane-icon-vertical">
                                    <i class="fas fa-plane"></i>
                                </div>
                                <div class="connector-dot-vertical end"></div>
                            </div>
                            <div class="flight-duration-vertical">
                                
                                <?php echo e($schedule->arrival_time->diff($schedule->departure_time)); ?>

                            </div>
                        </div>

                        <div class="airport-primary">
                            <div class="airport-code-large"><?php echo e($schedule->route->destination); ?></div>
                            <div class="airport-name"><?php echo e($schedule->route->destination_name ?? '-'); ?></div>
                            <div class="flight-time-large"><?php echo e($schedule->arrival_time->format('H:i')); ?></div>
                        </div>
                    </div>
                </div>

                <div class="flight-details-overview">
                    <div class="detail-row">
                        <div class="detail-item-overview">
                            <i class="fas fa-calendar-day me-2"></i>
                            <span><?php echo e($schedule->departure_time->format('d M Y')); ?></span>
                        </div>
                        <div class="detail-item-overview">
                            <i class="fas fa-plane me-2"></i>
                            <span><?php echo e($schedule->flight_code ?? '-'); ?></span>
                        </div>
                    </div>
                    <div class="price-section">
                        <div class="price-label">Harga per Tiket</div>
                        <div class="price-value">Rp <?php echo e(number_format($schedule->price, 0, ',', '.')); ?></div>
                    </div>
                </div>
            </div>

            <div class="booking-content">
                <!-- Data Pemesan -->
                <div class="booking-section">
                    <div class="section-header-booking">
                        <i class="fas fa-user-circle me-2"></i>
                        <h3>Data Pemesan</h3>
                    </div>
                    <div class="user-info-grid">
                        <div class="user-info-item">
                            <label class="info-label">Nama Lengkap</label>
                            <div class="info-value-display">
                                <i class="fas fa-user me-2"></i>
                                <?php echo e($user->name); ?>

                            </div>
                        </div>
                        <div class="user-info-item">
                            <label class="info-label">Email</label>
                            <div class="info-value-display">
                                <i class="fas fa-envelope me-2"></i>
                                <?php echo e($user->email); ?>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Pemesanan -->
                <form method="POST" action="<?php echo e(route('reservations.store')); ?>" class="booking-form">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="schedule_id" value="<?php echo e($schedule->id); ?>">

                    <div class="booking-section">
                        <div class="section-header-booking">
                            <i class="fas fa-ticket-alt me-2"></i>
                            <h3>Detail Pemesanan</h3>
                        </div>
                        
                        <div class="form-grid">
                            <div class="form-group-booking">
                                <label for="ticket_quantity" class="form-label-booking">
                                    <i class="fas fa-users me-2"></i>
                                    Jumlah Tiket
                                </label>
                                <div class="quantity-selector">
                                    <button type="button" class="quantity-btn" onclick="decrementQuantity()">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="number" id="ticket_quantity" name="ticket_quantity" 
                                           class="quantity-input" min="1" value="1" required>
                                    <button type="button" class="quantity-btn" onclick="incrementQuantity()">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="form-group-booking">
                                <label class="form-label-booking">
                                    <i class="fas fa-receipt me-2"></i>
                                    Total Harga
                                </label>
                                <div class="total-price-display">
                                    <span id="total_price_display">Rp <?php echo e(number_format($schedule->price, 0, ',', '.')); ?></span>
                                    <input type="hidden" id="total_price" name="total_price" value="<?php echo e($schedule->price); ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Price Summary -->
                    <div class="price-summary">
                        <div class="summary-row">
                            <span>Subtotal</span>
                            <span id="subtotal_display">Rp <?php echo e(number_format($schedule->price, 0, ',', '.')); ?></span>
                        </div>
                        <div class="summary-row total">
                            <span>Total Pembayaran</span>
                            <span id="final_total_display">Rp <?php echo e(number_format($schedule->price, 0, ',', '.')); ?></span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="booking-actions">
                        <a href="<?php echo e(url()->previous()); ?>" class="btn-back">
                            <i class="fas fa-arrow-left me-2"></i>
                            Kembali
                        </a>
                        <button type="submit" class="btn-confirm-booking">
                            <i class="fas fa-check-circle me-2"></i>
                            Konfirmasi Pemesanan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const quantityInput = document.getElementById('ticket_quantity');
            const pricePerTicket = <?php echo e($schedule->price); ?>;
            
            function updatePrices() {
                const quantity = parseInt(quantityInput.value) || 1;
                const total = pricePerTicket * quantity;
                
                // Update all price displays
                document.getElementById('total_price').value = total;
                document.getElementById('total_price_display').textContent = formatCurrency(total);
                document.getElementById('subtotal_display').textContent = formatCurrency(total);
                document.getElementById('final_total_display').textContent = formatCurrency(total);
            }
            
            function formatCurrency(amount) {
                return 'Rp ' + amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            }
            
            function incrementQuantity() {
                quantityInput.value = parseInt(quantityInput.value) + 1;
                updatePrices();
            }
            
            function decrementQuantity() {
                const currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                    updatePrices();
                }
            }
            
            // Event listeners
            quantityInput.addEventListener('input', updatePrices);
            
            // Initialize prices
            updatePrices();
        });
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
<?php endif; ?><?php /**PATH C:\laragon\www\Skyantara\resources\views/user_reservations/create.blade.php ENDPATH**/ ?>