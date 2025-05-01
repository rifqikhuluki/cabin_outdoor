<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

            <!-- Fonts -->

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
        
            <!-- Feather Icons -->
        
            <script src="https://unpkg.com/feather-icons"></script>
        
            <!-- My JavaScript -->
             <script src="Cabin-Outdoor/js/script.js"></script>
        
            <!-- My Style -->
            <link rel="stylesheet" href="css/home.css">
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
    <!-- Hero Section End-->

    <section class="keunggulan">
    <div class="keunggulan-1">
        <div class="img1">
            <a href="#"><i data-feather="award" class="kualitas"></i></a>
        </div>
        <div class="text1">
            <h1>Kualitas Terbaik</h1>
        </div>
    </div>

    <div class="keunggulan-2">
        <div class="img2">
            <a href="#"><i data-feather="tag" class="pilihan"></i></a>
        </div>
        <div class="text2">
            <h1>Banyak Pilihan</h1>
        </div>
    </div>

    <div class="keunggulan-3">
        <div class="img3">
            <a href="#"><i data-feather="dollar-sign" class="uang"></i></a>
        </div>
        <div class="text3">
            <h1>Harga Bersahabat</h1>
        </div>
    </div>
    </section>

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

    <!--Tentang Kami Section-->
    <section class="tentang">
        <div class="tentang-container">

            <div class="tentang-img">
                <img src="img/about.png" alt="tentang kami">
            </div>

            <div class="tentang-text">
                <h2>Tentang Cabin <span>Outdoor</span>.</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum nisi, assumenda facere commodi vitae aut dolorem sequi autem ullam vel maxime nulla fugit. Ipsa nesciunt odit iusto debitis et asperiores.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero rem assumenda consectetur optio labore voluptates placeat eaque nesciunt consequatur! Libero vitae natus odio rem iste tempore porro eum neque ipsum.</p>
            </div>

        </div>
    </section>

    <section class="unggulan">
        <h2>Produk Cabin Outdoor</h2>
        <p>Sewa peralatan outdoor terbaik untuk petualanganmu!</p>
        <div class="grid">
            @foreach($products as $product)
                <div class="card">
                    <img src="img/{{ $product->gambar }}" alt="{{ $product->nama_produk }}">
                    <h2><strong>{{($product->nama_produk) }}</strong></h2>
                    <h2>Rp. {{ number_format($product->harga)}}</h2>
                    <a href="{{ route('katalog-detail', $product->id_produk) }}">
                        <button>Detail</button>
                    </a>
                </div>
            @endforeach
        </div>

        <a href="/katalog" class="tombol"> <button>Lihat peralatan lainya</button>
        </a>
        
    </section>

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