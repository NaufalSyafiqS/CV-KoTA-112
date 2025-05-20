<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KoTA - Sistem Informasi Tugas Akhir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">KoTA 112</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="container py-4">
        <div class="row align-items-center mb-4">
            <div class="col-md-7">
                <h1 class="display-5 fw-bold mb-3">Pengembangan Aplikasi Pengusulan dan Pelaporan Perjalanan Dinas Pegawai Politeknik Negeri Bandung Berbasis Web</h1>
                <h5 class="mb-2 text-secondary">
                    <span class="badge bg-primary badge-kota">KoTA 112</span>
                </h5>
                <p class="lead">
                    Aplikasi ini dirancang untuk memudahkan pengusul dan pelaksana tugas perjalanan dinas di Politeknik Negeri Bandung
                    dalam mengusulkan surat tugas oleh pengusul dan melakukan pelaporan akhir perjalanan dinas oleh pelaksana tugas.
                </p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('img/search.jpg') }}" alt="TA Image" class="hero-img shadow-lg">
            </div>
        </div>
        <hr>
        <div class="carousel slide carousel-fade mb-5" id="galeriCarousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/aplikasi.jpg') }}" class="d-block w-100" alt="Galeri 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/laptop.jpg') }}" class="d-block w-100" alt="Galeri 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/surat.jpg') }}" class="d-block w-100" alt="Galeri 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/website.jpg') }}" class="d-block w-100" alt="Galeri 2">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#galeriCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galeriCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <footer class="text-center py-4 mt-5 text-muted">
        &copy; {{ date('Y') }} KoTA 112 | Dibuat dengan Laravel & Bootstrap 5
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>