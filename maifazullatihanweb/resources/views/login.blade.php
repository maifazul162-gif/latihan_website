<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login | Sistem Penjualan Rumah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* 🌈 Tema biru–kuning–hijau lembut */
    body {
      background: linear-gradient(135deg, #a8dadc, #f1fa8c, #b7e4c7);
      font-family: "Poppins", sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Kartu login */
    .card {
      border: none;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      animation: fadeInUp 0.8s ease-in-out;
    }

    .card-header {
      background: linear-gradient(to right, #0077b6, #00b4d8);
      color: #fff;
      text-align: center;
      font-weight: 600;
      letter-spacing: 0.5px;
      padding: 15px 0;
    }

    .card-body {
      background: #ffffff;
      padding: 30px;
    }

    .card-footer {
      background: #f9f9f9;
      text-align: center;
      font-size: 0.9rem;
      color: #444;
    }

    .form-label {
      font-weight: 500;
      color: #023e8a;
    }

    .form-control {
      border-radius: 12px;
      border: 1px solid #b0d0e0;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: #00b4d8;
      box-shadow: 0 0 6px rgba(0, 180, 216, 0.3);
    }

    .btn-login {
      background: linear-gradient(to right, #00b4d8, #90be6d);
      border: none;
      border-radius: 25px;
      font-weight: 600;
      padding: 10px;
      color: white;
      transition: all 0.3s ease;
    }

    .btn-login:hover {
      transform: scale(1.05);
      background: linear-gradient(to right, #0077b6, #74c69d);
    }

    /* Animasi lembut */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Alert error */
    .alert {
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h4>🏠 Login Sistem Penjualan Rumah</h4>
          </div>
          <div class="card-body">
            @if(session('error'))
              <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form action="{{ route('login.process') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-login">Login</button>
              </div>
            </form>
          </div>
          <div class="card-footer">
            <small>Gunakan username: <b>admin</b> dan password: <b>12345</b></small>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
