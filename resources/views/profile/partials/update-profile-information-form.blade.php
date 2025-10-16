<x-nav title="Dashboard SkyAntara">
    <!-- Profile Section -->
    <main class="content-section" id="profile">
        <div class="section-header">
            <h3><i class="fas fa-user me-2" style="color: #87CEEB;"></i>Profil Saya</h3>
        </div>

        <div class="profile-grid">
            <div class="profile-sidebar">
                <div class="profile-avatar-large">{{ substr($user->name, 0, 2) }}</div>
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
                    <div class="stat-item">
                        <div class="stat-number">8.5K</div>
                        <div class="stat-label">Poin</div>
                    </div>
                </div>
            </div>

            <div class="profile-content">
                <h4 style="color: #4a3933; margin-bottom: 25px; font-weight: 600;">Informasi Personal</h4>
                
                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>

                <form method="post" action="{{ route('profile.update') }}" class="profile-form">
                    @csrf
                    @method('patch')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" placeholder="Nama Lengkap">
                                @error('name')
                                    <div class="input-error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" name="email" type="email" class="mt-1 block w-full" value="{{ old('email', $user->email) }}" required autocomplete="username" placeholder="Email">
                                @error('email')
                                    <div class="input-error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div class="mt-4">
                            <p class="text-sm text-gray-800 dark:text-gray-200">
                                {{ __('Your email address is unverified.') }}

                                <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif

                    <div class="text-end mt-4">
                        <button type="submit" class="btn-custom btn-primary-sky">
                            <i class="fas fa-save me-2"></i>Simpan Perubahan
                        </button>

                        @if (session('status') === 'profile-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600 dark:text-gray-400"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-nav>