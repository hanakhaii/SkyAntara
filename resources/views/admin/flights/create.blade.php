<x-adminform>
    @section('form-title', 'Tambah Penerbangan Baru')

    <!-- Form Container -->
    <div class="form-container">
        <div class="form-header">
            <h3>Form Penerbangan Baru</h3>
            <p>Lengkapi informasi di bawah ini untuk menambahkan jadwal penerbangan baru</p>
        </div>

        <div class="alert-info">
            <i class="fas fa-info-circle"></i>
            <p>Pastikan semua informasi yang dimasukkan sudah benar. Data yang telah disimpan akan langsung tersedia
                untuk pemesanan penumpang.</p>
        </div>

        <form action="{{ route('admin.flights.index') }}" method="POST">
            @csrf
            <!-- Flight Information -->
            <div class="form-section">
                <h4 class="section-title">
                    <i class="fas fa-plane"></i>
                    Informasi Penerbangan
                </h4>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Nomor Penerbangan <span class="required">*</span></label>
                        <input type="text" class="form-control" name="flight_code" required>
                        <small class="form-help">Format: SA-XXX</small>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Rute Penerbangan<span class="required">*</span></label>
                        <select class="form-select" name="route_id" required>
                            <option value="">Pilih Rute</option>
                            @foreach ($routes as $route)
                                <option value="{{ $route->id }}">{{ $route->origin }} → {{ $route->destination }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <!-- Schedule -->
            <div class="form-section">
                <h4 class="section-title">
                    <i class="fas fa-calendar-alt"></i>
                    Jadwal Penerbangan
                </h4>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Waktu Keberangkatan <span class="required">*</span></label>
                        <input type="time" class="form-control" name="departure_time" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Waktu Tiba <span class="required">*</span></label>
                        <input type="time" class="form-control" name="arrival_time" required>
                    </div>
                </div>
            </div>

            <!-- Capacity & Pricing -->
            <div class="form-section">
                <h4 class="section-title">
                    <i class="fas fa-chair"></i>
                    Kapasitas & Harga
                </h4>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Harga <span class="required">*</span></label>
                        <div class="input-icon">
                            <input type="number" class="form-control" name="price"
                                required>
                            <i class="fas fa-money"></i>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Kapasitas Total <span class="required">*</span></label>
                        <div class="input-icon">
                            <input type="number" class="form-control" name="total_seats" placeholder="180"
                                required>
                            <i class="fas fa-users"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Kursi Tersedia</label>
                        <div class="input-icon">
                            <input type="number" class="form-control" name="available_seats" value="180" readonly>
                            <i class="fas fa-chair"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="form-section">
                <h4 class="section-title">
                    <i class="fas fa-info-circle"></i>
                    Informasi Tambahan
                </h4>

                <div class="form-group full-width">
                    <label class="form-label">Catatan</label>
                    <textarea class="form-control" name="notes" placeholder="Catatan khusus untuk penerbangan ini (opsional)"></textarea>
                </div>
            </div>
            <!-- Form Actions -->
            <div class="form-actions">
                <button type="button" class="btn-custom btn-secondary-admin">
                    <i class="fas fa-times"></i>
                    Batal
                </button>
                <button type="submit" class="btn-custom btn-primary-admin">
                    <i class="fas fa-save"></i>
                    Simpan Penerbangan
                </button>
            </div>
        </form>
    </div>
</x-adminform>
