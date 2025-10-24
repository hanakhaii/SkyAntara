<x-adminform>
    @section('form-title', 'Edit Penerbangan')

    <div class="form-container">
        <div class="form-header">
            <h3>Edit Jadwal Penerbangan</h3>
            <p>Perbarui informasi penerbangan di bawah ini untuk update jadwal penerbangan terbaru</p>
        </div>

        <form action="{{ route('admin.flights.update', $flight) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Flight Information -->
            <div class="form-section">
                <h4 class="section-title"><i class="fas fa-plane"></i> Informasi Penerbangan</h4>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Nomor Penerbangan <span class="required">*</span></label>
                        <input type="text" class="form-control" name="flight_code"
                            value="{{ old('flight_code', $flight->flight_code ?? '') }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Rute Penerbangan<span class="required">*</span></label>
                        <select class="form-select" name="route_id" required>
                            <option value="">Pilih Rute</option>
                            @foreach ($routes as $route)
                                <option value="{{ $route->id }}" 
                                    {{ old('route_id', $flight->route_id ?? '') == $route->id ? 'selected' : '' }}>
                                    {{ $route->origin }} → {{ $route->destination }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <!-- Schedule -->
            <div class="form-section">
                <h4 class="section-title"><i class="fas fa-calendar-alt"></i> Jadwal Penerbangan</h4>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Waktu Keberangkatan</label>
                        <input type="time" class="form-control" name="departure_time"
                            value="{{ old('departure_time', isset($flight->departure_time) ? date('H:i', strtotime($flight->departure_time)) : '') }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Waktu Tiba</label>
                        <input type="time" class="form-control" name="arrival_time"
                            value="{{ old('arrival_time', isset($flight->arrival_time) ? date('H:i', strtotime($flight->arrival_time)) : '') }}" required>
                    </div>
                </div>
            </div>

            <!-- Capacity & Pricing -->
            <div class="form-section">
                <h4 class="section-title"><i class="fas fa-chair"></i> Kapasitas & Harga</h4>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Harga</label>
                        <input type="number" class="form-control" name="price"
                            value="{{ old('price', $flight->price ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Kapasitas Total</label>
                        <input type="number" class="form-control" name="total_seats"
                            value="{{ old('total_seats', $flight->total_seats ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Kursi Tersedia</label>
                        <input type="number" class="form-control" name="available_seats"
                            value="{{ old('available_seats', $flight->available_seats ?? '') }}" readonly>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <a href="{{ route('admin.flights.index') }}" class="btn-custom btn-secondary-admin" style="text-decoration: none;">
                    <i class="fas fa-times"></i> Batal
                </a>
                <button type="submit" class="btn-custom btn-primary-admin">
                    <i class="fas fa-save"></i>Simpan Penerbangan
                </button>
            </div>
        </form>
    </div>
</x-adminform>
