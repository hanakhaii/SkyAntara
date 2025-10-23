<x-sidebar>
    <main class="main-content">
        <!-- Flight Routes -->
        <div class="content-card">
            <div class="card-header-custom">
                <h4><i class="fa-solid fa-route me-2" style="color: #87CEEB;"></i>Semua Rute Terdaftar</h4>
                <a href="{{ route('admin.flightroutes.create') }}" class="btn-action btn-primary-custom">
                    <i class="fas fa-plus me-2"></i>Tambah Rute
                </a>
            </div>
            <div class="table-responsive">
                <table class="table-custom">
                    <thead>
                        <tr>
                            <th>ID Rute</th>
                            <th>Bandara Asal</th>
                            <th>Bandara Destinasi</th>
                            <th>Durasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($routes as $route)
                            <tr>
                                <td><strong>{{ $route->id }}</strong></td>
                                <td>{{ $route->origin }}</td>
                                <td>
                                    {{ $route->destination }}
                                </td>
                                <td>{{ $route->duration }}</td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('admin.flightroutes.edit', $route->id) }}" class="btn-icon edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.flightroutes.destroy', $route->id) }}" method="POST" style="display:inline;">
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
                                <td colspan="6" class="text-center">Belum ada rute.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</x-sidebar>
