<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Rumah | Sistem Penjualan Rumah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
      font-family: "Poppins", sans-serif;
    }

    .navbar {
      background: linear-gradient(90deg, #198754, #0d6efd);
    }

    .navbar-brand {
      font-weight: 600;
    }

    .detail-card {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
      padding: 40px;
      transition: all 0.3s ease;
    }

    .detail-card:hover {
      transform: translateY(-3px);
    }

    .detail-card img {
      width: 100%;
      height: 280px;
      object-fit: cover;
      border-radius: 15px;
      transition: transform 0.3s ease;
    }

    .detail-card img:hover {
      transform: scale(1.05);
    }

    .detail-title {
      font-weight: 700;
      color: #212529;
    }

    .detail-price {
      color: #198754;
      font-size: 1.4rem;
      font-weight: 600;
    }

    .detail-description {
      color: #555;
      line-height: 1.6;
      margin-top: 10px;
    }

    .btn-dark {
      border-radius: 30px;
      padding: 10px 25px;
      transition: all 0.3s ease;
      background: linear-gradient(90deg, #198754, #0d6efd);
      border: none;
    }

    .btn-dark:hover {
      transform: scale(1.05);
      opacity: 0.9;
    }

    .btn-outline-secondary {
      border-radius: 30px;
      padding: 10px 25px;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="{{ route('produk') }}">🏠 Sistem Penjualan Rumah</a>
      <div class="d-flex">
        <a href="{{ route('logout') }}" class="btn btn-outline-light btn-sm px-3">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Konten -->
  <div class="container mt-5">
    @php
      // Data rumah (sama seperti di produk.blade.php)
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

      // Ambil ID dari route (misal /produk/detail/3)
      $id = request()->route('id');

      // Ambil data rumah berdasarkan ID
      $detail = collect($produk)->firstWhere('id', $id);

      // Deskripsi rumah
      $deskripsi = [
        1 => 'Rumah Minimalis Sederhana dengan desain fungsional dan pencahayaan alami. Cocok untuk keluarga kecil di lingkungan tenang.',
        2 => 'Rumah Sederhana bergaya tropis dengan taman kecil di depan rumah, memberikan kesan asri dan nyaman.',
        3 => 'Rumah Modern Mewah dengan interior elegan dan area luas, lengkap dengan garasi dan ruang tamu berkonsep open space.',
        4 => 'Rumah Klasik Elegan dua lantai dengan pilar megah dan ornamen khas gaya Eropa.',
        5 => 'Rumah Hijau Subur nan Rindang yang dikelilingi pepohonan dan taman belakang luas, cocok untuk pecinta alam.',
        6 => 'Rumah Klasik 2 Lantai dengan perpaduan modern dan klasik, dilengkapi balkon dengan pemandangan indah.',
        7 => 'Rumah Mewah Pantai Bali bergaya resort dengan kolam renang pribadi dan desain tropis eksotis.',
        8 => 'Rumah Minimalis Modern dengan konsep terbuka, jendela besar, dan pencahayaan alami maksimal.'
      ];
    @endphp

    @if($detail)
    <div class="row justify-content-center">
      <div class="col-md-10 detail-card">
        <div class="row align-items-center">
          <div class="col-md-5 mb-4 mb-md-0">
            <img src="{{ asset($detail['foto']) }}" alt="{{ $detail['nama'] }}" onerror="this.src='{{ asset('images/default.jpg') }}';">
          </div>
          <div class="col-md-7">
            <h2 class="detail-title">{{ $detail['nama'] }}</h2>
            <h4 class="detail-price">{{ $detail['harga'] }}</h4>
            <p class="detail-description">{{ $deskripsi[$detail['id']] ?? 'Deskripsi tidak tersedia.' }}</p>

            <div class="mt-4">
              <button class="btn btn-dark me-2">💳 Konfirmasi Pembelian</button>
              <a href="{{ route('produk') }}" class="btn btn-outline-secondary">Kembali ke Daftar Rumah</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @else
      <div class="alert alert-danger text-center mt-5">Data rumah tidak ditemukan.</div>
    @endif
  </div>
</body>
</html>
