<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyAntara - Dashboard Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">
</head>

<body>
    <!-- Background Decoration -->
    <div class="bg-decoration">
        <i class="fas fa-plane plane-icon"></i>
        <i class="fas fa-plane plane-icon"></i>
        <i class="fas fa-plane plane-icon"></i>
    </div>

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <i class="fas fa-plane"></i>
                    SkyAntara
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('search')); ?>">
                                Cari Penerbangan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('reservations.index')); ?>">
                                Pemesanan Saya
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('profile.index')); ?>">
                                Profil
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-logout">Keluar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

     <!-- Main Dashboard -->
    <main>
        <?php echo e($slot); ?>

    </main>

</body>
</html><?php /**PATH C:\laragon\www\Skyantara\resources\views/components/nav.blade.php ENDPATH**/ ?>