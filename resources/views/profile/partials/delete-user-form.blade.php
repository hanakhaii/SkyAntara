<div class="content-section" id="delete-account-section">
    <div class="section-header">
        <h3><i class="fas fa-exclamation-triangle me-2" style="color: #dc3545;"></i>Delete Account</h3>
    </div>

    <div class="profile-content">
        <p class="form-description" style="font-size: 18px; margin-top: -30px;">
            {{ __('Setelah akun Anda dihapus, semua sumber daya dan data yang terkait dengan akun tersebut akan dihapus secara permanen. Sebelum menghapus akun Anda, silakan unduh semua data atau informasi yang ingin Anda simpan.') }}
        </p>

        <button
            class="btn-custom btn-danger"
            onclick="openDeleteModal()"
            >
            <i class="fas fa-trash me-2"></i>Delete Account
        </button>
    </div>
</div>

<!-- Modal -->
<div id="deleteModal" class="modal-overlay" style="display: none;">
    <div class="modal-content">
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
                <button type="button" class="btn-custom btn-secondary" onclick="closeDeleteModal()">
                    <i class="fas fa-times me-2"></i>Cancel
                </button>

                <button type="submit" class="btn-custom btn-danger">
                    <i class="fas fa-trash me-2"></i>Delete Account
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function openDeleteModal() {
    document.getElementById('deleteModal').style.display = 'flex';
}

function closeDeleteModal() {
    document.getElementById('deleteModal').style.display = 'none';
}

// Close modal when clicking outside
document.getElementById('deleteModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeDeleteModal();
    }
});
</script>