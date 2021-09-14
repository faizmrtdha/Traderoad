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
            Coconut Shell Charcoal Briquettes
        </h1>
        <p class="my-3">
            Arang berbentuk compact yang terbuat dari batok kelapa granular yang dihaluskan dan dicetak menggunakan
            bahan
            pengikat alami yang dapat bertahan lebih lama dari arang biasa ketika dibakar.Sering digunakan untuk
            keperluan
            rumah tangga,industri makanan,industri metalurgi dan barbeque.
        </p>
        <h4>Specification</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Parameter</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Results</th>
                        <th scope="col">Method</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Moisture Content</td>
                        <td>%</td>
                        <td>2.72</td>
                        <td>ASTM D 1762-84 (REAPPROVED 203)</td>
                    </tr>
                    <tr>
                        <td scope="row">Ash Content</td>
                        <td>%</td>
                        <td>5.58</td>
                        <td>ASTM D 1762-84 (REAPPROVED 203)</td>
                    </tr>
                    <tr>
                        <td scope="row">Volatile Matter</td>
                        <td>%</td>
                        <td>8.42</td>
                        <td>ASTM D 1762-84 (REAPPROVED 203)</td>
                    </tr>
                    <tr>
                        <td scope="row">Fixed Carbon</td>
                        <td>%</td>
                        <td>83.28</td>
                        <td>By Calculation</td>
                    </tr>
                    <tr>
                        <td scope="row">Sulfur</td>
                        <td>%</td>
                        <td>0.08</td>
                        <td>ASTM D 4239-14</td>
                    </tr>
                    <tr>
                        <td scope="row">Carbon</td>
                        <td>%</td>
                        <td>83.20</td>
                        <td>ASTM D 5373-08</td>
                    </tr>
                    <tr>
                        <td scope="row">Hydrogen</td>
                        <td>%</td>
                        <td>1.63</td>
                        <td>ASTM D 5373-08</td>
                    </tr>
                    <tr>
                        <td scope="row">Nitrogen</td>
                        <td>%</td>
                        <td>0.88</td>
                        <td>ASTM D 5373-08</td>
                    </tr>
                    <tr>
                        <td scope="row">Oxigen</td>
                        <td>%</td>
                        <td>5.91</td>
                        <td>ASTM D 3176-15</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
