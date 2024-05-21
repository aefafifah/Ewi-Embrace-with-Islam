<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embrace with Islam</title>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}

</head>
<header>
    <!-- Bagian header website -->
</header>

{{-- <nav> --}}
<!-- Navigasi menu, bisa dimasukkan dari file nav.blade.php jika diperlukan -->
{{-- @include('layout.nav') --}}
{{-- </nav> --}}

<body>
    @include('layout.nav')
    @yield('content')

</body>

</html>
