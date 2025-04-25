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
    <link rel="stylesheet" href="css/tentang.css">
</head>
<body>
    @include('partial/header')

    <!-- Hero Section Start -->
     
    <section class="hero" id="home">
        <main class="content">
            <h1>Tentang Cabin <span>Outdoor</span>.</h1>
        </main>
    </section>

    <!-- Hero Section End -->

    <!--Tentang Kami Section-->
    <section class="tentang">
        <div class="tentang-container">

            <div class="tentang-img">
                <img src="img/about.png" alt="tentang kami">
            </div>

            <div class="tentang-text">
                <h2>Tentang Cabin <span>Outdoor</span>.</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum nisi, assumenda facere commodi vitae aut dolorem sequi autem ullam vel maxime nulla fugit. Ipsa nesciunt odit iusto debitis et asperiores.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero rem assumenda consectetur optio labore voluptates placeat eaque nesciunt consequatur! Libero vitae natus odio rem iste tempore porro eum neque ipsum.</p>
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