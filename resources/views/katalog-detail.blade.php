@extends('layout.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/katalog-detail.css') }}">
@endpush

@section('content')
<!-- Hero Section Start -->
<section class="hero" id="home">
    <main class="content">
        <h1>{{ $product->nama_produk }}</h1>
    </main>
</section>
<!-- Hero Section End -->

        
<div class="container">
    <div class="left">
        <img src="{{ asset('/storage/images/' . $product->gambar) }}" alt="{{ $product->nama_produk }}" class="main-image">
    </div>
    <div class="right">
        <h2>Spesifikasi</h2>
        <h1>{{ $product->nama_produk }}</h1>
        <p class="description">
            {{ $product->deskripsi_produk }}
        </p>

        <ul class="specs">
        @foreach (explode(',', $product->detail_produk) as $detail)
            <li>{{ trim($detail) }}</li>
        @endforeach
        </ul>

        <div class="price">
            <span>{{ number_format($product->harga) }}</span> /Hari
        </div>

        <div class="actions">
            <a href="https://wa.me/6281336038234" class="sewa-btn">Sewa Sekarang</a>
            <a href="https://wa.me/6281336038234" class="wa-link">081336038234</a>
        </div>
    </div>
</div>
@endsection