<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan link CSS atau CDN yang diperlukan -->
</head>
<body>
    <header>
        <!-- Bagian header website -->
    </header>

    <nav>
        <!-- Navigasi menu, bisa dimasukkan dari file nav.blade.php jika diperlukan -->
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Bagian footer website -->
    </footer>

    <!-- Tambahkan script JavaScript atau CDN yang diperlukan -->
</body>
</html>
