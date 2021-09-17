<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Dashboard Cocha JDR</title>

    <link href="/css/style.css" rel="stylesheet" />
    <!-- Swiper JS -->
    <link rel="stylesheet" href="/css/swiper.css" />
    

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    {{-- Trix Editor --}}
    <link rel="stylesheet" href="/css/trix.css">
    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    {{-- <link href="/css/sidebars.css" rel="stylesheet"> --}}

  </head>
  <body>

    @include('dashboard.layouts.header')
      
      <div class="container-fluid">
        <div class="row">
          @include('dashboard.layouts.sidebar')
      
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('container')
          </main>
        </div>
      </div>




    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>
    <script src="/js/trix.js"></script>
    <script src="js/swiper.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="js/apps.js"></script>
    {{-- <script src="/js/sidebars.js"></script> --}}
  </body>
</html>
