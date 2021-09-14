{{-- @dd($d) --}}
@extends('layouts.main')
@section('slider')
<h2 class="text-center title-product">Our Product</h2>
<div class="swiper mySwiper" id="swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide" id="swiper">
            <a href="/product/coconut-shell-charcoal">
                <span>See Details</span>
            </a>
            <img src="img/copra.png" class="img-fluid rounded shadow" alt="tentang" />
        </div>
        <div class="swiper-slide" id="swiper">
            <a href="/product/coconut-fiber">
                <span>See Details</span>
            </a>
            <img src="img/copra.png" class="img-fluid rounded shadow" alt="tentang" />
        </div>
        <div class="swiper-slide" id="swiper">
            <a href="/product/coconut-shell-charcoal-briquettes">
                <span>See Details</span>
            </a>
            <img src="img/copra.png" class="img-fluid rounded shadow" alt="tentang" />
        </div>
        <div class="swiper-slide" id="swiper">
            <a href="/product/cocopeat">
                <span>See Details</span>
            </a>
            <img src="img/copra.png" class="img-fluid rounded shadow" alt="tentang" />
        </div>
        <div class="swiper-slide" id="swiper">
            <a href="/product/crude-coconut-oil">
                <span>See Details</span>
            </a>
            <img src="img/copra.png" class="img-fluid rounded shadow" alt="tentang" />
        </div>
        <div class="swiper-slide" id="swiper">
            <a href="/product/virgin-coconut-oil">
                <span>See Details</span>
            </a>
            <img src="img/copra.png" class="img-fluid rounded shadow" alt="tentang" />
        </div>
        <div class="swiper-slide" id="swiper">
            <a href="/product/rbd-coconut-oil">
                <span>See Details</span>
            </a>
            <img src="img/copra.png" class="img-fluid rounded shadow" alt="tentang" />
        </div>
    </div>
    <!-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div> -->
    <div class="swiper-pagination"></div>
</div>

@endsection
