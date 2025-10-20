<div class="content-section" id="profile">
    <div class="section-header">
        <h3><i class="fas fa-user me-2" style="color: #87CEEB;"></i>Profil Saya</h3>
        <a href="{{ route('profile.index') }}" class="btn-custom btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>


    <div class="profile-grid">
        <div class="profile-sidebar">
            <div class="profile-avatar-large">{{ substr($user->name, 0, 2) }}</div>
            <div class="profile-name">{{ $user->name }}</div>
            <div class="profile-email">{{ $user->email }}</div>
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
                            <input id="name" name="name" type="text" class="mt-1 block w-full"
                                value="{{ old('name', $user->name) }}" required autofocus autocomplete="name"
                                placeholder="Nama Lengkap">
                            @error('name')
                                <div class="input-error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" class="mt-1 block w-full"
                                value="{{ old('email', $user->email) }}" required autocomplete="username"
                                placeholder="Email">
                            @error('email')
                                <div class="input-error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="national_id">National ID</label>
                            <input id="national_id" name="national_id" type="text" class="mt-1 block w-full"
                                value="{{ old('email', $user->national_id) }}" required autocomplete="username"
                                placeholder="Example: 2392038289390">
                            @error('email')
                                <div class="input-error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">No Telepon</label>
                            <input id="phone" name="phone" type="number" class="mt-1 block w-full"
                                value="{{ old('phone', $user->phone) }}" required autocomplete="username"
                                placeholder="Example : 628983748">
                            @error('phone')
                                <div class="input-error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_of_birth">Tanggal Lahir</label>
                            <input id="date_of_birth" name="date_of_birth" type="date" class="mt-1 block w-full"
                                value="{{ old('date_of_birth', $user->date_of_birth) }}" required autocomplete="username"
                                placeholder="Example : 628983748">
                            @error('date_of_birth')
                                <div class="input-error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea name="address" id="address" cols="5" rows="5"
                                    class="mt-1 block w-full"
                                    required autocomplete="street-address"
                                    placeholder="Example: Jl. Jeruk No. 100, Jakarta Utara">{{ old('address', $user->address) }}</textarea>
                            @error('address')
                                <div class="input-error text-red-600 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                    <div class="mt-4">
                        <p class="text-sm text-gray-800 dark:text-gray-200">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification"
                                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
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
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>