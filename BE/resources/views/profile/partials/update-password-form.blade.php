<section>
    <style>
    </style>
    <div class="card shadow-lg border-0 rounded-5 ">
        <div class="card-header bg-warning text-black rounded-top-5">
            <h5 class="mb-0">Đổi mật khẩu</h5>
        </div>
        <div class="card-body bg-black text-white rounded-bottom-5">
            <form method="post" action="{{ route('password.update') }}">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="current_password" class="form-label" style="color: black">Mật khẩu hiện tại</label>
                    <input type="password" class="form-control rounded-4 border-warning" id="current_password"
                        name="current_password" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label" style="color: black">Mật khẩu mới</label>
                    <input type="password" class="form-control rounded-4 border-warning" id="password" name="password"
                        required>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label" style="color: black">Xác nhận mật khẩu
                        mới</label>
                    <input type="password" class="form-control rounded-4 border-warning" id="password_confirmation"
                        name="password_confirmation" required>
                </div>
                <button type="submit" class="btn btn-warning text-black rounded-4">Cập nhật mật khẩu</button>
            </form>
        </div>
    </div>
</section>
