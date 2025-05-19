@extends('layout.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Mari Melangkah Dengan Cabin</h1>
            <p>Temani langkahmu menjelajahi alam bersama perlengkapan terbaik dari Cabin Outdoor.</p>
            <a href="https://wa.me/6281336038234" type="button" class="btn btn-primary btn-lg">Sewa Sekarang</a>
        </main>
    </section>

    <!-- Keunggulan -->
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

    <!-- Brand section -->
    <section class="brand">
        <div class="brand-container">
            <h2>Our Brand</h2>
            <p>Brand-brand terpercaya dalam dunia petualangan outdoor.</p>
            <div class="slider">
                <div class="slider-track">
                    <div class="slide">
                        <img src="{{ asset('img/brand/brand2.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/brand/brand3.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/brand/brand4.jpeg') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/brand/columbia.jpg') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/brand/decatlhon.jpg') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/brand/jackwolfskin.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/brand/lavio.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/brand/teksta.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/brand/tendaki.jpg') }}" alt="">
                    </div>

                    <div class="slide">
                        <img src="{{ asset('img/brand/brand2.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/brand/brand3.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/brand/brand4.jpeg') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/brand/columbia.jpg') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/brand/decatlhon.jpg') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/brand/jackwolfskin.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/brand/lavio.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/brand/teksta.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/brand/tendaki.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Tentang Kami Section-->
    <section class="tentang">
        <div class="tentang-container">
            <div class="tentang-img">
                <img src="{{ asset('img/cabinabout.jpg') }}" alt="tentang kami">
            </div>

            <div class="tentang-text">
                <h2>Tentang Cabin <span>Outdoor</span>.</h2>
                <p>Cabin Outdoor adalah tempat terbaik untuk menikmati liburan di tengah alam terbuka. 
                    Dengan fasilitas yang lengkap, kami menghadirkan pengalaman berlibur yang aman, nyaman, dan seru</p>
                <p>Dengan nuansa alam yang memikat dan suasana yang menenangkan, Cabin Outdoor menjadi pilihan sempurna untuk beristirahat, bercengkerama, dan menciptakan kenangan tak terlupakan. 
                    Ayo rencanakan petualangan serumu bersama kami!</p>
            </div>
        </div>
    </section>

    <!-- Produk Section -->
    <section class="produk">
        <h2>Produk Cabin Outdoor</h2>
        <p>Sewa peralatan outdoor terbaik untuk petualanganmu!</p>
        <div class="grid">
            @foreach($products as $product)
                <div class="card">
                    <img src="{{ asset('/storage/images/' . $product->gambar) }}" alt="{{ $product->nama_produk }}">
                    <h2><strong>{{($product->nama_produk) }}</strong></h2>
                    <h2>Rp. {{ number_format($product->harga)}}</h2>
                    <a href="{{ route('katalog-detail', $product->id_produk) }}">
                        <button>Detail</button>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="d-grid gap-2">
            <a href="{{ route('katalog') }}" class="btn btn-primary" type="button">Lihat peralatan lainya</a>
        </div>
        
    </section>

    <!-- Blog Section -->
    <section class="container-blog">
        <div class="card-blog">
            <a href="{{ route('rekomendasi.blog1') }}">
                <img src="{{ asset('img/rekomend1.png') }}" alt="Spot Camping">
                <div class="highlight-bar"></div>
                <div class="card-title">Camping di Malang-Batu: 4 Spot yang Wajib Masuk Daftar Liburanmu!</div>
            </a>
        </div>

        <div class="card-blog">
            <a href="{{ route('rekomendasi.blog2') }}">
                <img src="{{ asset('img/rekomend3.png') }}" alt="Bromo Sudut Lain">
                <div class="highlight-bar"></div>
                <div class="card-title">Bromo dari Sudut Berbeda: Surga Tersembunyi yang Wajib Kamu Jelajahi!</div>
            </a>
        </div>

        <div class="card-blog">
            <a href="{{ route('rekomendasi.blog3') }}">
                <img src="{{ asset('img/rekomend2.png') }}" alt="Gunung Populer">
                <div class="highlight-bar"></div>
                <div class="card-title">5 Gunung Populer Untuk Hiking: Jalur Menantang dengan Pemandangan Menakjubkan!</div>
            </a>
        </div>
    </section>
@endsection