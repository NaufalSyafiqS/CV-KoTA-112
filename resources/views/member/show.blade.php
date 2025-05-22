<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil {{ $member->name }}</title> {{-- Menggunakan nama anggota di judul halaman --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Anda bisa tambahkan CSS kustom Anda di sini jika ada --}}
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    {{-- Tambahkan style untuk gambar profil --}}
    <style>
        .profile-img {
            width: 150px; /* Sesuaikan ukuran sesuai keinginan */
            height: 150px; /* Sesuaikan ukuran sesuai keinginan */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
            border-radius: 50%; /* Membuat gambar bulat */
            border: 4px solid #fff; /* Optional: border putih */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: shadow */
        }
         .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            color: #333;
        }
         .detail-label {
            font-weight: 600;
            color: #555;
            margin-right: 5px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
    <div class="container">
        {{-- Link ke Home --}}
        <a class="navbar-brand fw-bold" href="{{ route('index') }}">KoTA 112</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                {{-- Link kembali ke About --}}
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                {{-- Aktifkan link ini jika ini adalah halaman yang sangat penting --}}
                {{-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Profil</a></li> --}}
            </ul>
        </div>
    </div>
</nav>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4">Profil Anggota</h1>

                    <div class="row mb-4 align-items-center"> {{-- Gunakan align-items-center untuk alignment vertikal --}}
                        {{-- Tampilkan foto jika ada --}}
                        @if($member->photo)
                        <div class="col-md-4 text-center mb-3 mb-md-0">
                             {{-- Sesuaikan path foto jika berbeda dengan contoh sebelumnya --}}
                             {{-- Pastikan foto ada di public/img/anggota/ --}}
                            <img src="{{ asset('img/anggota/'.$member->photo) }}" alt="Foto {{ $member->name }}" class="profile-img">
                        </div>
                        @endif

                        <div class="{{ $member->photo ? 'col-md-8' : 'col-md-12' }}">
                            <p class="mb-2"><span class="detail-label">Nama:</span> {{ $member->name }}</p>
                            <p class="mb-2"><span class="detail-label">NIM:</span> {{ $member->nim }}</p>
                            <p class="mb-2"><span class="detail-label">Tempat, Tanggal Lahir:</span> {{ $member->city }}, {{ $member->birth }}</p>
                        </div>
                    </div>

                    {{-- Detail Pendidikan --}}
                    <h5 class="mt-4 mb-3 border-bottom pb-2">Riwayat Pendidikan</h5>
                    @if($member->sd_info)
                    <p class="mb-2"><span class="detail-label">SD & Tahun Lulus:</span> {{ $member->sd_info }}</p>
                    @endif
                     @if($member->smp_info)
                    <p class="mb-2"><span class="detail-label">SMP & Tahun Lulus:</span> {{ $member->smp_info }}</p>
                    @endif
                     @if($member->sma_info)
                    <p class="mb-2"><span class="detail-label">SMA & Tahun Lulus:</span> {{ $member->sma_info }}</p>
                    @endif

                     {{-- Prestasi --}}
                    <h5 class="mt-4 mb-3 border-bottom pb-2">Prestasi</h5>
                    @if($member->achievements)
                    {{-- Menggunakan nl2br jika prestasi bisa lebih dari satu baris --}}
                    <p class="mb-2">{{ nl2br(e($member->achievements)) }}</p>
                    @else
                    <p class="mb-2 text-muted">Tidak ada prestasi yang dicantumkan.</p>
                    @endif


                    <hr class="my-4">

                    {{-- Tombol Kembali --}}
                    <div class="text-center">
                        <a href="{{ route('about') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> « Kembali ke Daftar Anggota</a>
                         {{-- Jika ingin menggunakan icon, tambahkan library icon Bootstrap (Bootstrap Icons) --}}
                         {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="text-center py-4 text-muted mt-5">
    © {{ date('Y') }} KoTA Web | Laravel & Bootstrap 5
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
{{-- Tambahkan JS kustom jika ada --}}
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
</html>