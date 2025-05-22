<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About - Anggota KoTA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('about') }}">KoTA Web</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ route('about') }}">About</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="about-bg min-vh-100 py-5">
    <div class="container">
        <h2 class="fw-bold text-white mb-1">Anggota Kelompok</h2>
        <p class="text-white-50 mb-4">Terdiri dari:</p>
        <div class="row g-4 justify-content-center">
            @foreach($members as $member)
            <div class="col-xl-4 col-md-6">
                <div class="glass-card p-4 d-flex align-items-center gap-3 shadow-lg animate__animated animate__fadeInUp">
                    <div class="avatar-gradient flex-shrink-0">
                        <img src="{{ asset('img/anggota/'.$member['photo']) }}" class="avatar-img" alt="Foto {{ $member['name'] }}">
                    </div>
                    <div>
                        <h5 class="mb-1 fw-semibold text-white">{{ $member['name'] }}</h5>
                        <div class="small text-white-50 mb-1">{{ $member['city'] }}, {{ $member['birth'] }}</div>
                        <a href="{{ route('member.show', $member['id']) }}" class="profile-link">Lihat Profil &raquo;</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
<footer class="text-center py-4 text-white-50 about-bg">
    &copy; {{ date('Y') }} KoTA Web | Laravel & Bootstrap 5
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/about.js') }}"></script>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About - Anggota KoTA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Pastikan file about.css ada di public/css --}}
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    {{-- Jika menggunakan Animate.css --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> --}}
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('about') }}">KoTA 112</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ route('about') }}">About</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="about-bg min-vh-100 py-5">
    <div class="container">
        <h2 class="fw-bold text-white mb-1">Anggota Kelompok</h2>
        <p class="text-white-50 mb-4">Terdiri dari:</p>
        <div class="row g-4 justify-content-center">
            {{-- Loop melalui data members yang dikirim dari controller --}}
            @foreach($members as $member)
            <div class="col-xl-4 col-md-6">
                {{-- Tambahkan class animate__animated dan animate__fadeInUp jika Animate.css digunakan --}}
                <div class="glass-card p-4 d-flex align-items-center gap-3 shadow-lg {{-- animate__animated animate__fadeInUp --}}">
                    <div class="avatar-gradient flex-shrink-0">
                        {{-- Pastikan foto ada di public/img/anggota/ dengan nama file sesuai di seeder --}}
                        <img src="{{ asset('img/anggota/'.$member->photo) }}" class="avatar-img" alt="Foto {{ $member->name }}">
                    </div>
                    <div>
                        <h5 class="mb-1 fw-semibold text-white">{{ $member->name }}</h5>
                        {{-- Menggunakan -> daripada [''] karena $members adalah Collection of Model objects --}}
                        <div class="small text-white-50 mb-1">{{ $member->city }}, {{ $member->birth }}</div>
                        {{-- Link ini mengarah ke route member.show, yang belum diimplementasikan sepenuhnya --}}
                        <a href="{{ route('member.show', $member->id) }}" class="profile-link">Lihat Profil »</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
<footer class="text-center py-4 text-white-50 about-bg">
    © {{ date('Y') }} KoTA Web | Laravel & Bootstrap 5
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
{{-- Pastikan file about.js ada di public/js --}}
<script src="{{ asset('js/about.js') }}"></script>
</body>
</html>