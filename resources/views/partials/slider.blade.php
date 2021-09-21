<h2 class="text-center title-product">Our Product</h2>
<div class="swiper" id="swiper">
    <div class="swiper-wrapper">
        @foreach ($url as $u)
        <div class="swiper-slide" id="swiper">
            <img src="img/product/{{ $u['thumbnail'] }}" class="img-fluid rounded slide-image" alt="tentang" />
            <a href="/product/{{ $u["slug"] }}" id="swiper">
                See Details
            </a>
        </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>
{{-- <div class="splide">
    <div class="splide__track">
        <ul class="splide__list"> --}}
{{-- <div class="main-carousel" data-carousel>
    @foreach ($url as $u)
    <div class="carousel-cell" style="background-image: url(img/product/{{ $u["thumbnail"] }}) ">
<img data-flickity-lazyload="img/product/{{ $u["thumbnail"] }}" alt="tentang" class="carousel-cell-image">
<div class="inner">
    <a href="/product/{{ $u["slug"] }}">
        <span>See Details</span>
    </a>
</div>
</div>
@endforeach
</div> --}}
{{-- </ul>
    </div>
</div> --}}
