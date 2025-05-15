@extends('layout.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/katalog.css') }}">
@endpush

@section('content')

 <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Katalog Cabin <span>Outdoor</span>.</h1>
        </main>
    </section>

    <!-- Hero Section End -->

    <!--Katalog Section-->
    <section class="container">
        <div class="produk">
            <div class="header-bar">
                <h1>List Peralatan Cabin <span>Outdoor</span>.</h1>
                <select id="kategori" onchange="window.location.href=this.value">
                    <option value="{{ route('katalog') }}">Semua Produk</option>
                    @foreach($kategori as $item)
                        <option value="{{ route('katalog') }}?kategori={{ $item->id_kategori }}"
                            {{ request()->query('kategori') == $item->id_kategori ? 'selected' : '' }}>
                            {{ $item->kategori }}
                        </option>
                    @endforeach
                </select>
            </div>

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

    <section class="paket-container">
        <div class="paket">
            <h1>List Paket Cabin <span>Outdoor</span>.</h1>
                <div class="paket-grid">
                    @foreach($paket as $bundling)
                        <div class="paket-card">
                            <img src="img/paket/{{ $bundling->gambar }}" alt="{{ $bundling->nama_paket }}">
                            <h2><strong>{{($bundling->nama_paket) }}</strong></h2>
                            <h2>Rp. {{ number_format($bundling->harga)}}</h2>
                            <a href="{{ route('paket-detail', $bundling->id_paket) }}">
                                <button>Detail</button>
                            </a>
                        </div>
                    @endforeach
                </div>
        </div>
    </section>

@endsection