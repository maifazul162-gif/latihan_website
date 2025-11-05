<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda | Sistem Penjualan Rumah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* 🌈 Tema biru–kuning–hijau cerah */
    body {
      background: linear-gradient(135deg, #a8dadc, #f1fa8c, #b7e4c7);
      font-family: "Poppins", sans-serif;
      color: #2b2b2b;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      overflow-x: hidden;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(to right, #0077b6, #00b4d8);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .navbar-brand {
      font-weight: 700;
      letter-spacing: 0.5px;
    }

    .btn-outline-light {
      border-radius: 30px;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
      background-color: #f9c74f;
      border-color: #f9c74f;
      color: #003049;
    }

    /* Hero Section */
    .hero-section {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 60px 20px;
    }

    .hero-section h1 {
      font-size: 2.7rem;
      font-weight: 700;
      color: #023e8a;
    }

    .hero-section p {
      color: #1b4332;
      font-size: 1.1rem;
      margin-top: 10px;
    }

    .hero-img {
      width: 250px;
      margin-top: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-8px); }
    }

    /* Footer */
    footer {
      background: linear-gradient(to right, #00b4d8, #0077b6);
      color: #fff;
      text-align: center;
      padding: 15px;
      font-size: 0.9rem;
      letter-spacing: 0.5px;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('beranda') }}">🏠 Sistem Penjualan Rumah</a>
      <div class="d-flex">
        <a href="{{ route('login') }}" class="btn btn-outline-light px-4">Login</a>
      </div>
    </div>
  </nav>

  <!-- Konten -->
  <div class="hero-section">
    <h1>Selamat Datang di Sistem Penjualan Rumah</h1>
    <p class="lead">Temukan rumah impian Anda di lingkungan terbaik dengan harga bersahabat.</p>
    <img src="https://cdn-icons-png.flaticon.com/512/2830/2830334.png" alt="Gambar Rumah" class="hero-img">
  </div>

  <!-- Footer -->
  <footer>
    © {{ date('Y') }} Sistem Penjualan Rumah | Dibuat dengan 💙💛💚 untuk Anda
  </footer>
</body>
</html>
