@if (Route::is('product.*'))
<nav class="navbar navbar-expand-lg">
  <div class="container ps-0">
    <a class="navbar-brand p-0" href="/" id="a-logo">
      <img class="img-fluid" src="/img/jdrlogo.png" alt="logo" width="40px" height="40px" />
      <div class="vr"></div>
      <span class="mb-0">Traderoad</span>
    </a>
  </div>
</nav>
@else
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container ps-0">
    <a class="navbar-brand p-0" href="#home" id="a-logo">
      <img class="img-fluid" src="img/jdrlogo.png" alt="logo" width="40px" height="40px" />
      <div class="vr"></div>
      <span class="mb-0">Traderoad</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"
      data-target="#navbarNavDropdown">
      <i class="fas fa-bars" style="color: whitesmoke"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto" id="menu">
        <li data-menuanchor="about-us" class="active">
          <a class="nav-link tujuan" href="#about-us">About</a>
        </li>
        <li data-menuanchor="our-product">
          <a class="nav-link tujuan" href="#our-product">Product</a>
        </li>
        <li data-menuanchor="our-contact">
          <a class="nav-link tujuan" href="#our-contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endif
