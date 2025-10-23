<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyAntara - Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/form.css')); ?>">
</head>
<body>
    <!-- Main Content -->
    <main class="main-content">
        <!-- Top Bar -->
        <nav class="top-bar">
            <div>
                <h2><i class="fas fa-plus-circle me-2" style="color: #87CEEB;"></i><?php echo $__env->yieldContent('form-title', 'Tambah Data Baru'); ?></h2>
                <div class="breadcrumb-custom">
                    <a href="<?php echo e(route('admin.index')); ?>">Dashboard</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>Tambah Baru</span>
                </div>
            </div>
        </nav>
        
        <?php echo e($slot); ?>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto calculate duration
        const depDate = document.querySelector('input[name="departure_date"]');
        const depTime = document.querySelector('input[name="departure_time"]');
        const arrDate = document.querySelector('input[name="arrival_date"]');
        const arrTime = document.querySelector('input[name="arrival_time"]');
        const duration = document.querySelector('input[name="duration"]');

        function calculateDuration() {
            if (depDate.value && depTime.value && arrDate.value && arrTime.value) {
                const departure = new Date(depDate.value + ' ' + depTime.value);
                const arrival = new Date(arrDate.value + ' ' + arrTime.value);
                const diff = arrival - departure;
                const hours = Math.floor(diff / 3600000);
                const minutes = Math.floor((diff % 3600000) / 60000);
                duration.value = `${hours}h ${minutes}m`;
            }
        }

        [depDate, depTime, arrDate, arrTime].forEach(input => {
            input.addEventListener('change', calculateDuration);
        });

        // Auto fill available seats
        const totalCapacity = document.querySelector('input[name="total_capacity"]');
        const availableSeats = document.querySelector('input[name="available_seats"]');

        totalCapacity.addEventListener('input', function() {
            if (!availableSeats.value) {
                availableSeats.value = this.value;
            }
        });
    </script>
</body>
</html><?php /**PATH C:\laragon\www\Skyantara\resources\views/components/adminform.blade.php ENDPATH**/ ?>