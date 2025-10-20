<x-sidebar>
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
    </main>
</x-sidebar>