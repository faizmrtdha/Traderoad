<div class="isi d-md-flex flex-row justify-content-between mb-5">
    <div class="thumbnail d-md-flex flex-wrap">
        <div style="
              --swiper-navigation-color: #fff;
              --swiper-pagination-color: #fff;
            " class="swiper mySwiper2" id="product">
            <div class="swiper-wrapper">
                @foreach ($product['img'] as $img)
                <div class="swiper-slide" id="product">
                    <img src="/img/product/{{$img}}" class="img-responsive" />
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div thumbsSlider="" class="swiper myS" id="product">
            <div class="swiper-wrapper">
                @foreach ($product['img'] as $img)
                <div class="swiper-slide" id="product">
                    <img src="/img/product/{{$img}}" class="img-responsive" />
                </div>
                @endforeach
            </div>
        </div>
    </div>
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
                        @foreach ($product['header'] as $h)
                        <th scope="col">{{ $h }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product['specs'] as $s )
                    <tr>
                        <td scope="row">{!! $s["param"] !!}</td>
                        <td>{{ $s["unit"] }}</td>
                        <td>{!! $s["result"] !!}</td>
                        @isset($s["method"])
                        <td>{{ $s["method"] }}</td>
                        @endisset
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
