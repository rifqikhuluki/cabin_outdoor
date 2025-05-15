@extends('layout.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
@endpush

@section('content')
    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Kontak Cabin <span>Outdoor</span>.</h1>
        </main>
    </section>

    <!-- Hero Section End -->

    <!-- Kontak -->

    <section class="kontak">
        <div class="kontak-container">
            <div class="kontal-img">
                <img src="{{ asset('img/logo.png') }}" alt="logo">
            </div>
            <div class="kontak-text">
                <h2>Kontak Cabin <span>Outdoor</span>.</h2>
                <h3>Instagram</h3>
                <a href="https://www.instagram.com/cabin.outdoor?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">@cabin.outdoor</a>
                <h3>Phone</h3>
                <p>081336038234</p>
                <h3>Alamat</h3>
                <p>Blk. A1 No.48, Merjosari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144</p>
                <h3>Maps</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.553059615286!2d112.5808346!3d-7.9416569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78832115414eb1%3A0xec63bbc45248a605!2sCabin%20Outdoor%20(Penyewaan%20Alat%20Camping)!5e0!3m2!1sen!2sid!4v1745342915081!5m2!1sen!2sid"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection