<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand {
            font-weight: 700;
            font-size: 18px;
        }
        .custom-toggler {
            border: 1.5px solid #ccc;
            border-radius: 6px;
            padding: 6px 8px;
            background-color: white;
        }
        .custom-toggler-icon {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 18px;
            height: 14px;
        }
        .custom-toggler-icon span {
            display: block;
            height: 2.5px;
            background-color: #000;
            border-radius: 2px;
        }
        h2 {
            font-weight: 700;
            font-size: 36px;
            margin-top: 25px;
            margin-left: 120px;
        }
        .form-container {
            width: 80%;
            margin: 0 auto;
            margin-top: 20px;
        }
        .btn-success {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container-fluid d-flex justify-content-between align-items-center px-3">
            <a class="navbar-brand" href="#">UTS Laravel</a>

            <button class="custom-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">
                <div class="custom-toggler-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
        </div>
    </nav>

    <!-- Isi Halaman -->
    <div class="form-container">
        <h2>Form Tambah Produk</h2>

        <form>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="kode" class="form-label">Kode Produk</label>
                    <input type="text" class="form-control" id="kode" placeholder="Input Kode Produk">
                </div>
                <div class="col-md-4">
                    <label for="nama" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama" placeholder="Input Nama Produk">
                </div>
                <div class="col-md-4">
                    <label for="jenis" class="form-label">Jenis Produk</label>
                    <input type="text" class="form-control" id="jenis" placeholder="Pilih Produk">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" placeholder="Input Harga">
                </div>
                <div class="col-md-6 d-flex align-items-end">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>