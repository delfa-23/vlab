<!DOCTYPE html>
<html>
<head>
    <title>VLAB Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">VLAB</a>
            <div class="d-flex">
                <a href="{{ route('login') }}" class="btn btn-outline-light">Login Admin</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Selamat Datang di VLAB</h1>
        </div>
    </header>

    <!-- Daftar Project -->
    <div class="container py-5">
        <h2 class="text-center mb-4">Daftar Project</h2>
        <div class="row">
            @foreach($projects as $project)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset($project->image) }}"
                             class="card-img-top"
                             alt="{{ $project->nama_project }}"
                             style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->nama_project }}</h5>
                            <p class="card-text">{{ $project->description }}</p>
                            <small class="text-muted">By: {{ $project->nama }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
