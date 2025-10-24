<x-nav title="Dashboard SkyAntara">
    <!-- Main Dashboard -->
    <main class="dashboard-container">
        <!-- Welcome Section -->
        <div class="welcome-section">
            <div class="welcome-content">
                <h1>Selamat Datang, {{ Auth::user()->name }}! 👋</h1>
                <p>Siap untuk petualangan berikutnya? Mari jelajahi destinasi impian Anda</p>
            </div>
        </div>

        <!-- Reminder for Complete Profile -->
        @if ($isProfileIncomplete)
            <div class="notification-container">
                <div class="profile-notification pulse">
                    <div class="notification-header">
                        <div class="notification-icon">!</div>
                        <h3 class="notification-title">Lengkapi Profil Anda!</h3>
                    </div>
                    <p class="notification-content">
                        Beberapa informasi penting masih kosong. Profil yang lengkap akan membantu kami memberikan
                        pengalaman yang lebih personal.
                    </p>
                    <div class="progress-container">
                        <div class="progress-label">Kelengkapan Profil: 40%</div>
                        <div class="progress-bar">
                            <div class="progress-fill"></div>
                        </div>
                    </div>
                    <a href="{{ route('profile.index') }}" class="notification-link">
                        <i>✏️</i> Klik di sini untuk melengkapi
                    </a>
                </div>
            </div>
        @endif

        <!-- Quick Actions -->
        <div class="quick-actions">
            <div class="action-card blue">
                <div class="action-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h4><a href="{{ route('search') }}">Cari Penerbangan</a></h4>
            </div>
            <div class="action-card brown">
                <div class="action-icon">
                    <i class="fas fa-ticket-alt"></i>
                </div>
                <h4><a href="{{ route('reservations.index') }}">Pemesanan Saya</a></h4>
            </div>
            <div class="action-card green">
                <div class="action-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h4><a href="{{ route('search') }}">Check-in Online</a></h4>
            </div>
        </div>

        <!-- Recent Flights -->
        <div class="content-section">
            <div class="section-header">
                <h3><i class="fas fa-history me-2" style="color: #87CEEB;"></i>Riwayat Penerbangan</h3>
            </div>

            @forelse ($reservations as $reservation)
                <div class="reservation-card-item">
                    <div class="reservation-header">
                        <div class="reservation-id">#BK{{ str_pad($reservation->id, 6, '0', STR_PAD_LEFT) }}</div>
                        <div class="reservation-status status-completed">{{ ucfirst($reservation->status) }}</div>
                    </div>

                    <div class="flight-info">
                        <div class="airport-info">
                            <div class="airport-code">{{ $reservation->flight->route->origin }}</div>
                            <div class="airport-name">{{ $reservation->flight->route->origin_name ?? '-' }}</div>
                            <div class="detail-value">{{ $reservation->flight->departure_time->format('H:i') }}</div>
                        </div>
                        <div class="flight-arrow">
                            <i class="fas fa-plane"></i>
                            <div class="flight-duration">
                                {{-- Durasi bisa dihitung dari selisih waktu --}}
                                {{ $reservation->flight->arrival_time->diffInHours($reservation->flight->departure_time) }}h
                                {{ $reservation->flight->arrival_time->diff($reservation->flight->departure_time)->format('%I') }}m
                            </div>
                        </div>
                        <div class="airport-info">
                            <div class="airport-code">{{ $reservation->flight->route->destination }}</div>
                            <div class="airport-name">{{ $reservation->flight->route->destination_name ?? '-' }}</div>
                            <div class="detail-value">{{ $reservation->flight->arrival_time->format('H:i') }}</div>
                        </div>
                    </div>

                    <div class="reservation-details">
                        <div class="detail-item">
                            <div class="detail-label">Tanggal</div>
                            <div class="detail-value">{{ $reservation->flight->departure_time->format('d M Y') }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Penerbangan</div>
                            <div class="detail-value">{{ $reservation->flight->flight_code }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Jumlah Tiket</div>
                            <div class="detail-value">{{ $reservation->ticket_quantity }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Total Harga</div>
                            <div class="detail-value">Rp{{ number_format($reservation->total_price, 0, ',', '.') }}
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-muted text-center mt-3">Belum ada riwayat penerbangan.</p>
            @endforelse
        </div>
    </main>
</x-nav>