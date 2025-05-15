@extends('layout.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/katalog-detail.css') }}">
@endpush

@section('content')
<!-- Hero Section Start -->
<section class="hero" id="home">
    <main class="content">
        <h1>{{ $paket->nama_produk }}</h1>
    </main>
</section>
<!-- Hero Section End -->

        
<div class="container">
    <div class="left">
        <img src="{{ asset('img/' . $paket->gambar) }}" alt="{{ $paket->nama_paket }}" class="main-image">
    </div>
    <div class="right">
        <h2>Spesifikasi</h2>
        <h1>{{ $paket->nama_paket }}</h1>
        <p class="description">
            {{ $paket->deskripsi_paket }}
        </p>

        <ul class="specs">
        @foreach (explode(',', $paket->detail_paket) as $detail)
            <li>{{ trim($detail) }}</li>
        @endforeach
        </ul>

        <div class="price">
            <span>{{ number_format($paket->harga) }}</span> /Hari
        </div>

        <div class="actions">
            <button class="sewa-btn">Sewa Sekarang</button>
            <a href="https://wa.me/6287876971615" class="wa-link">+62 878 7697 1615</a>
        </div>
    </div>
</div>
@endsection