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
            Virgin Coconut Oil
        </h1>
        <p class="my-3">
            Minyak yang dibuat dari kelapa segar yang diolah melalui proses pemanasan tanpa bahan kimia untuk diambil
            minyaknya,memiliki kandungan esensial asam laurat membuat vco ini memiliki sifat antibiotik,anti bakterim
            dan jamur yang sangat baik untuk kesehatan.penggunaan optimal minyak ini dikembangkan menjadi produk
            pangan,farmasi,maupun kosmetik.
        </p>
        <h4>Specification</h4>
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
                    <td scope="row">Moisture</td>
                    <td>%</td>
                    <td>Max 0.1</td>
                </tr>
                <tr>
                    <td scope="row">Volatile Matters at 120<sup>o</sup>C</td>
                    <td>%</td>
                    <td>Max 0.2</td>
                </tr>
                <tr>
                    <td scope="row">Free Fatty Acid</td>
                    <td>%</td>
                    <td>Max 0.2</td>
                </tr>
                <tr>
                    <td scope="row">Peroxide Value meq/kg</td>
                    <td>-</td>
                    <td>Max 3</td>
                </tr>
                <tr>
                    <td scope="row">Relative Density</td>
                    <td>-</td>
                    <td>0.915-0.920</td>
                </tr>
                <tr>
                    <td scope="row">Relative index at 40<sup>o</sup>C</td>
                    <td>-</td>
                    <td>1.4480-1.4492</td>
                </tr>
                <tr>
                    <td scope="row">Insoluble impurities per cent by mass</td>
                    <td>-</td>
                    <td>Max 0.05</td>
                </tr>
                <tr>
                    <td scope="row">Saponification Value</td>
                    <td>Mg KOH/g oil</td>
                    <td>250-260 min</td>
                </tr>
                <tr>
                    <td scope="row">Iodine Value</td>
                    <td>Wijs</td>
                    <td>7.5-10.5</td>
                </tr>
                <tr>
                    <td scope="row">Unsaponifiable matter % by mass, max</td>
                    <td>-</td>
                    <td>0.2-0.5</td>
                </tr>
                <tr>
                    <td scope="row">Specific gravity at 30 deg./30<sup>o</sup>C</td>
                    <td>-</td>
                    <td>0.915-0.920</td>
                </tr>
                <tr>
                    <td scope="row">Polenske Value, min</td>
                    <td>-</td>
                    <td>13</td>
                </tr>
                <tr>
                    <td scope="row">Total Plate Count</td>
                    <td>-</td>
                    <td>&#60;0.5</td>
                </tr>
                <tr>
                    <td scope="row">Color</td>
                    <td>-</td>
                    <td>Water Clear</td>
                </tr>
                <tr>
                    <td scope="row">Odor and Taste</td>
                    <td>-</td>
                    <td>Natural fresh coconut scent, free of sediment, free from rancid odor and taste</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>

@endsection
