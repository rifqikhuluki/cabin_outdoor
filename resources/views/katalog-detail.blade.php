<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $product->nama_produk }}</title>
    
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
            <link rel="stylesheet" href="{{ asset('css/katalog-detail.css') }}">
</head>
<body>
@include('partial/header')

<!-- Hero Section Start -->
<section class="hero" id="home" style="background-image: url('../img/{{ $product->gambar }}');">
    <main class="content">
        <h1>{{ $product->nama_produk }}</h1>
    </main>
</section>
<!-- Hero Section End -->

        
<div class="container">
    <div class="left">
        <img src="{{ asset('img/' . $product->gambar) }}" alt="{{ $product->nama_produk }}" class="main-image">
    </div>
    <div class="right">
        <h2>Spesifikasi</h2>
        <h1>{{ $product->nama_produk }}</h1>
        <p class="description">
            {{ $product->deskripsi_produk }}
        </p>

        <ul class="specs">
            {!! $product->detail_produk !!}
        </ul>

        <div class="price">
            <span>{{ number_format($product->harga) }}</span> /Hari
        </div>

        <div class="actions">
            <button class="sewa-btn">Sewa Sekarang</button>
            <a href="https://wa.me/6287876971615" class="wa-link">+62 878 7697 1615</a>
        </div>
    </div>
</div>

@include('partial/footer')
    
</body>
</html>