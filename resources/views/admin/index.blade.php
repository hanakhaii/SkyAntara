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
                <a href="#" class="active">
                    <i class="fas fa-chart-line"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">
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
                    <i class="fas fa-tags"></i>
                    Promo
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
                <a href="#">
                    <i class="fas fa-sign-out-alt"></i>
                    Keluar
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
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
                <div class="stat-value">48</div>
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
                <div class="stat-value">2,847</div>
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
                <div class="stat-value">8.5M</div>
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
                <div class="stat-value">15,432</div>
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
                <a href="#" class="btn-action btn-primary-custom">
                    <i class="fas fa-plus me-2"></i>Tambah Penerbangan
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
                        <tr>
                            <td><strong>SA-101</strong></td>
                            <td>Jakarta (CGK) → Bali (DPS)</td>
                            <td>08:30 - 11:45</td>
                            <td><span class="badge-status badge-success">Tepat Waktu</span></td>
                            <td>156/180</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-icon delete"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>SA-202</strong></td>
                            <td>Bali (DPS) → Surabaya (SUB)</td>
                            <td>10:15 - 11:30</td>
                            <td><span class="badge-status badge-warning">Tertunda</span></td>
                            <td>142/180</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-icon delete"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>SA-303</strong></td>
                            <td>Surabaya (SUB) → Makassar (UPG)</td>
                            <td>13:00 - 15:30</td>
                            <td><span class="badge-status badge-success">Boarding</span></td>
                            <td>168/180</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-icon delete"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>SA-404</strong></td>
                            <td>Jakarta (CGK) → Medan (KNO)</td>
                            <td>15:45 - 18:00</td>
                            <td><span class="badge-status badge-success">Dijadwalkan</span></td>
                            <td>98/180</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-icon delete"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>SA-505</strong></td>
                            <td>Yogyakarta (JOG) → Bali (DPS)</td>
                            <td>17:20 - 18:30</td>
                            <td><span class="badge-status badge-success">Dijadwalkan</span></td>
                            <td>134/180</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-icon delete"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Recent Bookings -->
        <div class="content-card">
            <div class="card-header-custom">
                <h4><i class="fas fa-ticket-alt me-2" style="color: #87CEEB;"></i>Pemesanan Terbaru</h4>
                <a href="#" class="btn-action btn-primary-custom">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table-custom">
                    <thead>
                        <tr>
                            <th>ID Booking</th>
                            <th>Nama Penumpang</th>
                            <th>Penerbangan</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>#BK001248</strong></td>
                            <td>Budi Santoso</td>
                            <td>SA-101 (CGK-DPS)</td>
                            <td>02 Okt 2025</td>
                            <td><span class="badge-status badge-success">Lunas</span></td>
                            <td>Rp 1.250.000</td>
                        </tr>
                        <tr>
                            <td><strong>#BK001247</strong></td>
                            <td>Siti Nurhaliza</td>
                            <td>SA-202 (DPS-SUB)</td>
                            <td>02 Okt 2025</td>
                            <td><span class="badge-status badge-warning">Pending</span></td>
                            <td>Rp 850.000</td>
                        </tr>
                        <tr>
                            <td><strong>#BK001246</strong></td>
                            <td>Agus Wijaya</td>
                            <td>SA-303 (SUB-UPG)</td>
                            <td>03 Okt 2025</td>
                            <td><span class="badge-status badge-success">Lunas</span></td>
                            <td>Rp 1.450.000</td>
                        </tr>
                        <tr>
                            <td><strong>#BK001245</strong></td>
                            <td>Dewi Lestari</td>
                            <td>SA-404 (CGK-KNO)</td>
                            <td>04 Okt 2025</td>
                            <td><span class="badge-status badge-success">Lunas</span></td>
                            <td>Rp 950.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>