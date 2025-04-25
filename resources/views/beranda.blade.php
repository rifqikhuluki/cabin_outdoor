<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabin Outdoor</title>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- Feather Icons -->

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My JavaScript -->
     <script src="js/script.js"></script>

    <!-- My Style -->

    <link rel="stylesheet" href="css/beranda.css">
</head>
<body>

    @include('partial/header')

    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Mari Melangkah Dengan Cabin</h1>
            <p>Temani langkahmu menjelajahi alam bersama perlengkapan terbaik dari Cabin Outdoor.</p>
            <a href="#" class="cta">Sewa Sekarang</a>
        </main>
    </section>

     <!-- Hero Section End -->

     <!-- About Section Start -->


    <section class="about" id="about"></section>
    <section class="keunggulan">
        <div class="container">
            <h2>Kenapa Pilih Cabin Outdoor?</h2>
            <div class="fitur">
                <div class="fitur-item">
                    <h3>🔒 Tahan Cuaca Ekstrem</h3>
                    <p>Dirancang untuk bertahan di kondisi hujan, angin, dan suhu dingin.</p>
                </div>
                <div class="fitur-item">
                    <h3>🎒 Ringan & Praktis</h3>
                    <p>Mudah dibawa dan disimpan, cocok untuk backpacking.</p>
                </div>
                <div class="fitur-item">
                    <h3>🛠️ Mudah Dirakit</h3>
                    <p>Pemasangan tenda dan alat lainnya super cepat, bahkan untuk pemula.</p>
                </div>
            </div>
            <p>Berikut produk keunggulan kami yang siap menemani setiap petualanganmu.</p>
            <div class="galeri-produk">
                <img src="img/foto1.jpg" alt="Tenda Cabin" />
                <img src="img/foto2.jpg" alt="Tas1" />
                <img src="img/foto3.jpg" alt="Tas2" />
            </div>
        </div>
    </section>

    <!-- About Section End -->

    <!-- Katalog start -->

    <section class="menu" id="menu"></section>
    <section class="our-brand">
        <div class="container">
            <h2>Our Brand</h2>
            <p>Brand-brand terpercaya dalam dunia petualangan outdoor.</p>
            <div class="brand-list">
                <img src="img/brand1.png" alt="northface">
                <img src="img/brand2.png" alt="REI">
                <img src="img/brand3.png" alt="Eigeer">
                <img src="img/brand4.jpeg" alt="Consina">
            </div>
        </div>
    </section>

    <section class="katalog-produk">
        <div class="container">
            <h2>Produk Unggulan</h2>
            <p>Sewa peralatan outdoor terbaik untuk petualanganmu!</p>
            <div class="produk-grid">
                <div class="produk-card">
                    <img src="img/tenda6p.jpg" alt="Tenda ...">
                    <h3>Tenda ...</h3>
                    <p class="harga">100K <span>/Hari</span></p>
                    <a href="#" class="btn-detail">Details</a>
                </div>
                <div class="produk-card">
                    <img src="img/tenda8p.jpg" alt="Tenda ...">
                    <h3>Tenda ...</h3>
                    <p class="harga">120K <span>/Hari</span></p>
                    <a href="#" class="btn-detail">Details</a>
                </div>
                <div class="produk-card">
                    <img src="img/glamping.jpg" alt="Tenda ....">
                    <h3>Tenda ...</h3>
                    <p class="harga">100K <span>/Hari</span></p>
                    <a href="#" class="btn-detail">Details</a>
                </div>
                <div class="produk-card">
                    <img src="img/flysheet.jpg" alt="Fly Sheet">
                    <h3>Tenda ...</h3>
                    <p class="harga">50K <span>/Hari</span></p>
                    <a href="#" class="btn-detail">Details</a>
                </div>
            </div>
        </div>
    </section>

    <section class="katalog-lengkap">
        <div class="container" style="text-align: center; margin-top: 40px;">
            <button onclick="openPopup()" class="btn-katalog">
                📄 Lihat Katalog Lengkap
            </button>
        </div>
    </section>

    <!-- Katalog end -->

    <!-- Kontak Section start -->
    <section id="contact" class="contact">
        

    <!-- Contact Section start -->
    
    <!-- Popup Fullscreen -->
    <div id="popupKatalog" class="popup-katalog">
        <div class="popup-content">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <img src="img/katalog-lengkap.jpg" alt="Katalog Lengkap" class="katalog-img">
        </div>
    </div>

    @include('partial/footer')

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