<x-sidebar>
    <main class="main-content">
        <div class="content-card">
            <div class="card-header-custom d-flex justify-content-between align-items-center">
                <h4><i class="fas fa-plane me-2" style="color: #87CEEB;"></i>Data Penerbangan</h4>
                <a href="{{ route('admin.flights.create') }}" class="btn-action btn-primary-custom">
                    <i class="fas fa-plus me-2"></i>Tambah Penerbangan
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped align-middle table-custom">
                    <thead class="table-light">
                        <tr>
                            <th>Kode Penerbangan</th>
                            <th>Rute</th>
                            <th>Waktu</th>
                            <th>Harga</th>
                            <th>Kapasitas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($flights as $flight)
                            <tr>
                                <td><strong>{{ $flight->flight_code }}</strong></td>
                                <td>
                                    {{ $flight->route->origin ?? '-' }} → {{ $flight->route->destination ?? '-' }}
                                </td>
                                <td>
                                    {{ $flight->departure_time->format('H:i') ?? '-' }} → {{ $flight->arrival_time->format('H:i') ?? '-' }}
                                </td>
                                <td>Rp{{ number_format($flight->price, 0, ',', '.') }}</td>
                                <td>{{ $flight->total_seats }} / {{ $flight->available_seats }}</td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('admin.flights.edit', $flight->id) }}" class="btn-icon edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.flights.destroy', $flight->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-icon delete" onclick="return confirm('Hapus penerbangan ini?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">Belum ada data penerbangan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</x-sidebar>