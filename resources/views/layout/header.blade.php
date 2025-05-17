<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- Feather Icons -->

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>

    <!-- Navbar start -->
    <nav class="navbar-custom">
        <a href="#" class="navbar-logo">Cabin<span> Outdoor</span>.</a>


        <div class="navbar-menu">
            <a href="/">Beranda</a>
            <a href="{{ route('tentang') }}">Tentang Kami</a>
            <a href="{{ route('katalog') }}">Katalog</a>
            <a href="{{ route('sewa') }}">Cara Sewa</a>
            <a href="{{ route('kontak') }}">Kontak & Lokasi</a>
        </div>
        
        <div class="nav-extra">
            <a href="https://wa.me/6281336038234" type="button" class="btn btn-primary btn-lg">Hubungi Kami</a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
        
     </nav>

    <!-- Navbar end -->

    <script>
        feather.replace();
    </script>

    <!-- My JavaScript -->
    <script src="js/script.js"></script>
    
</body>
</html>