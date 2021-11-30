<!DOCTYPE html>
<html lang="en" id="home">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/swiper.css">
  <link href="/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/css/all.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/jquery.fullPage.css">

  <title>Cocha | {{ $title }}</title>
</head>

<body>
  <div class="navigasi">
    @include('partials.navbar')
  </div>

  @yield('content')

  <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
    integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
  <script src="js/jquery.fullPage.js"></script>
  <script src="js/swiper.js"></script>
  <script src="js/apps.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
