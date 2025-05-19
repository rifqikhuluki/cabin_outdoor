@extends('layout.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@section('content')
  <!-- Hero Section -->
  <section class="hero">
    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="Hero Nature Image" />
    <div class="hero-text">
      <h1>Bromo dari sudut berbeda</h1>
      <h2>Surga Tersembunyi yang Wajib Kamu Jelajahi!</h2>
    </div>
  </section>

  <!-- Blog -->
  <section class="intro">
    <div class="service-box">
      <h3>Bromo Nggak Cuma Soal Kawah, Lho!</h3>
             <p>
              Siapa sih yang nggak kenal Gunung Bromo? Tapi jangan salah, Bromo itu punya banyak sisi keren yang jarang orang tahu. Jadi, kalau kamu pikir udah pernah “menaklukkan” Bromo, coba deh lihat dari sudut yang berbeda — dijamin vibes-nya beda banget!
            </p>
        
            <p>
              Mulai dari Pasir Berbisik yang luas banget buat kamu yang suka foto-foto aesthetic, sampai serunya naik kuda atau motor trail melintasi padang pasir — rasanya kayak lagi di film petualangan! Lanjut ke Kawah Bromo, tinggal jalan kaki atau sewa kuda, lalu naik tangga menuju spot paling ikonik buat lihat isi perut bumi dari dekat (tapi aman, kok).
            </p>
        
            <p>
              Buat kamu yang suka suasana spiritual, jangan lewatkan Pura Luhur Poten. Pura ini jadi pusat kegiatan keagamaan warga Tengger dan bikin Bromo nggak cuma cantik, tapi juga punya sisi sakral yang bikin adem.
            </p>
        
            <p>
              Jadi tunggu apa lagi? Yuk, jelajahi Bromo dari sisi yang belum pernah kamu lihat sebelumnya bareng Cabin Outdoor!
            </p>
    <a href="https://www.google.com/maps/place/Gunung+Bromo" target="_blank" class="google-maps-link">
      Lihat Gunung Bromo di Google Maps
    </a>
    </div>
  </section>
@endsection