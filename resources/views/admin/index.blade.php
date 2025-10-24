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
                <div class="stat-value">{{ $totalFlightsToday ?? 0 }}</div>
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
                <div class="stat-value">{{ number_format($ticketsSold ?? 0) }}</div>
                <div class="stat-change">
                    <i class="fas fa-arrow-up"></i>
                    18% dari bulan lalu
                </div>
            </div>

            <div class="stat-card orange">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-label">Penumpang Aktif</div>
                <div class="stat-value">{{ number_format($activePassengers ?? 0) }}</div>
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
                <a href="{{ route('admin.flights.index') }}" class="btn-action btn-primary-custom">
                    Lihat Semua
                </a>
            </div>
            <div class="table-responsive">
                <table class="table-custom">
                    <thead>
                        <tr>
                            <th>No. Penerbangan</th>
                            <th>Rute</th>
                            <th>Waktu</th>
                            <th>Kapasitas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($flights as $flight)
                        <tr>
                            <td><strong>{{ $flight->flight_code }}</strong></td>
                            <td>
                                {{ $flight->route->origin ?? '-' }} → {{ $flight->route->destination ?? '-' }}
                            </td>
                            <td>
                                {{ $flight->departure_time->format('H:i') }} → {{ $flight->arrival_time->format('H:i') }}
                            </td>
                            <td>{{ $flight->total_seats }} / {{ $flight->available_seats }}</td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('admin.flights.edit', $flight->id) }}" class="btn-icon edit"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('admin.flights.destroy', $flight->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-icon delete" onclick="return confirm('Yakin hapus penerbangan ini?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada penerbangan hari ini.</td>
                        </tr>
                        @endforelse ($flights as $flight)
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Recent Reservations -->
        <div class="content-card">
            <div class="card-header-custom">
                <h4><i class="fas fa-ticket-alt me-2" style="color: #87CEEB;"></i>Reservasi Terbaru</h4>
                <a href="{{ route('admin.reservations.index') }}" class="btn-action btn-primary-custom">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table-custom">
                    <thead>
                        <tr>
                            <th>ID Reservation</th>
                            <th>Nama Pemesan</th>
                            <th>Penerbangan</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reservations as $reservation)
                        <tr>
                            <td><strong>{{ $reservation->id }}</strong></td>
                            <td>{{ $reservation->user->name ?? 'Tidak diketahui' }}</td>
                            <td>
                                {{ $reservation->schedule->route->origin ?? '-' }} → {{ $reservation->schedule->route->destination ?? '-' }}
                            </td>
                            <td>{{ $reservation->created_at->format('d M Y') }}</td>
                            <td>
                                <span class="badge-status badge-success">
                                    {{ ucfirst($reservation->status ?? 'Pending') }}
                                </span>
                            </td>
                            <td>Rp {{ number_format($reservation->total_price, 0, ',', '.') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada pemesanan terbaru.</td>
                        </tr>
                        @endforelse ($reservations as $reservation)
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</x-sidebar>