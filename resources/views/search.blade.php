<x-nav title="Cari Penerbangan">
    <main>
        <!-- Hero Section -->
        <div class="hero-section">
            <div class="hero-content">
                <h1>Temukan Penerbangan Murah!</h1>
                <p>Jelajahi destinasi impian Anda dengan harga terbaik</p>
            </div>
        </div>

        <!-- Search Container -->
        <div class="search-container">
            <div class="search-card">
                <!-- Trip Type Tabs -->
                <div class="trip-tabs">
                    <button class="trip-tab active" data-trip="oneway">
                        <i class="fas fa-arrow-right me-2"></i>Sekali Jalan
                    </button>
                    <button class="trip-tab" data-trip="roundtrip">
                        <i class="fas fa-exchange-alt me-2"></i>Pulang-Pergi
                    </button>
                    <button class="trip-tab" data-trip="multicity">
                        <i class="fas fa-map-marked-alt me-2"></i>Multi-Kota
                    </button>
                </div>

                <!-- Search Form -->
                <form>
                    <div class="search-form">
                        <!-- From -->
                        <div class="form-group" style="position: relative;">
                            <label>Dari</label>
                            <i class="fas fa-plane-departure input-icon"></i>
                            <select class="form-control">
                                <option>Jakarta (CGK)</option>
                                <option>Surabaya (SUB)</option>
                                <option>Bali (DPS)</option>
                                <option>Yogyakarta (JOG)</option>
                                <option>Medan (KNO)</option>
                                <option>Makassar (UPG)</option>
                            </select>
                            <button type="button" class="swap-button">
                                <i class="fas fa-exchange-alt"></i>
                            </button>
                        </div>

                        <!-- To -->
                        <div class="form-group">
                            <label>Ke</label>
                            <i class="fas fa-plane-arrival input-icon"></i>
                            <select class="form-control">
                                <option>Bali (DPS)</option>
                                <option>Jakarta (CGK)</option>
                                <option>Surabaya (SUB)</option>
                                <option>Yogyakarta (JOG)</option>
                                <option>Medan (KNO)</option>
                                <option>Makassar (UPG)</option>
                            </select>
                        </div>

                        <!-- Dates -->
                        <div class="date-range">
                            <div class="form-group">
                                <label>Tanggal Berangkat</label>
                                <i class="fas fa-calendar input-icon"></i>
                                <input type="date" class="form-control" value="2025-10-18">
                            </div>
                            <div class="form-group" id="returnDateField">
                                <label>Tanggal Pulang</label>
                                <i class="fas fa-calendar input-icon"></i>
                                <input type="date" class="form-control">
                            </div>
                        </div>

                        <!-- Passengers & Class -->
                        <div class="passenger-class">
                            <div class="form-group">
                                <label>Jumlah Penumpang</label>
                                <i class="fas fa-users input-icon"></i>
                                <select class="form-control">
                                    <option>1 Dewasa, 0 Anak, 0 Bayi</option>
                                    <option>2 Dewasa, 0 Anak, 0 Bayi</option>
                                    <option>2 Dewasa, 1 Anak, 0 Bayi</option>
                                    <option>3 Dewasa, 0 Anak, 0 Bayi</option>
                                    <option>4 Dewasa, 0 Anak, 0 Bayi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <i class="fas fa-couch input-icon"></i>
                                <select class="form-control">
                                    <option>Ekonomi</option>
                                    <option>Bisnis</option>
                                    <option>First Class</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Options -->
                    <div class="options-row">
                        <div class="checkbox-option">
                            <input type="checkbox" id="directFlight" checked>
                            <label for="directFlight">Penerbangan Langsung</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="flexibleDates">
                            <label for="flexibleDates">Tanggal Fleksibel</label>
                        </div>
                    </div>

                    <!-- Search Button -->
                    <button type="submit" class="btn-search">
                        <i class="fas fa-search me-2"></i>
                        Cari Penerbangan
                    </button>
                </form>
            </div>
        </div>

        <!-- Features Section -->
        <div class="features-section">
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h4>Harga Terbaik</h4>
                    <p>Bandingkan harga dari berbagai maskapai dan dapatkan penawaran terbaik</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>Pembayaran Aman</h4>
                    <p>Transaksi dilindungi dengan enkripsi standar internasional</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h4>Dukungan 24/7</h4>
                    <p>Tim customer service kami siap membantu Anda kapan saja</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h4>Promo Eksklusif</h4>
                    <p>Dapatkan diskon dan penawaran spesial untuk pengguna setia</p>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="stats-section">
            <div class="stats-container">
                <div class="stat-item">
                    <h3>50M+</h3>
                    <p>Total Penumpang</p>
                </div>
                <div class="stat-item">
                    <h3>150+</h3>
                    <p>Destinasi</p>
                </div>
                <div class="stat-item">
                    <h3>1M+</h3>
                    <p>Pengguna Aktif</p>
                </div>
                <div class="stat-item">
                    <h3>24/7</h3>
                    <p>Layanan Pelanggan</p>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Trip type tabs functionality
        const tripTabs = document.querySelectorAll('.trip-tab');
        const returnDateField = document.getElementById('returnDateField');

        tripTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                tripTabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                const tripType = this.getAttribute('data-trip');
                
                // Show/hide return date based on trip type
                if (tripType === 'oneway') {
                    returnDateField.style.display = 'none';
                } else if (tripType === 'roundtrip') {
                    returnDateField.style.display = 'block';
                }
            });
        });

        // Swap button functionality
        const swapButton = document.querySelector('.swap-button');
        swapButton.addEventListener('click', function() {
            const fromSelect = document.querySelector('.search-form .form-group:first-child select');
            const toSelect = document.querySelector('.search-form .form-group:nth-child(2) select');
            
            const temp = fromSelect.value;
            fromSelect.value = toSelect.value;
            toSelect.value = temp;
        });

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Mencari penerbangan... Fitur ini akan menampilkan hasil pencarian!');
        });
    </script>
</x-nav>