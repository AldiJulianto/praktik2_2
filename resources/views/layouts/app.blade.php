<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    <header>
        <h2>Blog Rekayasa Perangkat Lunak</h2>
        <nav>
            <a href="home">HOME</a>
            |
            <a href="tentang">TENTANG</a>
            |
            <a href="kontak">KONTAK</a>
        </nav>
    </header>
    <hr>
    <br>
    <br>

    <!-- bagian judul halaman blog -->
    <h3>@yield('judul_halaman')</h3>

    <!-- bagian konten -->
    @yield('konten')

    <br>
    <br>
    <hr>

    <footer>
        <p>&copy; <a href="https://www.malasngoding.com">Link Tutorial Malas Ngoding</a></p>
    </footer>
</body>
</html>
