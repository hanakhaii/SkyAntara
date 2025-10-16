<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyAntara - Dashboard Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
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
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="fas fa-home me-1"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('bookings') }}">
                                <i class="fas fa-ticket-alt me-1"></i>Pemesanan Saya
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                <i class="fas fa-user me-1"></i>Profil
                            </a>
                        </li>
                        <li class="nav-item ms-3">
                            <div class="user-menu">
                                <div class="user-avatar">BS</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

     <!-- Main Dashboard -->
    <main class="dashboard-container">
        {{ $slot }}
    </main>

</body>
</html>