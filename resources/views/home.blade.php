<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Warna abu muda lembut */
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 18px;
        }
        /* Custom tombol garis tiga */
        .custom-toggler {
            border: 1.5px solid #ccc;  /* Kotak abu muda */
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
            font-size: 42px;
            margin-top: 2px;      /* Sudah dinaikkan */
            margin-left: 150px;   /* Sejajar di bawah huruf L */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container-fluid d-flex justify-content-between align-items-center px-3">
            <!-- Kiri -->
            <a class="navbar-brand" href="#">UTS Laravel</a>
            
            <!-- Kanan (garis tiga) -->
            <button class="custom-toggler" type="button">
                <div class="custom-toggler-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
        </div>
    </nav>

    <!-- Isi Halaman -->
    <div class="py-3">
        <h2>Halaman Home</h2>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>