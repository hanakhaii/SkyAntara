<x-nav>
    @section('form-title', 'Reservasi Saya')

    <main class="dashboard-container">
        <!-- My Reservation Section -->
        <div class="content-section" id="reservation">
            <div class="section-header">
                <h3><i class="fas fa-ticket-alt me-2" style="color: #87CEEB;"></i>Pemesanan Saya</h3>
                <a href="{{ url('/search') }}" class="btn-custom btn-primary-sky">
                    <i class="fas fa-plus me-2"></i>Pesan Tiket Baru
                </a>
            </div>

            @if ($reservations->isEmpty())
                <p class="text-muted mt-3">Belum ada reservasi yang dibuat.</p>
            @else
                @foreach ($reservations as $reservation)
                    @php
                        $schedule = $reservation->schedule; 
                        $route = $schedule?->flightRoute;
                    @endphp

                    <div class="reservation-card-item">
                        <div class="reservation-header">
                            <div class="reservation-id">#BK{{ str_pad($reservation->id, 6, '0', STR_PAD_LEFT) }}</div>
                            <div class="reservation-status 
                                {{ $reservation->status === 'pending' ? 'status-pending' : ($reservation->status === 'approved' ? 'status-upcoming' : 'status-cancelled') }}">
                                {{ ucfirst($reservation->status) }}
                            </div>
                        </div>

                        <div class="flight-info">
                            <div class="airport-info">
                                <div class="airport-code">{{ $schedule->route->origin ?? '-' }}</div>
                                <div class="detail-value">{{ $schedule->departure_time->format('H:i') ?? '-' }}</div>
                            </div>
                            <div class="flight-arrow">
                                <i class="fas fa-plane"></i>
                            </div>
                            <div class="airport-info">
                                <div class="airport-code">{{ $schedule->route->destination ?? '-' }}</div>
                                <div class="detail-value">{{ $schedule->arrival_time->format('H:i') ?? '-' }}</div>
                            </div>
                        </div>

                        <div class="reservation-details">
                            <div class="detail-item">
                                <div class="detail-label">Jumlah Tiket</div>
                                <div class="detail-value">{{ $reservation->ticket_quantity }}</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Total Harga</div>
                                <div class="detail-value">Rp {{ number_format($reservation->total_price, 0, ',', '.') }}</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Penerbangan</div>
                                <div class="detail-value">{{ $schedule->flight_code ?? '-' }}</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Tanggal Pemesanan</div>
                                <div class="detail-value">{{ $reservation->created_at->format('d M Y H:i') }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </main>
</x-nav>