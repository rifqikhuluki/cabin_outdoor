@extends('layout.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/paket-detail.css') }}">
@endpush

@section('content')
    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>{{ $paket->nama_paket }}</h1>
        </main>
    </section>

    <!-- Paket detail -->
    <section class="paket-container py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('/storage/images/' . $paket->gambar) }}" alt="{{ $paket->nama_paket }}"></div>
                <div class="col-md-6">
                    <div class="small mb-1 fs-5 fw-bolder">Spesifikasi</div>
                    <h1 class="nama display-5 fw-bolder mb-1">{{ $paket->nama_paket }}</h1>
                    <p class="small mb-3 fs-6">{{ $paket->deskripsi_paket }}</p>
                    <ul class="small mb-4 fs-6">
                        @foreach (explode(',', $paket->detail_paket) as $detail)
                            <li>{{ trim($detail) }}</li>
                        @endforeach
                    </ul>
                    <div class="d-flex align-items-center">
                        <a href="{{ $link }}" class="sewa-btn btn btn-primary">Sewa Sekarang</a>
                        <div class="medium ms-3 fs-5 fw-bolder">{{ number_format($paket->harga) }} /Hari</div>
                    </div>
                </div>
            </div>
            <a href="{{ route('katalog') }}">
                <button class="back small mt-2 fs-5" type="button" class="btn btn-link">< kembali</button>
            </a>
        </div>
    </section>
@endsection