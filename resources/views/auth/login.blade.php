<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Marketplace</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />

  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #ffe5ef;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }
    .login-card {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }
    .logo {
      width: 70px;
      margin-bottom: 15px;
    }
    h3 {
      color: #cc5f8e;
      margin-bottom: 15px;
      font-weight: 700;
    }
    .btn-login {
      background-color: #ff93bd;
      border: none;
      border-radius: 10px;
      padding: 12px;
      font-weight: 600;
      color: white;
      width: 100%;
      transition: background-color 0.3s;
    }
    .btn-login:hover {
      background-color: #ff7eb1;
    }
    .form-control {
      border-radius: 10px;
      padding: 10px 15px;
      border: 1px solid #f4b6c8;
      margin-bottom: 15px;
    }
    a {
      color: #d46a97;
      font-weight: 500;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
    .alert {
      margin-bottom: 15px;
      font-weight: 600;
      font-size: 0.9rem;
    }
  </style>
</head>

<body>

<div class="login-card">

    <h3>Login ke Akun Anda</h3>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('login.process') }}" method="POST" novalidate>
        @csrf

        <input
          type="text"
          name="username"
          class="form-control @error('username') is-invalid @enderror"
          placeholder="Masukkan Username"
          value="{{ old('username') }}"
          required
          autofocus
        />
        @error('username')
            <div class="text-danger mb-2 small">{{ $message }}</div>
        @enderror

        <input
          type="password"
          name="password"
          class="form-control @error('password') is-invalid @enderror"
          placeholder="Masukkan Password"
          required
        />
        @error('password')
            <div class="text-danger mb-2 small">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-login">
            Login
        </button>
    </form>

    <p class="mt-4">
        Belum punya akun? <a href="#">Hubungi Admin</a>
    </p>
</div>

</body>
</html>
