<div class="content-section" id="password-section">
    <div class="section-header">
        <h3><i class="fas fa-lock me-2" style="color: #87CEEB;"></i>Update Password</h3>
    </div>

    <div class="profile-content">
        <p class="form-description">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>

        <form method="post" action="{{ route('password.update') }}" class="profile-form">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="update_password_current_password">Current Password</label>
                <input id="update_password_current_password" name="current_password" type="password" class="form-input" autocomplete="current-password" />
                @error('current_password', 'updatePassword')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="update_password_password">New Password</label>
                <input id="update_password_password" name="password" type="password" class="form-input" autocomplete="new-password" />
                @error('password', 'updatePassword')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="update_password_password_confirmation">Confirm Password</label>
                <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-input" autocomplete="new-password" />
                @error('password_confirmation', 'updatePassword')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-end mt-4">
                <button type="submit" class="btn-custom btn-primary-sky">
                    <i class="fas fa-save me-2"></i>Update Password
                </button>

                @if (session('status') === 'password-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="save-success-message"
                    >{{ __('Password updated successfully.') }}</p>
                @endif
            </div>
        </form>
    </div>
</div>