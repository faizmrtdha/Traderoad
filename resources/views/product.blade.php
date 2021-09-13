<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/product.css" rel="stylesheet" />

    <!-- Swiper JS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <title>Cocha</title>
  </head>

  <body>
    <div class="navigasi">
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img
              class="img-fluid"
              src="img/jdrlogo.png"
              alt="logo"
              width="40px"
              height="40px"
            />
            <div class="vr"></div>
            <span class="mb-0">Cocha</span>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars" style="color: grey"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" href="#">Home</a>
              <a class="nav-link" href="#">Features</a>
              <a class="nav-link" href="#">Pricing</a>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <div class="napigasi my-5">
      <div class="container">
        <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="container">
      <div class="isi d-md-flex flex-row justify-content-between mb-5">
        <div class="thumbnail d-md-flex flex-wrap">
          <div
            style="
              --swiper-navigation-color: #fff;
              --swiper-pagination-color: #fff;
            "
            class="swiper mySwiper2"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="img/product/1.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="img/product/2.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="img/product/3.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="img/product/4.jpg" />
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <div thumbsSlider="" class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="img/product/1.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="img/product/2.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="img/product/3.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="img/product/4.jpg" />
              </div>
            </div>
          </div>
        </div>
        <div class="details d-md-flex flex-column w-100">
          <h1 class="mb-4">Lemon</h1>
          <h4>$1000</h4>
          <p class="my-3">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti
            neque omnis adipisci fugiat odit voluptas ducimus? Fugit sint,
            molestiae reiciendis repudiandae harum, ratione facilis earum dolor
            labore iste quas quidem dolores. Nobis accusamus odio consequatur,
            harum sed corrupti minus amet impedit deserunt laborum ipsa esse
            eveniet aut officiis quis voluptatem!
          </p>
        </div>
      </div>
    </div>

    <div class="footer" id="contact">
      <div class="container">
        <section class="d-grid justify-content-center">
          <h3>Questions?</h3>
          <span>Let’s Get In Touch</span>
        </section>
        <div class="row">
          <div class="col">
            <img src="img/jdr.png" width="250px" class="" alt="" />
            <h4>PT. Jajar Dwi Raya</h4>
            <span
              >We also continue to update the information about the company
              through social media, for the latest information you can follow
              our social media.</span
            >
            <div class="social-media">
              <a href="">
                <i id="linkedin" class="fab fa-linkedin-in me-3"></i>
              </a>
              <a
                id="wa"
                href="https://wa.me/+62822222222"
                target="_blank"
                rel="noreferrer"
              >
                <i class="fab fa-whatsapp me-3"></i>
              </a>
            </div>
          </div>
          <div class="col"></div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <span>© 2021 Cocha. All rights reserved</span>
      </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <script src="js/swiper.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
    </script>
  </body>
</html>
