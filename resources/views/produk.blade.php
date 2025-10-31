<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Halaman Produk</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* Navbar global */
    .navbar {
        background-color: #e9ecef !important; /* abu-abu lembut */
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .navbar-brand {
        font-weight: 600;
        font-size: 26px;
        color: #000 !important;
    }
    .custom-toggler {
        border: 2px solid #aaa;
        border-radius: 8px;
        padding: 10px 12px;
        background-color: white;
    }
    .custom-toggler-icon {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 28px;
        height: 20px;
    }
    .custom-toggler-icon span {
        display: block;
        height: 3px;
        background-color: #000;
        border-radius: 2px;
    }

    .content { width: 80%; margin: 30px auto; }
    .header-section { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
    h2 { font-weight: 700; font-size: 38px; margin: 0; }

    .table { border-collapse: collapse; text-align: left; width: 100%; }
    .table th, .table td {
        padding: 15px 25px;
        border: 1px solid #fff;
    }
    .table th {
        background-color: #d8e7fd;
        font-weight: 700;
        font-size: 20px; /* font header diperbesar */
    }
    .table td {
        background-color: #d8e7fd;
        font-weight: 600; /* sedikit lebih tipis dari header */
        font-size: 18px;
    }
    .table tr:hover td { background-color: #bcd0f7; }
    .btn-primary { font-weight: 600; padding: 8px 18px; }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container-fluid d-flex justify-content-between align-items-center px-3">
        <a class="navbar-brand" href="#">UTS Laravel</a>
        <button class="custom-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">
            <div class="custom-toggler-icon"><span></span><span></span><span></span></div>
        </button>
    </div>
</nav>

<div class="content">
    <div class="header-section">
        <h2>Halaman Produk</h2>
        <a href="/tambahproduk" class="btn btn-primary">Tambah Produk</a>
    </div>

    <table class="table table-bordered table-hover align-middle table-sm">
        <thead>
            <tr>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produk as $p)
            <tr>
                <td>{{ $p['kode'] }}</td>
                <td>{{ $p['nama'] }}</td>
                <td>{{ $p['jenis'] }}</td>
                <td>{{ $p['harga'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>