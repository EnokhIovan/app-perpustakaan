<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Perpustakaan Digital Kampus</title>
    <style>
        body { font-family: sans-serif; margin: 0; background: #f1f5f9; display: flex; align-items: center; justify-content: center; min-height: 100vh;flex-direction: column; gap:8px }
        main { max-width: 900px; margin: 0 auto; padding: 30px 40px; }
        .error { color: #b91c1c; font-size: 14px; margin-top: 4px; }
        .alert-success { background: #d1fae5; color: #065f46; padding: 10px 14px; border-radius: 4px; margin-bottom: 16px; }
        .box { background: #fff; padding: 32px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,.1); width: 100%; max-width: 360px; }
        .box h1 { font-size: 20px; margin-top: 0; text-align: center;}
        .subtitle { font-size: 18px; font-weight: bold}
        .info { margin-left: 0px; border-left: 4px solid #9fa816; padding-left: 8px}
        form div.label-and-input { margin: 8px 0; display: flex; flex-direction: column; }
        input { width: 100%; padding: 8px; margin-top: 4px; box-sizing: border-box; }
        .btn { display: block; text-align: center; margin-top: 20px; text-decoration: none; font-weight: bold; width: 100%; padding: 10px; background: #2563eb; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-size: 15px; }
    </style>
</head>
<body>
    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <div class="box">
        <h1>Profile</h1>
        <div class="information">
          <h2 class="subtitle">Nama:</h2>
          <p class="info">{{ auth()->user()->name }}</p>
          <h2 class="subtitle">Email:</h2>
          <p class="info">{{ auth()->user()->email }}</p>
          <h2 class="subtitle">Role:</h2>
          <p class="info">{{ ucfirst(auth()->user()->role) }}</p>
          <a class="btn" href="{{ url()->previous() }}">Kembali</a>
        </div>
    </div>
    <div class="box">
        <h1>Ubah Password</h1>
        <form action="{{ route('profile.password.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="label-and-input">
                <label for="current_password" class="subtitle">Password lama</label>
                <input type="password" name="current_password" id="current_password" required>
            </div>
            @error('current_password')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="label-and-input">
                <label for="password" class="subtitle">Password baru</label>
                <input type="password" name="password" id="password" required>
            </div>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="label-and-input">
                <label for="password_confirmation" class="subtitle">Konfirmasi Password baru</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>

            <button type="submit" class="btn">Ubah Password</button>
        </form>
    </div>
</body>
</html>
