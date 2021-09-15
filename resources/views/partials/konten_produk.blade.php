<div class="isi d-md-flex flex-row justify-content-between mb-5">
    <div class="thumbnail d-md-flex flex-wrap">
        <div style="
              --swiper-navigation-color: #fff;
              --swiper-pagination-color: #fff;
            " class="swiper mySwiper2" id="product">
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
        <div thumbsSlider="" class="swiper myS" id="product">
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
    {{-- @dd($product) --}}
    <div class="details d-md-flex flex-column w-100">
        <h1 class="mb-1">
            {{ $product['judul'] }}
        </h1>
        <p class="my-3">
            {{ $product['desc'] }}
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
                    {{-- @dd($product) --}}

                    @foreach ($product['specs'] as $s)
                    {{-- @dd($param) --}}

                    <tr>
                        <td scope="row">{{ $s["param"] }}</td>
                        <td>{{ $s["unit"] }}</td>
                        <td>{{ $s["result"] }}</td>
                        <td>{{ $s["method"] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
