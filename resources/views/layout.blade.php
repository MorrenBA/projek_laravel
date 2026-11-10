<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Siswa</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <h1>SMK Telekomunikasi Telesandi Bekasi</h1>

    @include('navbar')

    <div class="container">
        @yield('content')
    </div>

    @include('footer')
</body>
</html>