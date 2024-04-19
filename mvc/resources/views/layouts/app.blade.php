<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos y alumnos</title>
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('curs.index') }}">Cursos</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('usuari.index')}}">Alumnes</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('item.index')}}">Alumnes</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<script src="{{ asset('dist/js/app.js') }}"></script>
</body>
</html>
