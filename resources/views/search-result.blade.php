<x-nav>
    @section('form-title', 'Hasil Pencarian - SkyAntara')
    
    <!-- Hero Section -->
    <div class="search-hero">
        <div class="search-hero-content">
            <h1>Hasil Pencarian Penerbangan</h1>
            <p class="search-subtitle">
                <i class="fas fa-plane-departure me-2"></i>
                Dari <strong>{{ $origin }}</strong> ke <strong>{{ $destination }}</strong>
            </p>
        </div>
    </div>

    <main class="search-results-container">
        <!-- Results Summary -->
        <div class="results-summary">
            <div class="summary-content">
                <h3>
                    <i class="fas fa-search me-2"></i>
                    @if($flights->isEmpty())
                        Tidak ada penerbangan ditemukan
                    @else
                        Menemukan {{ $flights->count() }} penerbangan
                    @endif
                </h3>
                <p class="text-muted">Hasil pencarian untuk rute yang Anda cari</p>
            </div>
        </div>

        @if($flights->isEmpty())
            <!-- Empty State -->
            <div class="empty-search-state">
                <div class="empty-icon">
                    <i class="fas fa-plane-slash"></i>
                </div>
                <h4>Tidak Ada Penerbangan Ditemukan</h4>
                <p class="text-muted">Maaf, tidak ada penerbangan yang sesuai dengan kriteria pencarian Anda.</p>
                <a href="{{ route('search') }}" class="btn-custom btn-primary-sky">
                    <i class="fas fa-search me-2"></i>Cari Penerbangan Lain
                </a>
            </div>
        @else
            <!-- Flight Results -->
            <div class="flight-results-grid">
                @foreach($flights as $flight)
                    <div class="flight-card">
                        <div class="flight-card-header">
                            <div class="flight-code">
                                <i class="fas fa-plane me-2"></i>
                                {{ $flight->flight_code }}
                            </div>
                            <div class="flight-price">
                                Rp {{ number_format($flight->price, 0, ',', '.') }}
                                <span class="price-label">/orang</span>
                            </div>
                        </div>

                        <div class="flight-route">
                            <div class="route-section">
                                <div class="airport-info">
                                    <div class="airport-code">{{ $flight->route->origin }}</div>
                                    <div class="airport-name">{{ $flight->route->origin_name ?? '-' }}</div>
                                    <div class="flight-time">{{ $flight->departure_time->format('H:i') }}</div>
                                </div>
                            </div>

                            <div class="route-connector">
                                <div class="flight-duration">
                                    {{ $flight->arrival_time->diffInHours($flight->departure_time) }}j 
                                    {{ $flight->arrival_time->diff($flight->departure_time)->format('%I') }}m
                                </div>
                                <div class="connector-line">
                                    <div class="connector-dot start"></div>
                                    <div class="connector-line-main"></div>
                                    <div class="connector-dot end"></div>
                                </div>
                                <div class="connector-icon">
                                    <i class="fas fa-plane"></i>
                                </div>
                            </div>

                            <div class="route-section">
                                <div class="airport-info">
                                    <div class="airport-code">{{ $flight->route->destination }}</div>
                                    <div class="airport-name">{{ $flight->route->destination_name ?? '-' }}</div>
                                    <div class="flight-time">{{ $flight->arrival_time->format('H:i') }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="flight-details">
                            <div class="detail-item">
                                <i class="fas fa-calendar me-2"></i>
                                {{ $flight->departure_time->format('d M Y') }}
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-clock me-2"></i>
                                {{ $flight->departure_time->format('H:i') }} - {{ $flight->arrival_time->format('H:i') }}
                            </div>
                        </div>

                        <div class="flight-card-actions">
                            <a href="{{ route('reservations.create', $flight->id) }}" class="btn-book-flight">
                                <i class="fas fa-ticket-alt me-2"></i>
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Load More Section -->
            <div class="load-more-section">
                <button class="btn-load-more">
                    <i class="fas fa-redo me-2"></i>
                    Muat Lebih Banyak
                </button>
            </div>
        @endif
    </main>
</x-nav>