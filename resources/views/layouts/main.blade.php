<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="/css/style.css" rel="stylesheet" />
    <!-- OWL JS -->
    <link rel="stylesheet" href="css/swiper.css">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- font awesome -->
    <link href="css/all.min.css" rel="stylesheet" type="text/css" />

    <title>Cocha | {{ $title }}</title>
</head>

<body>
    <div class="navigasi">
        @include('partials.navbar')
    </div>
    <div class="jumbotron">
        @include('partials.jumbotron')
    </div>

    <div class="about-us" id="about">
        @include('partials.about')
    </div>

    <div class="keyfeature" id="feature">
        @include('partials.keyfeature')
    </div>

    <div class="slider" id="product">
        @include('partials.slider')
    </div>

    <div class="warehouse" id="warehouse">
        @include('partials.warehouse')
    </div>

    <div class="team" id="team">
        @include('partials.team')
    </div>

    <div class="footer" id="contact">
        @include('partials.footer')
    </div>
    <footer>
        <div class="container">
            <span id="copyright">© 2021 Cocha. All rights reserved</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <!-- swiperJS -->
    <script src="js/swiper.js"></script>
    <script src="js/apps.js"></script>
    <script src="js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
