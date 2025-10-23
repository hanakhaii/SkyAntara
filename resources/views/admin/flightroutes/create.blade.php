<x-adminform>
    @section('form-title', 'Tambah Rute Baru')

    <!-- Form Container -->
    <div class="form-container">
        <div class="form-header">
            <h3>Tambah Rute Baru</h3>
            <p>Lengkapi informasi di bawah ini untuk menambahkan rute penerbangan baru</p>
        </div>

        <div class="alert-info">
            <i class="fas fa-info-circle"></i>
            <p>Pastikan semua informasi yang dimasukkan sudah benar. Data yang telah disimpan akan langsung tersedia
                untuk pemesanan penumpang.</p>
        </div>

        <form action="{{ route('admin.flightroutes.index') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Bandara Keberangkatan<span class="required">*</span></label>
                    <input type="text" class="form-control" name="origin" placeholder="Contoh : Jakarta" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Bandara Tujuan<span class="required">*</span></label>
                    <input type="text" class="form-control" name="destination" placeholder="Contoh : Bali" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Durasi Penerbangan</label>
                    <input type="text" class="form-control" name="duration" placeholder="Contoh : 3h 15m" required>
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
    </div>
    </form>
    </div>
</x-adminform>
