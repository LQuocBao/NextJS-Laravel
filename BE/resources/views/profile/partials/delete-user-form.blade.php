<div class="card shadow-lg border-0 rounded-5">
    <div class="card-header bg-danger text-white rounded-top-5">
        <h5>Xóa tài khoản</h5>
    </div>
    <div class="card-body bg-black text-white rounded-bottom-5">
        <p class="text-danger">Cảnh báo: Hành động này không thể hoàn tác. Tài khoản của bạn sẽ bị xóa vĩnh viễn.</p>
        <form method="post" action="{{ route('profile.destroy') }}">
            @csrf
            @method('delete')
            <div class="mb-3">
                <label for="password" class="form-label" style="color: black">Nhập mật khẩu để xác nhận</label>
                <input type="password" class="form-control rounded-4 border-warning" id="password" name="password"
                    required>
            </div>
            <button type="submit" class="btn btn-danger text-white rounded-4">Xóa tài khoản</button>
        </form>
    </div>
</div>
