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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($reservations as $reservation)
                        <tr>
                            <td><strong>{{ $reservation->id }}</strong></td>
                            <td>{{ $reservation->user->name ?? 'Tidak diketahui' }}</td>
                            <td>
                                {{ $reservation->schedule->route->origin ?? '-' }} →
                                {{ $reservation->schedule->route->destination ?? '-' }}
                            </td>
                            <td>{{ $reservation->created_at->format('d M Y') }}</td>
                            <td>
                                @php
                                    $statusClass = [
                                        'pending' => 'badge-warning',
                                        'approved' => 'badge-success',
                                        'cancelled' => 'badge-danger'
                                    ][$reservation->status ?? 'pending'] ?? 'badge-warning';
                                @endphp
                                <span class="badge-status {{ $statusClass }}">
                                    {{ ucfirst($reservation->status ?? 'Pending') }}
                                </span>
                            </td>
                            <td>Rp {{ number_format($reservation->total_price, 0, ',', '.') }}</td>
                            <td>
                                @if($reservation->status == 'pending')
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                        Ubah Status
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <form action="{{ route('admin.reservations.updateStatus', $reservation->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="status" value="approved">
                                                <button type="submit" class="dropdown-item text-success">
                                                    <i class="fas fa-check me-1"></i> Approve
                                                </button>
                                            </form>
                                        </li>
                                        <li>
                                            <form action="{{ route('admin.reservations.updateStatus', $reservation->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="status" value="cancelled">
                                                <button type="submit" class="dropdown-item text-danger">
                                                    <i class="fas fa-times me-1"></i> Cancel
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                @else
                                <span class="text-muted">-</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Belum ada pemesanan terbaru.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</main>