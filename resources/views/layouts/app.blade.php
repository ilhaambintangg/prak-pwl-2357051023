<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SIPANDU - Sistem Informasi Panduan Kuliah' }}</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" crossorigin="anonymous">

    {{-- SweetAlert2 CSS (optional, auto from JS too) --}}
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">SIPANDU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    {{-- Menu User --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">List User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.create') }}">Tambah User</a>
                    </li>
                    {{-- Menu Mata Kuliah --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/mata-kuliah') }}">Mata Kuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('matakuliah.create') }}">Tambah Mata Kuliah</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main class="container my-5 flex-grow-1">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <small>&copy; {{ date('Y') }} SIPANDU - Sistem Informasi Panduan Kuliah. All Rights Reserved.</small>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    {{-- SweetAlert2 JS --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- SweetAlert2 Notification Script --}}
    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif

        @if(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Oops!',
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</body>
</html>
