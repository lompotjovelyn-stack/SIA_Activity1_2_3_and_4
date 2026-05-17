<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catering Mini System</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding-top: 60px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('packages.index') }}">
                <img src="{{ asset('favicon.svg') }}" alt="logo" width="34" height="34" class="me-2" style="border-radius:6px;">
                <span class="brand-text">Catering</span>
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link nav-link-custom" href="{{ route('packages.index') }}">Packages</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-outline-light ms-2" href="{{ route('packages.create') }}">Add Package</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
