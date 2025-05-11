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
        <link rel="stylesheet" href="{{ asset('css/blog1.css') }}">
</head>
<body>
  @include('partial/header')

  <section class="hero" id="home">
    <main class="content">
        <h1>Katalog Cabin <span>Outdoor</span>.</h1>
    </main>
  </section>

    <div style="background-color: #F0FFF0;; color: #000;">
        <div class="blog-container">
          <h1 class="blog-title">4 Spot Camping Favorit di Malang Batu</h1>
          <img src="{{ asset('img/rekomend1.png') }}" class="blog-image" alt="Camping di Malang">
        
          <div class="blog-section">
            <h2>1. Coban Rondo</h2>
            <p>
              Air terjun legend yang masih kece abis! Coban Rondo tuh udah kayak tempat wajib kalau main ke Batu.
              Air terjunnya tinggi banget — sekitar 84 meter — dan debit airnya nggak pernah zonk, apalagi pas musim hujan.
              Suasananya adem, hijau, dan yang paling asik, udaranya sejuk parah!
            </p>
            <p>
              Kamu bisa chill di bawah air terjun, duduk santai sambil ngopi, atau bahkan main air kalau mau sedikit basah-basahan.
              Oh iya, di sini juga ada labirin seru buat yang mau uji nyali sambil seru-seruan bareng temen.
            </p>
          </div>
        
          <div class="blog-section">
            <h2>2. Coban Rais</h2>
            <p>
              Tempat healing yang penuh spot estetik. Selain air terjun yang kece, tempat ini penuh banget sama spot-spot foto Instagramable.
              Ada ayunan raksasa, gardu pandang kece, sampai bunga warna-warni.
            </p>
            <p>
              Cocok banget buat kamu yang suka explore tempat dengan mix antara alam dan konsep kekinian.
              Biarpun rame, tapi masih kerasa tenang karena dikelilingi hutan pinus yang sejuk banget!
            </p>
          </div>
        
          <div class="blog-section">
            <h2>3. Pantai Balekambang</h2>
            <p>
              Kecil-kecil tapi vibes-nya kayak Tanah Lot! Gak perlu jauh-jauh ke Bali buat dapet pemandangan pantai plus pura di tengah laut,
              karena di Pantai Balekambang kamu bisa nemuin itu juga!
            </p>
            <p>
              Di sini ada Pura Luhur Amertha Jati yang berdiri gagah di atas batu karang besar. Pas air laut surut,
              kamu bisa jalan kaki ke pura lewat jembatan yang estetik banget. Sunset di sini juga cantik parah —
              vibes-nya romantis dan damai.
            </p>
          </div>
        
          <div class="blog-section">
            <h2>4. Paralayang Gunung Banyak</h2>
            <p>
              Terbang bebas, liat Batu dari langit. Kalau kamu tipe petualang sejati, wajib banget nyobain paralayang di Gunung Banyak!
              Dari sini kamu bakal bisa liat Kota Batu dari atas — rumah-rumah kecil, hutan hijau, pegunungan... semuanya terlihat indah banget.
            </p>
            <p>
              Spot ini juga jadi tempat hits buat sunset hunter karena pemandangannya bikin speechless.
              Kalau belum berani terbang, masih bisa duduk santai sambil nikmatin pemandangan dari Bukit Paralayang atau ngopi di café sekitar.
            </p>
          </div>
          <a href="/" class="blog-back">← Kembali ke Beranda</a>
        </div>

  @include('partial/footer')
    
</body>
</html>


