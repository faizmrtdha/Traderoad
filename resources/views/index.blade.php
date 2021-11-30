@extends('layouts.main')
@section('content')
<div class="main" id="fullpage">
  <div class="jumbotron section" data-anchor="banner">
    <div class="gambar">
      <div class="container">
        <h1>
          Leading Supplier <br />
          of Commodities in Indonesia
        </h1>
      </div>
    </div>
  </div>
  <div class="about-us section" id="about" data-anchor="about-us">
    <div class="about container">
      <div class="desc-about">
        <h2>About Us</h2>
        <span id="tentang">We are international trading company focused in export and import activities. Our
          worldwide
          network and
          numerous alliances guarantee attractive purchase options and make it possible to maintain an independent
          position in the market.</span>
        <p id="tentang">
          Through the continuous increase in international activities and the growth of
          worldwide locations, we have achieved a valuable synergy effect. We utilize that advantage to the
          benefit of
          our clients.
        </p>
      </div>

      <div class="img-about">
        <div class="img-parent">
          <img src="img/product/about-us-1.jpg" alt="asdw" class="img-fluid img-child img-child-1" id="about-1" />
          <img src="img/product/about-us-3.jpg" alt="asdw" class="img-fluid img-child img-child-2" id="about-3" />
        </div>
      </div>
    </div>
  </div>
  <div class="keyfeature section" id="feature" data-anchor="keyfeature">
    <div class="container">
      <div class="jstyleflex">
        <h2 class="text-center">Key In Feature</h2>
      </div>
      <div class="styleflex">
        <div class="upleft">
          <span>
            <i class="fas fa-hands-helping fa-4x fa-rotate-30"></i>
          </span>
          <h3>Commitment</h3>
          <p>
            We are committed continuing to provide a lot of commodities , raw material , and finished product to
            worldwide market. Together for economic growth, the environment and the surrounding community.
          </p>
        </div>
        <div class="upleft">
          <span>
            <i class="fas fa-user-shield fa-4x"></i>
          </span>
          <h3>Integrity</h3>
          <p>
            Our company is committed to protecting employees, partners, vendors, and the company from illegal or
            damaging actions by individuals, either knowingly or unknowingly.
          </p>
        </div>
        <div class="upleft">
          <span>
            <i class="fas fa-medal fa-4x fa-rotate-180"></i>
          </span>
          <h3>Quality</h3>
          <p>
            We focus on quality, both for the services that we offer to our customers and for the development of
            our
            products. We seek excellence.
          </p>
        </div>
        <div class="upleft">
          <span>
            <i class="far fa-lightbulb fa-4x"></i>
          </span>
          <h3>Inovation</h3>
          <p>
            We are motivated by the continuous improvements, so we are innovating day by day in order to offer
            solutions to our customers, providing our experience, creating value in long-term relationships.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="slider section" id="product" data-anchor="our-product">
    <h2 class="text-center title-product">Our Product</h2>
    <div class="swiper" id="swiper">
      <div class="swiper-wrapper">
        @foreach ($url as $u)
        <div class="swiper-slide" id="swiper">
          <img src="img/product/{{ $u['thumbnail'] }}" class="img-fluid rounded slide-image" alt="tentang" />
          <a href="/product/{{ $u['slug'] }}" id="swiper" class="overlay">
            See Details
          </a>
        </div>
        @endforeach
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <div class="team section" id="team" data-anchor="our-team">
    <div class="container">
      <h2>Our Teams</h2>
      <div class="foto-team">
        <div class="row">
          <div class="col t-1">
            <img src="img/123.jpg" class="rounded-circle" alt="" width="200px" height="200px" />
            <h4 id="nama">Viqri Al Huda</h4>
            <span id="jabatan">Chief Executing Officer</span>
            <a href="" id="linked" target="_blank" rel="noopener noreferrer">
              <i class="fab fa-linkedin fa-lg" id="linkedin"></i>
            </a>
          </div>
          <div class="col t-1">
            <img
              src="https://cbsnews1.cbsistatic.com/hub/i/2018/11/06/0c1af1b8-155a-458e-b105-78f1e7344bf4/2018-11-06t054310z-1334124005-rc1be15a8050-rtrmadp-3-people-sexiest-man.jpg"
              class="rounded-circle" alt="" width="200px" height="200px" />
            <h4 id="nama">Aprianda Idrus</h4>
            <span id="jabatan">Chief Operating Officer</span>
            <a href="https://www.linkedin.com/in/apriandaidrus" id="linked" target="_blank" rel="noopener noreferrer">
              <i class="fab fa-linkedin fa-lg" id="linkedin"></i>
            </a>
          </div>
          <div class="col t-1">
            <img
              src="https://cbsnews1.cbsistatic.com/hub/i/2018/11/06/0c1af1b8-155a-458e-b105-78f1e7344bf4/2018-11-06t054310z-1334124005-rc1be15a8050-rtrmadp-3-people-sexiest-man.jpg"
              class="rounded-circle" alt="" width="200px" height="200px" />
            <h4 id="nama">Pandhita Hamzah</h4>
            <span id="jabatan">Chief Technology Officer</span>
            <a href="https://www.linkedin.com/in/pandhitahs/" target="_blank" rel="noopener noreferrer" id="linked">
              <i class="fab fa-linkedin fa-lg" id="linkedin"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer section fp-auto-height" id="contact" data-anchor="our-contact">
    <div class="container">
      <section class="d-grid justify-content-center">
        <h3>Questions?</h3>
        <span class="text-center">Let’s Get In Touch</span>
      </section>
      <div class="row">
        <div class="col">
          <img src="/img/jdr.png" width="250px" class="" alt="" />
          <h4>PT. Jajar Dwi Raya</h4>
          <span>We also continue to update the information about the company
            through social media, for the latest information you can follow
            our social media.</span>
          <div class="social-media">
            <a href="" id="linkedin">
              <i class="fab fa-linkedin-in me-3"></i>
            </a>
            <a id="wa" href="https://wa.me/+62822222222" target="_blank" rel="noreferrer">
              <i class="fab fa-whatsapp me-3"></i>
            </a>
          </div>
        </div>
        <div class="col"></div>
      </div>
      <footer>
        <span id="copyright">© 2021 Cocha. All rights reserved</span>
      </footer>
    </div>
  </div>
</div>
@endsection
