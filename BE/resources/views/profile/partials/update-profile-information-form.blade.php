<section>
    <header>
        <h2 class="text-center font-medium text-gray-900 dark:text-gray-100">
            {{ __('Thông tin cá nhân') }}
        </h2>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <div class="card shadow-lg border-0 rounded-5 mt-6">
        <div class="card-header bg-warning text-black rounded-top-5">
            <h5 class="mb-0">Cập nhật thông tin cá nhân</h5>
        </div>
        <div class="card-body bg-black text-white rounded-bottom-5">
            <form method="post" action="{{ route('profile.update') }}">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="name" class="form-label" style="color: black">Tên</label>
                    <input type="text" class="form-control rounded-4 border-warning" id="name" name="name"
                        value="{{ old('name', $user->name) }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" style="color: black">Email</label>
                    <input type="email" class="form-control rounded-4 border-warning" id="email" name="email"
                        value="{{ old('email', $user->email) }}" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label" style="color: black">Số điện thoại</label>
                    <input type="text" class="form-control rounded-4 border-warning" id="phone" name="phone"
                        value="{{ old('phone', $user->phone) }}" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label" style="color: black">Địa chỉ</label>
                    <input type="text" class="form-control rounded-4 border-warning" id="address" name="address"
                        value="{{ old('address', $user->address) }}" required>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label" style="color: black">Giới tính</label>
                    <select class="form-control rounded-4 border-warning" id="gender" name="gender" required>
                        <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>Nam
                        </option>
                        <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>Nữ
                        </option>
                        {{-- <option value="other" {{ old('gender', $user->gender) == 'other' ? 'selected' : '' }}>Khác
                        </option> --}}
                    </select>
                </div>
                <button type="submit" class="btn btn-warning text-black rounded-4">Lưu thay đổi</button>
            </form>
        </div>
    </div>
</section>
