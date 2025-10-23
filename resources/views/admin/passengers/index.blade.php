<x-sidebar>
    <main class="main-content">
        <!-- Passenger -->
        <div class="content-card">
            <div class="card-header-custom">
                <h4><i class="fas fa-user-alt me-2" style="color: #87CEEB;"></i>Pemesan Terdaftar</h4>
            </div>
            <div class="table-responsive">
                <table class="table-custom">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Reservasi</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>ID Nasional</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($passengers as $passenger)
                            <tr>
                                <th><strong>{{ $no == 1 }}</strong></th>
                                <td><strong>{{ $passenger->reservation_id }}</strong></td>
                                <td>{{ $passenger->full_name ?? 'Tidak diketahui' }}</td>
                                <td>{{ $passenger->gender }}</td>
                                <td>
                                    <span class="badge-status badge-success">
                                        {{ $passenger->birth_date->format('d M Y') }}
                                    </span>
                                </td>
                                <td>Rp {{ $passenger->national_id }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Belum ada pemesan terbaru.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</x-sidebar>
