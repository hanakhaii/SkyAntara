<x-nav title="Dashboard SkyAntara">
    <!-- Profile Section -->
    <main class="content-section" id="profile">
        <div class="section-header">
            <h3><i class="fas fa-user me-2" style="color: #87CEEB;"></i>Profil Saya</h3>
        </div>

        <div class="profile-grid">
            <div class="profile-sidebar">
                <div class="profile-avatar-large">BS</div>
                <div class="profile-name">Budi Santoso</div>
                <div class="profile-email">budi.santoso@email.com</div>
                <div class="profile-stats">
                    <div class="stat-item">
                        <div class="stat-number">12</div>
                        <div class="stat-label">Penerbangan</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">5</div>
                        <div class="stat-label">Kota</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">8.5K</div>
                        <div class="stat-label">Poin</div>
                    </div>
                </div>
            </div>

            <div class="profile-content">
                <h4 style="color: #4a3933; margin-bottom: 25px; font-weight: 600;">Informasi Personal</h4>
                <form class="profile-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" value="Budi Santoso" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" value="budi.santoso@email.com" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No. Telepon</label>
                                <input type="tel" value="+62 812 3456 7890" placeholder="No. Telepon">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" value="1990-05-15">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" value="Jl. Sudirman No. 123, Jakarta" placeholder="Alamat Lengkap">
                    </div>
                    <div class="text-end mt-4">
                        <button type="submit" class="btn-custom btn-primary-sky">
                            <i class="fas fa-save me-2"></i>Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
<x-nav title="Dashboard SkyAntara">