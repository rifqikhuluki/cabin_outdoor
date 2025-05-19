@extends('layout.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@section('content')
  <!-- Hero Section -->
  <section class="hero">
    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="Hero Nature Image" />
    <div class="hero-text">
      <h1>5 Gunung Populer</h1>
      <h2>Untuk Hiking di Indonesia</h2>
    </div>
  </section>

  <!-- Blog -->
  <section class="intro">
    <div class="service-box">
      <h3>1. Gunung Rinjani, Lombok</h3>
      <p>
        Gunung Rinjani tuh udah kayak primadona-nya pendaki Indonesia. Lokasinya di Lombok, NTB, dan tingginya gak main-main — 3.726 mdpl! Tapi jangan takut, capekmu bakal dibayar lunas sama Segara Anak, danau kece di tengah kawah Rinjani yang vibes-nya kayak dunia lain.
      </p>
      <p>
        Track-nya emang butuh tenaga ekstra, tapi sepanjang jalan kamu bakal disuguhi view yang gila-gilaan keren. Sunrise di sini juga bukan main! Buat kamu yang demen petualangan level up, Rinjani wajib banget masuk bucket list!
      </p>
      <a href="https://www.google.com/maps/place/Gunung+Rinjani" target="_blank" class="google-maps-link">
        Lihat Gunung Rinjani di Google Maps
      </a>
    </div>

    <div class="service-box">
      <h3>2. Gunung Semeru, Jawa Timur</h3>
      <p>
          Naik Semeru tuh bukan cuma soal fisik, tapi juga mental. Gunung tertinggi di Pulau Jawa ini punya ketinggian 3.676 mdpl dan butuh effort yang niat banget.
          Tapi percaya deh, tiap langkah ke Mahameru itu worth it.
      </p>
      <p>
          Kalau kamu ngetrip ke sini, bakal ketemu Ranu Kumbolo — danau biru yang super ikonik. Trus ada Oro-oro Ombo yang dipenuhi bunga ungu kayak dunia fantasi. 
          Puncaknya? Dingin banget, tapi ngasih perasaan lega dan bangga luar biasa. Wajib dicoba minimal sekali seumur hidup!
      </p>
      <a href="https://www.google.com/maps/place/Gunung+Semeru" target="_blank" class="google-maps-link">
        Lihat Gunung Semeru di Google Maps
      </a>
    </div>

    <div class="service-box">
      <h3>3. Gunung Kelimutu, Flores</h3>
      <p>
        Buat kamu yang cari spot pendakian unik, Gunung Kelimutu di Ende, Flores ini bisa banget. Daya tarik utamanya? Danau tiga warna di puncaknya! Serius, warnanya bisa berubah-ubah sendiri. Kadang biru, hijau, bahkan merah kehitaman. Ajaib, kan?
      </p>
      <p>
        Tinggi gunungnya sekitar 1.639 mdpl, jadi masih aman buat pemula yang pengen dapet pengalaman magis. Plus, sunrise di sini tuh kayak lukisan hidup — bikin betah berlama-lama di puncak.
      </p>
      <a href="https://www.google.com/maps/place/Gunung+Kelimutu" target="_blank" class="google-maps-link">
        Lihat Gunung Kelimutu di Google Maps
      </a>
    </div>

    <div class="service-box">
      <h3>4. Gunung Batur, Bali</h3>
      <p>
        Gunung Batur adalah destinasi favorit di Bali untuk morning hike. Dengan ketinggian 1.717 mdpl, gunung ini menawarkan sunrise spektakuler dan pemandangan Danau Batur dari atas. Setelah pendakian, kamu bisa relaksasi di pemandian air panas sekitar.
      </p>
      <a href="https://www.google.com/maps/place/Gunung+Batur" target="_blank" class="google-maps-link">
        Lihat Gunung Batur di Google Maps
      </a>
    </div>

    <div class="service-box">
      <h3>5. Gunung Sindoro, Jawa Tengah</h3>
      <p>
        Sindoro, tetangganya Gunung Sumbing, punya ketinggian sekitar 3.153 mdpl. Jalurnya lumayan menantang tapi masih bersahabat buat kamu yang udah punya pengalaman mendaki sebelumnya.
        View-nya? 10/10! Apalagi pas sunrise — bisa ngelihat gunung-gunung lain kayak Merapi, Merbabu, sampai Sumbing sendiri. Epic!
      </p>
      <p>
        Selain alamnya, suasana di jalur pendakian juga adem dan chill. Cocok buat kamu yang pengen “kabur sebentar” dari rutinitas dan nyari udara segar plus ketenangan.
      </p>
      <a href="https://www.google.com/maps/place/Gunung+Sindoro" target="_blank" class="google-maps-link">
        Lihat Gunung Sindoro di Google Maps
      </a>
    </div>
  </section>
@endsection