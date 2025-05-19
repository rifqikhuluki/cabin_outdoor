@extends('layout.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@section('content')
  <!-- Hero Section -->
  <section class="hero">
    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="Hero Nature Image" />
    <div class="hero-text">
      <h1>Camping di Malang-Batu</h1>
      <h2>Spot yang Wajib Masuk Daftar Liburanmu!</h2>
    </div>
  </section>

  <!-- Blog -->
  <section class="intro">
    <div class="service-box">
      <h3>1. Coban Rondo</h3>
      <p>
        Air terjun legend yang masih kece abis! Coban Rondo tuh udah kayak tempat wajib kalau main ke Batu.
        Air terjunnya tinggi banget — sekitar 84 meter — dan debit airnya nggak pernah zonk, apalagi pas musim hujan.
        Suasananya adem, hijau, dan yang paling asik, udaranya sejuk parah!
      </p>
      <p>
        Kamu bisa chill di bawah air terjun, duduk santai sambil ngopi, atau bahkan main air kalau mau sedikit basah-basahan.
        Oh iya, di sini juga ada labirin seru buat yang mau uji nyali sambil seru-seruan bareng temen.
      </p>
      <a href="https://www.google.com/maps/place/Coban+rondo+malang+jawa+timur/@-7.884994,112.4592946,15z/data=!4m10!1m2!2m1!1scoban+rondo!3m6!1s0x2e78874107d106e7:0xe9562a2f582ee112!8m2!3d-7.884994!4d112.477319!15sCgtjb2JhbiByb25kb5IBEnRvdXJpc3RfYXR0cmFjdGlvbqoBQQoML2cvMTEzcWJrcWJwEAEyHhABIhpF1nDdwdqXiETmHYV_jqy-oRhmjtYtHiOptTIPEAIiC2NvYmFuIHJvbmRv4AEA!16s%2Fg%2F11khkgxx7x?entry=ttu&g_ep=EgoyMDI1MDUxMy4xIKXMDSoJLDEwMjExNDU1SAFQAw%3D%3D" target="_blank" class="google-maps-link">
        Lihat Coban Rondo di Google Maps
      </a>


    </div>

    <div class="service-box">
      <h3>2. Coban Rais</h3>
      <p>
        Tempat healing yang penuh spot estetik. Selain air terjun yang kece, tempat ini penuh banget sama spot-spot foto Instagramable.
        Ada ayunan raksasa, gardu pandang kece, sampai bunga warna-warni.
      </p>
      <p>
        Cocok banget buat kamu yang suka explore tempat dengan mix antara alam dan konsep kekinian.
        Biarpun rame, tapi masih kerasa tenang karena dikelilingi hutan pinus yang sejuk banget!
      </p>
      <a href="https://www.google.com/maps/place/Coban+Rais/@-7.9151261,112.4970053,16z/data=!4m10!1m2!2m1!1scoban+rais!3m6!1s0x2e7887007c0f5147:0xdb4dc9f18e924eba!8m2!3d-7.9151261!4d112.5060172!15sCgpjb2JhbiByYWlzkgESdG91cmlzdF9hdHRyYWN0aW9uqgExEAEyHRABIhkmz-gtprFRzN70igjLsPD5B3UoBpHPD-MtMg4QAiIKY29iYW4gcmFpc-ABAA!16s%2Fg%2F11ldmjb1jz?entry=ttu&g_ep=EgoyMDI1MDUxMy4xIKXMDSoJLDEwMjExNDU1SAFQAw%3D%3D" target="_blank" class="google-maps-link">
        Lihat Coban Rais di Google Maps
      </a>
    </div>

    <div class="service-box">
      <h3>3. Pantai Balekambang</h3>
      <p>
        Kecil-kecil tapi vibes-nya kayak Tanah Lot! Gak perlu jauh-jauh ke Bali buat dapet pemandangan pantai plus pura di tengah laut,
        karena di Pantai Balekambang kamu bisa nemuin itu juga!
      </p>
      <p>
        Di sini ada Pura Luhur Amertha Jati yang berdiri gagah di atas batu karang besar. Pas air laut surut,
        kamu bisa jalan kaki ke pura lewat jembatan yang estetik banget. Sunset di sini juga cantik parah —
        vibes-nya romantis dan damai.
      </p>
      <a href="https://www.google.com/maps/place/Pantai+Balekambang" target="_blank" class="google-maps-link">
        Lihat Pantai Balekambang di Google Maps
      </a>
    </div>

    <div class="service-box">
      <h3>4. Paralayang Gunung Banyak</h3>
      <p>
        Terbang bebas, liat Batu dari langit. Kalau kamu tipe petualang sejati, wajib banget nyobain paralayang di Gunung Banyak!
        Dari sini kamu bakal bisa liat Kota Batu dari atas — rumah-rumah kecil, hutan hijau, pegunungan... semuanya terlihat indah banget.
      </p>
      <p>
        Spot ini juga jadi tempat hits buat sunset hunter karena pemandangannya bikin speechless.
        Kalau belum berani terbang, masih bisa duduk santai sambil nikmatin pemandangan dari Bukit Paralayang atau ngopi di café sekitar.
      </p>
      <a href="https://www.google.com/maps/place/Paralayang+Gunung+Banyak,+Batu,+Malang/@-7.8550682,112.4781193,15z/data=!3m1!4b1!4m6!3m5!1s0x2e788735bbd40639:0x4a4445e74cee55e2!8m2!3d-7.8550899!4d112.4965734!16s%2Fg%2F11sk2tks84?entry=ttu&g_ep=EgoyMDI1MDUxMy4xIKXMDSoJLDEwMjExNDU1SAFQAw%3D%3D" target="_blank" class="google-maps-link">
        Lihat Paralayang di Google Maps
      </a>
    </div>
  </section>
@endsection