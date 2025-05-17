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
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    
    <!--Footer-->
    <footer class="footer-custom">

        <div class="footer-head">
        <div class="footer-logo">
            <img src="{{ asset('img/logo.png') }}" alt="logo">
            <h1>Cabin <span>Outdoor</span>.</h1>
        </div>
        </div>

        <div class="garis"></div>

        <div class="footer-body">
        <div class="Tentang">
            <h3>Tentang Kami</h3>
            <p>Cabin Outdoor adalah tempat terbaik untuk menikmati liburan di tengah alam terbuka. 
                Dengan fasilitas yang lengkap, kami menghadirkan pengalaman berlibur yang aman, nyaman, dan seru</p>
        </div>

        <div class="links">
            <h3>Link</h3>
            <a href="/">Beranda</a>
            <a href="{{ route('tentang') }}">Tentang Kami</a>
            <a href="{{ route('katalog') }}">Katalog</a>
            <a href="{{ route('sewa') }}">Cara Sewa</a>
            <a href="{{ route('kontak') }}">Kontak & Lokasi</a>
        </div>

        <div class="contac">
            <h3>Contact Us</h3>
            <a href="https://wa.me/6281336038234"><i data-feather="phone"></i>081233898</a>
            <a href="https://www.instagram.com/cabin.outdoor?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i data-feather="instagram"></i>@cabin.outdoor</a>
            <a href="https://maps.app.goo.gl/ZgZW66kPG79RN7ek9"><i data-feather="home"></i>Merjosari</a>
        </div>
        </div>

        <div class="credit">
            <p>Create by Cabin Outdoor &copy; 2025 </p>
        </div>
    </footer>

    <script>
        feather.replace();            
    </script>

</body>
</html>