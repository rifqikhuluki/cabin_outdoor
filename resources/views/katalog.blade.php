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
        <link rel="stylesheet" href="css/katalog.css">
</head>
<body>
    @include('partial/header')

    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Katalog Cabin <span>Outdoor</span>.</h1>
        </main>
    </section>

    <!-- Hero Section End -->
    <section class="container">
        <div class="produk">
            <h1>List Peralatan Cabin <span>Outdoor</span>.</h1>

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

<div class="pagination">
    @if ($products->onFirstPage())
        <span class="disabled">&laquo;</span>
    @else
        <a href="{{ $products->previousPageUrl() }}">&laquo;</a>
    @endif

    @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
        @if ($page == $products->currentPage())
            <span class="active">{{ $page }}</span>
        @else
            <a href="{{ $url }}">{{ $page }}</a>
        @endif
    @endforeach

    @if ($products->hasMorePages())
        <a href="{{ $products->nextPageUrl() }}">&raquo;</a>
    @else
        <span class="disabled">&raquo;</span>
    @endif
</div>

    </section>
    <!--Katalog Section-->


    @include('partial/footer')
</body>
</html>