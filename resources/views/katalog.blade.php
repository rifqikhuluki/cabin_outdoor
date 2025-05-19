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
    
    <!--Katalog Section-->
    <section class="container-katalog">

        <!-- Produk Section -->
        <div class="produk">
            <div class="header-bar">
                <h1>List Peralatan Cabin <span>Outdoor</span>.</h1>

                <!-- Kategori -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori
                    </button>
                    <ul class="dropdown-menu">
                        @foreach($kategori as $categories)
                        <li>
                            <a class="dropdown-item" href="{{ route('katalog', ['kategori' => $categories->id_kategori]) }}">
                            {{ $categories->kategori }}
                            </a>
                        </li>
                        @endforeach
                        <ul class="dropdown-divider"></ul>
                        <a class="dropdown-item" href="{{ route('katalog') }}">Semua kategori</a>
                    </ul>
                </div>
            </div>
            
            <!-- Produk Card -->
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
        
        <!-- paginasi -->
        <div class="row">
            <div class="col flex-wrap">
                {{ $products->links() }}
            </div>
        </div>
    </section>

    <!-- Paket Section -->
    <section class="paket-container">
        <div class="paket">
            <h1>List Paket Cabin <span>Outdoor</span>.</h1>
            
            <!-- Paket card -->
                <div class="paket-grid">
                    @foreach($paket as $bundling)
                        <div class="paket-card">
                            <img src="{{ asset('/storage/images/' . $bundling->gambar) }}" alt="{{ $bundling->nama_paket }}" alt="{{ $bundling->nama_paket }}">
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