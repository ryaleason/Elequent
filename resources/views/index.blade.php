<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #4CAF50;
            padding: 1rem;
        }
        .navbar a {
            margin: 0 10px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .content {
            padding: 2rem;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="{{ route('dashboard/siswa') }}">Siswa</a>
        <a href="{{ route('dashboard/guru') }}">Guru</a>
        <a href="{{ route('dashboard/galery') }}">Galeri</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
