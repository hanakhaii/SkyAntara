<div class="content-section" id="delete-account-section">
    <div class="section-header">
        <h3><i class="fas fa-exclamation-triangle me-2" style="color: #dc3545;"></i>Delete Account</h3>
    </div>

    <div class="profile-content">
        <p class="form-description">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>

        <button
            class="btn-custom btn-danger"
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        >
            <i class="fas fa-trash me-2"></i>Delete Account
        </button>

        <div class="modal-overlay" x-data="{ open: false }" x-show="open" x-on:open-modal.window="open = $event.detail === 'confirm-user-deletion'">
            <div class="modal-content" x-show="open" x-transition>
                <form method="post" action="{{ route('profile.destroy') }}" class="modal-form">
                    @csrf
                    @method('delete')

                    <h3 class="modal-title">
                        {{ __('Are you sure you want to delete your account?') }}
                    </h3>

                    <p class="modal-description">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>

                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            class="form-input"
                            placeholder="{{ __('Enter your password') }}"
                        />
                        @error('password', 'userDeletion')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="modal-actions">
                        <button type="button" class="btn-custom btn-secondary" x-on:click="open = false">
                            <i class="fas fa-times me-2"></i>Cancel
                        </button>

                        <button type="submit" class="btn-custom btn-danger">
                            <i class="fas fa-trash me-2"></i>Delete Account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>