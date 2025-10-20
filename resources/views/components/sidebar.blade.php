<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyAntara - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/index-admin.css') }}">
</head>

<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-brand">
            <i class="fas fa-plane"></i>
            SkyAntara
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('admin.index') }}" class="active">
                    <i class="fas fa-chart-line"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-plane-departure"></i>
                    Penerbangan
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-ticket-alt"></i>
                    Pemesanan
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-users"></i>
                    Penumpang
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-map-marked-alt"></i>
                    Rute
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-file-invoice-dollar"></i>
                    Laporan
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-cog"></i>
                    Pengaturan
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">
                        <i class="fas fa-sign-out-alt"></i>
                        Keluar
                    </button>
                </form>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
