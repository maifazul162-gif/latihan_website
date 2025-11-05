<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Rumah Dijual</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* 🌈 Tema biru–kuning–hijau lembut */
    body {
      background: linear-gradient(135deg, #a8dadc, #f1fa8c, #b7e4c7);
      font-family: "Poppins", sans-serif;
      color: #333;
      min-height: 100vh;
    }

    /* 🌿 Navbar */
    .navbar {
      background: linear-gradient(to right, #0077b6, #00b4d8, #90be6d);
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
    }

    .navbar-brand {
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    .btn-outline-light {
      border-radius: 25px;
      transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
      background-color: #f1fa8c;
      color: #023e8a;
    }

    /* 🏠 Judul halaman */
    h2 {
      color: #023e8a;
      font-weight: 700;
      text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.8);
    }

    /* 💎 Kartu rumah */
    .card {
      border: none;
      border-radius: 20px;
      transition: all 0.3s ease;
      overflow: hidden;
      background: white;
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .card img {
      height: 200px;
      object-fit: cover;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      transition: transform 0.3s ease;
    }

    .card:hover img {
      transform: scale(1.05);
    }

    .card-body {
      text-align: center;
      padding: 20px;
      background-color: #fff;
    }

    .card-title {
      font-weight: 600;
      font-size: 1.05rem;
      color: #0077b6;
      margin-bottom: 8px;
    }

    .card-text {
      font-size: 0.95rem;
      color: #2d6a4f;
      font-weight: 600;
      margin-bottom: 15px;
    }

    /* Tombol */
    .btn-detail {
      background: linear-gradient(to right, #00b4d8, #90be6d);
      color: #fff;
      border: none;
      border-radius: 25px;
      padding: 7px 20px;
      transition: all 0.3s ease;
      font-weight: 600;
    }

    .btn-detail:hover {
      background: linear-gradient(to right, #0077b6, #74c69d);
      transform: scale(1.05);
      color: #fff;
    }

    /* ✨ Animasi fade-in */
    .fade-in {
      animation: fadeInUp 0.8s ease-in-out;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(15px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
<!-- 🌿 Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('beranda') }}">🏡 Sistem Penjualan Rumah</a>
    <div class="d-flex">
      <a href="{{ route('logout') }}" class="btn btn-outline-light btn-sm px-3">Logout</a>
    </div>
  </div>
</nav>

<!-- 🏠 Konten -->
<div class="container mt-5">
  <h2 class="text-center mb-4">Daftar Rumah Dijual</h2>
  <div class="row justify-content-center">
    @php
      $produk = [
        ['id' => 1, 'nama' => 'Rumah Minimalis Sederhana', 'harga' => 'Rp 2.500.000.000', 'foto' => 'images/rumah1.jpg'],
        ['id' => 2, 'nama' => 'Rumah Sederhana', 'harga' => 'Rp 1.950.000.000', 'foto' => 'images/rumah2.jpg'],
        ['id' => 3, 'nama' => 'Rumah Modern Mewah', 'harga' => 'Rp 1.200.000.000', 'foto' => 'images/rumah3.jpg'],
        ['id' => 4, 'nama' => 'Rumah Klasik Elegan', 'harga' => 'Rp 3.000.000.000', 'foto' => 'images/rumah4.jpg'],
        ['id' => 5, 'nama' => 'Rumah Hijau Subur nan Rindang', 'harga' => 'Rp 2.750.000.000', 'foto' => 'images/rumah5.jpg'],
        ['id' => 6, 'nama' => 'Rumah Klasik 2 Lantai', 'harga' => 'Rp 350.000.000', 'foto' => 'images/rumah6.jpg'],
        ['id' => 7, 'nama' => 'Rumah Mewah Pantai Bali', 'harga' => 'Rp 650.000.000', 'foto' => 'images/rumah7.jpg'],
        ['id' => 8, 'nama' => 'Rumah Minimalis Modern', 'harga' => 'Rp 1.400.000.000', 'foto' => 'images/rumah8.jpg'],
      ];
    @endphp

    @foreach($produk as $item)
      <div class="col-md-3 col-sm-6 fade-in mb-4">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset($item['foto']) }}" class="card-img-top" alt="{{ $item['nama'] }}" onerror="this.src='{{ asset('images/default.jpg') }}';">
          <div class="card-body">
            <h5 class="card-title">{{ $item['nama'] }}</h5>
            <p class="card-text">{{ $item['harga'] }}</p>
            <a href="{{ route('produk.detail', $item['id']) }}" class="btn btn-detail">Lihat Detail</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
</body>
</html>
