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
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 18px;
        }
        /* Tombol garis tiga */
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
        /* Halaman Home */
        h2 {
            font-weight: 700;
            font-size: 42px;
            margin-top: 2px;
            margin-left: 150px;
        }
        /* Sidebar style */
        .offcanvas-body .nav-link {
            font-weight: 600;
        }
        .offcanvas-body .nav-link.produk {
            color: #6c757d; /* abu-abu lembut seperti Search */
        }
        .offcanvas-body .nav-link.produk:hover {
            color: #000; /* efek hover */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container-fluid d-flex justify-content-between align-items-center px-3">
            <a class="navbar-brand" href="#">UTS Laravel</a>

            <!-- Tombol garis tiga buka sidebar -->
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
    <div class="py-3">
        <h2>Halaman Home</h2>
    </div>

    <!-- Sidebar -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebarMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bold">UTS Laravel</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link produk" href="#">Produk</a>
                </li>
            </ul>
            <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>