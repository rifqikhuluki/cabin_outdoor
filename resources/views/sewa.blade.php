@extends('layout.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/sewa.css') }}">
@endpush

@section('content')
    <!-- Hero Section Start -->
     <section class="hero" id="home">
        <main class="content">
            <h1>Sewa di Cabin <span>Outdoor</span>.</h1>
        </main>
    </section>
    <!-- Hero Section End-->

    <!--Cara sewa-->
    <section class="sewa">
        <div class="sewa-header">
            <h1>Sewa di Cabin <span>Outdoor</span>.</h1>
        </div>

        <div class="sewa-container">
        <div class="sewa-main1">
            <div class="img1">
            <a href="#"><i data-feather="shopping-bag" class="pilih"></i></a>
            </div>
            <div class="text1">
            <h3>Pilih Peralatan</h3>
            <p>Pilih peralatan yang anda inginkan</p>
            </div>
        </div>

        <div class="sewa-main2">
            <div class="img2">
            <a href="#"><i data-feather="phone" class="phone"></i></a>
            </div>
            <div class="text2">
            <h3>Hubungi Kami</h3>
            <p>Jika sudah mendapatkan alat yang anda inginkan, Boking alat dengan memberikan DP terlebih dahulu, konfirmasi pesanan melalui Whatsapp,</p>
            </div>
        </div>

        <div class="sewa-main3">
            <div class="img3">
            <a href="#"><i data-feather="dollar-sign" class="uang"></i></a>
            </div>
            <div class="text3">
            <h3>Pembayaran</h3>
            <p>Setelah konfirmasi, jangan lupa melakukan pembayaran, pembayaran dapat dilakukan secara langsung di store atau dengan transfer</p>
            </div>        
        </div>

        <div class="sewa-main4">
            <div class="img4">
            <a href="#"><i data-feather="home" class="home"></i></a>
            </div>
            <div class="text4">
            <h3>Ambil Pesanan</h3>
            <p>Jika sudah melakukan pembayaran, pesanan bisa diambil di basecamp cabin outdoor di alamat blalala dengan memberikan kartu identitas sebagai jaminan</p>
            </div>
        </div>

        <div class="sewa-main5">
            <div class="img5">
            <a href="#"><i data-feather="triangle" class="gunung"></i></a>
            </div>
            <div class="text5">
            <h3>Berpetulang</h3>
            <p>Selamat berpetualang dengan aman bersama cabin outdoor</p>
            </div>
        </div>
        </div>

        <div class="sewa-main6">
            <div class="img6">
            <a href="#"><i data-feather="calendar" class="kalender"></i></a>
            </div>
            <div class="text6">
            <h3>Pengembalian</h3>
            <p>Setelah berpetualang, jangan lupa kembalikan alat yang disewa sesuai durasi sewa dengan dispensasi pengembalian 6 jam</p>
            </div>
        </div>
        </div>
    </section>
@endsection