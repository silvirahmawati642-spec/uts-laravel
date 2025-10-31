<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Data produk contoh
$produk = [
    ['kode'=>'BRG001','nama'=>'Pena','jenis'=>'Alat Tulis','harga'=>20000],
    ['kode'=>'BRG002','nama'=>'Buku','jenis'=>'Alat Tulis','harga'=>15000],
    ['kode'=>'BRG003','nama'=>'Penghapus','jenis'=>'Alat Tulis','harga'=>5000],
    ['kode'=>'BRG004','nama'=>'Laptop','jenis'=>'Elektronik','harga'=>8000000],
    ['kode'=>'BRG005','nama'=>'Mouse','jenis'=>'Elektronik','harga'=>150000],
    ['kode'=>'BRG006','nama'=>'Kabel USB','jenis'=>'Elektronik','harga'=>50000],
    ['kode'=>'BRG007','nama'=>'Beras','jenis'=>'Sembako','harga'=>120000],
    ['kode'=>'BRG008','nama'=>'Gula','jenis'=>'Sembako','harga'=>20000],
    ['kode'=>'BRG009','nama'=>'Minyak Goreng','jenis'=>'Sembako','harga'=>30000],
];

Route::get('/', function () use ($produk) {
    return view('home', ['produk' => $produk]);
});

Route::get('/produk', function () use ($produk) {
    return view('produk', ['produk' => $produk]);
});

Route::get('/tambahproduk', function () {
    $jenisProduk = ['Alat Tulis', 'Elektronik', 'Sembako'];
    return view('tambahproduk', ['jenisProduk' => $jenisProduk]);
});

Route::post('/tambahproduk', function (Request $request) {
    $kode = $request->kode;
    $nama = $request->nama;
    $jenis = $request->jenis;
    $harga = $request->harga;

    return "
    <h2>Produk berhasil disimpan!</h2>
    <p><strong>Kode:</strong> $kode</p>
    <p><strong>Nama:</strong> $nama</p>
    <p><strong>Jenis:</strong> $jenis</p>
    <p><strong>Harga:</strong> $harga</p>
    <a href='/tambahproduk'>Kembali ke form</a>
    ";
});

// Search route menampilkan produk sesuai keyword
Route::get('/search', function (Request $request) use ($produk) {
    $query = strtolower($request->query('q'));

    // Filter produk sesuai nama atau jenis
    $hasil = array_filter($produk, function($p) use ($query){
        return str_contains(strtolower($p['nama']), $query) || str_contains(strtolower($p['jenis']), $query);
    });

    $html = "<h2>Hasil pencarian untuk: ".htmlspecialchars($request->query('q'))."</h2>";

    if(count($hasil) > 0){
        $html .= "<table border='1' cellpadding='10' style='border-collapse: collapse;'>";
        $html .= "<tr><th>Kode</th><th>Nama</th><th>Jenis</th><th>Harga</th></tr>";
        foreach($hasil as $p){
            $html .= "<tr>
                        <td>{$p['kode']}</td>
                        <td>{$p['nama']}</td>
                        <td>{$p['jenis']}</td>
                        <td>{$p['harga']}</td>
                      </tr>";
        }
        $html .= "</table>";
    } else {
        $html .= "<p>Tidak ada produk ditemukan.</p>";
    }

    $html .= "<br><a href='/'>Kembali</a>";
    return $html;
});