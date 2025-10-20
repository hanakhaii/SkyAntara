<!-- Main Dashboard -->
<div class="dashboard-container">
        <!-- Reminder for Complete Profile -->
        @if ($isProfileIncomplete)
            <div class="notification-container">
            <div class="profile-notification pulse">
                <div class="notification-header">
                    <div class="notification-icon">!</div>
                    <h3 class="notification-title">Lengkapi Profil Anda!</h3>
                </div>
                <p class="notification-content">
                    Beberapa informasi penting masih kosong. Profil yang lengkap akan membantu kami memberikan pengalaman yang lebih personal.
                </p>
                <div class="progress-container">
                    <div class="progress-label">Kelengkapan Profil: 40%</div>
                    <div class="progress-bar">
                        <div class="progress-fill"></div>
                    </div>
                </div>
            </div>
        </div>
        @endif

    <!-- Profile Section -->
    <div class="content-section">
        <div class="section-header">
            <h3>
                <i class="fas fa-user me-2" style="color: #87CEEB;"></i>
                Profil Saya
            </h3>
            <a href="{{ route('profile.edit') }}" class="btn-custom btn-edit">
                <i class="fas fa-edit"></i>
                Edit Profile
            </a>
        </div>

        <div class="profile-card">
            <!-- Profile Sidebar -->
            <div class="profile-sidebar">
                <div class="profile-avatar-large">Ha</div>
                <div class="profile-name">{{ $user->name }}</div>
                <div class="profile-email">{{ $user->email }}</div>
                <div class="profile-stats">
                    <div class="stat-item">
                        <div class="stat-number">12</div>
                        <div class="stat-label">Penerbangan</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">5</div>
                        <div class="stat-label">Kota</div>
                    </div>
                </div>
            </div>

            <!-- Profile Information -->
            <div class="profile-info">
                <h4 style="color: #4a3933; margin-bottom: 25px; font-weight: 600;">
                    Informasi Personal
                </h4>

                <div class="info-row">
                    <div class="info-item">
                        <div class="info-label">Nama Lengkap</div>
                        <div class="info-value">{{ $user->name }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Email</div>
                        <div class="info-value">{{ $user->email }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">National ID</div>
                        <div class="info-value">{{ $user->national_id ?? '-' }}</div>
                    </div>
                </div>

                <div class="info-row">
                    <div class="info-item">
                        <div class="info-label">No. Telepon</div>
                        <div class="info-value">{{ $user->phone ?? '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Tanggal Lahir</div>
                        <div class="info-value">{{ $user->date_of_birth?->format('d F Y') ?? '-' }}</div>
                    </div>
                </div>

                <div class="info-row">
                    <div class="info-item">
                        <div class="info-label">Alamat</div>
                        <div class="info-value">{{ $user->address ?? '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Member Since</div>
                        <div class="info-value">{{ $user->created_at->format('d F Y') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>