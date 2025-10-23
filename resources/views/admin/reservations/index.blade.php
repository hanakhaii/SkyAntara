<x-sidebar></x-sidebar>

<main class="main-content">
    <!-- Reservations -->
    <div class="content-card">
        <div class="card-header-custom">
            <h4><i class="fas fa-ticket-alt me-2" style="color: #87CEEB;"></i>Reservasi Terdaftar</h4>
        </div>
        <div class="table-responsive">
            <table class="table-custom">
                <thead>
                    <tr>
                        <th>ID Reservasi</th>
                        <th>Nama Reservasi</th>
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
                                {{ $reservation->flight->route->origin ?? '-' }} →
                                {{ $reservation->flight->route->destination ?? '-' }}
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
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</main>
