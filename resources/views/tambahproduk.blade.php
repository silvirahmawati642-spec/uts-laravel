<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Tambah Produk</title>
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

    h2 { font-weight: 700; font-size: 36px; margin-top: 25px; margin-bottom: 25px; text-align: left; }
    .form-container { width: 80%; margin: 0 auto; margin-top: 25px; }

    /* Label form: sedikit tebal & lebih besar */
    .form-label {
        font-weight: 700; /* lebih tebal dari input */
        font-size: 18px;  /* sedikit lebih besar dari input */
    }

    /* Teks di dalam input dan dropdown: sedikit lebih tipis */
    .form-control { 
        height: 55px; 
        font-size: 16px; 
        padding: 10px 15px; 
        border: 1.5px solid #ccc; 
        border-radius: 8px; 
        font-weight: 500; /* sedikit lebih tipis dari label */
    }
    .btn-success { width: 100%; height: 55px; font-size: 17px; margin-top: 10px; }

    .custom-select { position: relative; }
    .custom-select button {
        width: 100%; 
        background-color: #fff; 
        border: 1.5px solid #ccc; 
        border-radius: 8px;
        padding: 10px 15px; 
        text-align: left; 
        color: #000; 
        font-size: 16px; 
        font-weight: 500; /* sedikit lebih tipis dari label */
        cursor: pointer;
        transition: all 0.2s ease-in-out;
    }
    .custom-select button:focus {
        outline: none; 
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
    .custom-options {
        position: absolute; 
        width: 100%; 
        background-color: #fff; 
        border: 1.5px solid #ccc; 
        border-radius: 8px;
        margin-top: 2px; 
        display: none; 
        z-index: 10;
    }
    .custom-options div {
        padding: 1px 15px; 
        cursor: pointer; 
        color: #000; 
        background-color: #fff; 
        transition: all 0.2s;
    }
    .custom-options div:hover, .custom-options div.active {
        background-color: #0d6efd; 
        color: #fff;
    }
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

<div class="form-container">
    <h2>Form Tambah Produk</h2>
    <form action="/tambahproduk" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="kode" class="form-label">Kode Produk</label>
                <input type="text" class="form-control" name="kode" id="kode" placeholder="Input Kode Produk">
            </div>
            <div class="col-md-4">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Input Nama Produk">
            </div>
            <div class="col-md-4">
                <label class="form-label">Jenis Produk</label>
                <div class="custom-select" id="jenisSelect">
                    <button type="button" id="selectedOption">Pilih Produk</button>
                    <div class="custom-options">
                        <div data-value="Pilih Produk">Pilih Produk</div>
                        @foreach($jenisProduk as $jenis)
                            <div data-value="{{ $jenis }}">{{ $jenis }}</div>
                        @endforeach
                    </div>
                </div>
                <input type="hidden" name="jenis" id="jenisValue">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" id="harga" placeholder="Input Harga">
            </div>
            <div class="col-md-6 d-flex align-items-end">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </form>
</div>

<script>
const select = document.getElementById('jenisSelect');
const button = select.querySelector('#selectedOption');
const options = select.querySelector('.custom-options');
const items = options.querySelectorAll('div');

button.addEventListener('click', () => {
    options.style.display = options.style.display === 'block' ? 'none' : 'block';
    button.focus();
});

items.forEach(item => {
    item.addEventListener('click', () => {
        button.textContent = item.textContent;
        document.getElementById('jenisValue').value = item.dataset.value;
        items.forEach(i => i.classList.remove('active'));
        item.classList.add('active');
        options.style.display = 'none';
    });
});

document.addEventListener('click', (e) => {
    if (!select.contains(e.target)) options.style.display = 'none';
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>