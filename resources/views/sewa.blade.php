<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="css/sewa.css">

</head>
<body>
    @include('partial/header')

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

    @include('partial/footer')

    <script>
        feather.replace();

        function openPopup() {
            document.getElementById('popupKatalog').style.display = 'block';
            }

        function closePopup() {
            document.getElementById('popupKatalog').style.display = 'none';
            }

            
    </script>
    
</body>
</html>