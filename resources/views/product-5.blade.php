@extends('layouts.product')

@section('konten')
<div class="isi d-md-flex flex-row justify-content-between mb-5">
    <div class="thumbnail d-md-flex flex-wrap">
        <div style="
              --swiper-navigation-color: #fff;
              --swiper-pagination-color: #fff;
            " class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide" id="product">
                    <img src="/img/product/1.jpg" />
                </div>
                <div class="swiper-slide" id="product">
                    <img src="/img/product/2.jpg" />
                </div>
                <div class="swiper-slide" id="product">
                    <img src="/img/product/3.jpg" />
                </div>
                <div class="swiper-slide" id="product">
                    <img src="/img/product/4.jpg" />
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div thumbsSlider="" class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" id="product">
                    <img src="/img/product/1.jpg" />
                </div>
                <div class="swiper-slide" id="product">
                    <img src="/img/product/2.jpg" />
                </div>
                <div class="swiper-slide" id="product">
                    <img src="/img/product/3.jpg" />
                </div>
                <div class="swiper-slide" id="product">
                    <img src="/img/product/4.jpg" />
                </div>
            </div>
        </div>
    </div>
    <div class="details d-md-flex flex-column w-100">
        <h1 class="mb-1">
            Crude Coconut Oil
        </h1>
        <p class="my-3">
            produk minyak nabati yang diekstraksi tanpa melalui proses filtrasi dari inti kelapa dengan kandungan lemak
            jenuh yang tinggi dan lambat teroksidasi dengan demikian minyak ini tahan terhadap tengik dan bebas dari
            pencampuran minyak atau benda asing lainnya.
        </p>
        <h4>Specification</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Parameter</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Results</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Moisture & Impurities</td>
                        <td>%</td>
                        <td>Max 0.5</td>
                    </tr>
                    <tr>
                        <td scope="row">Free Fatty Acid</td>
                        <td>%</td>
                        <td>Max 4</td>
                    </tr>
                    <tr>
                        <td scope="row" colspan="2">Color</td>
                        <td>4-12 Red</td>
                    </tr>
                    <tr>
                        <td scope="row">Iodine Value</td>
                        <td>Wijs</td>
                        <td>7.5-10.5</td>
                    </tr>
                    <tr>
                        <td scope="row">Saponification Value</td>
                        <td>mg KOH/g oil sample</td>
                        <td>250-264</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
