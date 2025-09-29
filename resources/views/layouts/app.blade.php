<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'LaravelApp' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">LaravelApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">List User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.create') }}">Tambah User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <main class="container my-5 flex-grow-1">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <small>&copy; {{ date('Y') }} LaravelApp. All Rights Reserved.</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
