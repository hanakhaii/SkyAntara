<x-adminform>
    @section('form-title', 'Edit Rute')

    <div class="form-container">
        <div class="form-header">
            <h3>Edit Jadwal Penerbangan</h3>
            <p>Perbarui informasi penerbangan di bawah ini untuk update rute terbaru</p>
        </div>

        <form action="{{ route('admin.flightroutes.update', $route) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Flight Information -->
            <div class="form-section">
                <h4 class="section-title"><i class="fas fa-plane"></i> Informasi Penerbangan</h4>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Bandara Keberangkatan <span class="required">*</span></label>
                        <input type="text" class="form-control" name="origin"
                            value="{{ old('origin', $route->origin ?? '') }}" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Bandara Tujuan<span class="required">*</span></label>
                            <input type="text" class="form-control" name="destination"
                                value="{{ old('origin', $route->destination ?? '') }}" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Durasi Penerbangan<span class="required">*</span></label>
                            <input type="text" class="form-control" name="duration"
                                value="{{ old('origin', $route->duration ?? '') }}" required>
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
