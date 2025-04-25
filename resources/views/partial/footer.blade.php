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
    <link rel="stylesheet" href="css/footer.css">

    <!-- My JavaScript -->
    <script src="js/script.js"></script>
</head>
<body>
    
    <!--Footer-->
    <footer class="footer">

        <div class="footer-head">
        <div class="footer-logo">
            <img src="img/logo.png" alt="logo">
            <h1>Cabin <span>Outdoor</span>.</h1>
        </div>

        <div class="sosials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="youtube"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>
        </div>

        <div class="garis"></div>

        <div class="footer-body">
        <div class="Tentang">
            <h3>Tentang Kami</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo aliquid omnis maiores illum eum voluptate, non eos totam commodi! Est reiciendis impedit architecto culpa molestias debitis tenetur, nesciunt mollitia natus?</p>
        </div>

        <div class="links">
            <h3>Link</h3>
            <a href="/">Beranda</a>
            <a href="/tentang">Tentang Kami</a>
            <a href="#">Katalog</a>
            <a href="/sewa">Cara Sewa</a>
            <a href="/kontak">Kontak & Lokasi</a>
        </div>

        <div class="contac">
            <h3>Contact Us</h3>
            <a href="#"><i data-feather="phone"></i>081233898</a>
            <a href="#"><i data-feather="mail"></i>cabinoutdoor@gmail.com</a>
            <a href="#"><i data-feather="home"></i>Merjosari</a>
        </div>
        </div>

        <div class="credit">
            <p>Create by Cabin Outdoor &copy; 2025 </p>
        </div>
    </footer>

    <script>
        feather.replace();

        function openPopup() {
            document.getElementById('popupKatalog').style.display = 'block';
            }

        function closePopup() {
            document.getElementById('popupKatalog').style.display = 'none';
            }

            
    </script>

</body>
</html>