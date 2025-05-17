@extends('layout.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/tentang.css') }}">
@endpush

@section('content')
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

    <div class="container-swipper">
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
@endsection

@push('scripts')
    <script src="{{ asset('js/tentang.js') }}"></script>
@endpush
