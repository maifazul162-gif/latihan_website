<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// =============================
// 🏠 Halaman Beranda
// =============================
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// =============================
// 🔐 Halaman Login
// =============================
Route::get('/login', function () {
    return view('login');
})->name('login');

// =============================
// ⚙️ Proses Login
// =============================
Route::post('/login', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username === 'admin' && $password === '12345') {
        // Simpan session login
        session(['login' => true]);
        return redirect()->route('produk');
    }

    return back()->with('error', 'Username atau Password salah!');
})->name('login.process');

// =============================
// 🏘️ Halaman Produk Rumah
// =============================
Route::get('/produk', function () {
    // Cek login
    if (!session('login')) {
        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
    }

    $produk = [
        ['id' => 1, 'nama' => 'Rumah Minimalis Sederhana', 'harga' => 'Rp 2.500.000.000', 'foto' => 'images/rumah1.jpg', 'deskripsi' => 'Rumah fungsional dengan pencahayaan alami.'],
        ['id' => 2, 'nama' => 'Rumah Sederhana', 'harga' => 'Rp 1.950.000.000', 'foto' => 'images/rumah2.jpg', 'deskripsi' => 'Rumah tropis dengan taman depan.'],
        ['id' => 3, 'nama' => 'Rumah Modern Mewah', 'harga' => 'Rp 1.200.000.000', 'foto' => 'images/rumah3.jpg', 'deskripsi' => 'Rumah modern dengan ruang tamu luas.'],
        ['id' => 4, 'nama' => 'Rumah Klasik Elegan', 'harga' => 'Rp 3.000.000.000', 'foto' => 'images/rumah4.jpg', 'deskripsi' => 'Rumah klasik dua lantai gaya Eropa.'],
    ];

    return view('produk', compact('produk'));
})->name('produk');

// =============================
// 🏡 Halaman Detail Rumah
// =============================
Route::get('/produk/{id}', function ($id) {
    if (!session('login')) {
        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
    }

    $produk = [
        1 => ['nama' => 'Rumah Minimalis Sederhana', 'harga' => 'Rp 2.500.000.000', 'foto' => 'images/rumah1.jpg', 'deskripsi' => 'Rumah dengan desain fungsional dan pencahayaan alami.'],
        2 => ['nama' => 'Rumah Sederhana', 'harga' => 'Rp 1.950.000.000', 'foto' => 'images/rumah2.jpg', 'deskripsi' => 'Rumah tropis dengan taman depan yang asri.'],
        3 => ['nama' => 'Rumah Modern Mewah', 'harga' => 'Rp 1.200.000.000', 'foto' => 'images/rumah3.jpg', 'deskripsi' => 'Rumah dengan interior elegan dan area luas.'],
        4 => ['nama' => 'Rumah Klasik Elegan', 'harga' => 'Rp 3.000.000.000', 'foto' => 'images/rumah4.jpg', 'deskripsi' => 'Rumah dua lantai gaya klasik Eropa.'],
        5 => ['nama' => 'Rumah Hijau Subur nan Rindang', 'harga' => 'Rp 2.750.000.000', 'foto' => 'images/rumah5.jpg', 'deskripsi' => 'Rumah dengan taman belakang luas dan suasana alami.'],
        6 => ['nama' => 'Rumah Klasik 2 Lantai', 'harga' => 'Rp 350.000.000', 'foto' => 'images/rumah6.jpg', 'deskripsi' => 'Rumah klasik berpadu modern dengan balkon luas.'],
        7 => ['nama' => 'Rumah Mewah Pantai Bali', 'harga' => 'Rp 650.000.000', 'foto' => 'images/rumah7.jpg', 'deskripsi' => 'Rumah bergaya resort dengan kolam renang pribadi.'],
        8 => ['nama' => 'Rumah Minimalis Modern', 'harga' => 'Rp 1.400.000.000', 'foto' => 'images/rumah8.jpg', 'deskripsi' => 'Rumah konsep terbuka dengan jendela besar.'],
    ];

    if (!array_key_exists($id, $produk)) {
        abort(404, 'Rumah tidak ditemukan');
    }

    $detail = $produk[$id];
    return view('detail', compact('detail'));
})->name('produk.detail');

// =============================
// 🚪 Logout
// =============================
Route::get('/logout', function () {
    session()->forget('login');
    return redirect()->route('beranda')->with('success', 'Anda telah logout.');
})->name('logout');

