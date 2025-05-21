{{-- Nazwa i email --}}
<div class="row mb-2">
    <div class="col-lg-6">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Nazwa</label>
            <div class="col-12">
                <input type="text" name="name"
                       class="form-control form-control-sm @error('name') is-invalid @enderror"
                       value="{{ old('name', $formObject->name) }}">
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Email</label>
            <div class="col-12">
                <input type="email" name="email"
                       class="form-control form-control-sm @error('email') is-invalid @enderror"
                       value="{{ old('email', $formObject->email) }}">
            </div>
        </div>
    </div>
</div>

{{-- Rola --}}
<div class="row mb-2">
    <div class="col-12">
        <label class="col-form-label col-form-label-sm">Rola</label>
        <select name="role" class="form-select form-select-sm w-100 @error('role') is-invalid @enderror">
            <option value="user" {{ old('role', $formObject->role) === 'user' ? 'selected' : '' }}>Użytkownik</option>
            <option value="admin" {{ old('role', $formObject->role) === 'admin' ? 'selected' : '' }}>Admin</option>
        </select>
    </div>
</div>

{{-- Hasło --}}
<div class="row mb-2">
    <div class="col-lg-12">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Hasło</label>
            <div class="col-12">
                <input type="password" name="password"
                       class="form-control form-control-sm @error('password') is-invalid @enderror">
            </div>
        </div>
    </div>
</div>

{{-- Potwierdzenie hasła --}}
<div class="row mb-2">
    <div class="col-lg-12">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Potwierdź hasło</label>
            <div class="col-12">
                <input type="password" name="password_confirmation"
                       class="form-control form-control-sm @error('password_confirmation') is-invalid @enderror">
            </div>
        </div>
    </div>
</div>

