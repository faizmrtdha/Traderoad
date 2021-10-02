<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="/css/style.css" rel="stylesheet" />
    <!-- Swiper JS -->
    <link rel="stylesheet" href="css/swiper.css">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- font awesome -->
    <link href="css/all.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/jquery.fullpage.css">


    <title>Cocha | {{ $title }}</title>
</head>

<body>
    <div class="main" id="fullpage">
        <div class="navigasi" id="menu">
            @include('partials.navbar')
        </div>
        <div class="jumbotron section" data-anchor="banner">
            @include('partials.jumbotron')
        </div>

        <div class="about-us section" id="about" data-anchor="about-us">
            @include('partials.about')
        </div>

        <div class="keyfeature section" id="feature" data-anchor="keyfeature">
            @include('partials.keyfeature')
        </div>

        <div class="slider section" id="product" data-anchor="our-product">
            @include('partials.slider')
        </div>

        <div class="warehouse section" id="warehouse" data-anchor="our-warehouse">
            @include('partials.warehouse')
        </div>

        <div class="team section" id="team" data-anchor="our-team">
            @include('partials.team')
        </div>

        <div class="footer section fp-auto-height" id="contact" data-anchor="our-contact">
            @include('partials.footer')
        </div>
        <footer>
            <div class="container">
                <span id="copyright">© 2021 Cocha. All rights reserved</span>
            </div>
        </footer>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <!-- swiperJS -->
    {{-- <script src="js/jquery.onepage-scroll.js"></script> --}}
    <script src="js/jquery.fullpage.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/apps.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
