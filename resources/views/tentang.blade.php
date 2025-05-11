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

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- My Style -->
    <link rel="stylesheet" href="css/tentang.css">
</head>
<body>
    @include('partial/header')

    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Tentang Cabin <span>Outdoor</span>.</h1>
        </main>
    </section>
    <!-- Hero Section End -->

    <!--Tentang Kami Section-->
    <section class="tentang">
        <div class="tentang-container">
            <div class="tentang-img">
                <img src="{{ asset('img/cabinabout.jpg') }}" alt="tentang kami">
            </div>
            <div class="tentang-text">
                <h2>Tentang Cabin <span>Outdoor</span>.</h2>
                <p>Cabin Outdoor adalah tempat terbaik untuk menikmati liburan di tengah alam terbuka. Dengan fasilitas yang lengkap, kami menghadirkan pengalaman berlibur yang aman, nyaman, dan seru.</p>
                <p>Dengan nuansa alam yang memikat dan suasana yang menenangkan, Cabin Outdoor menjadi pilihan sempurna untuk beristirahat, bercengkerama, dan menciptakan kenangan tak terlupakan. Ayo rencanakan petualangan serumu bersama kami!</p>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="swiper-container-wrapper">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="img-wrapper">
                            <img src="{{ asset('img/cabin/1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-wrapper">
                            <img src="{{ asset('img/cabin/2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-wrapper">
                            <img src="{{ asset('img/cabin/3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-wrapper">
                            <img src="{{ asset('img/cabin/4.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-wrapper">
                            <img src="{{ asset('img/cabin/5.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-wrapper">
                            <img src="{{ asset('img/cabin/6.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
    
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    

    @include('partial/footer')

    <!-- Feather Icons Script -->
    <script>
        feather.replace();
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="/js/tentang.js"></script>

    
    
         
</body>
</html>
