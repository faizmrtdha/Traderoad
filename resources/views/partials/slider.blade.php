<h2 class="text-center title-product">Our Product</h2>
<div class="swiper mySwiper" id="swiper">
    <div class="swiper-wrapper">
        @foreach ($url as $u)
        <div class="swiper-slide">
            <a href="/product/{{ $u["slug"] }}">
                <span>See Details</span>
            </a>
            <img src="img/copra.png" class="img-fluid rounded shadow" alt="tentang" />
        </div>
        @endforeach    
    </div>
    <div class="swiper-pagination"></div>
</div>


