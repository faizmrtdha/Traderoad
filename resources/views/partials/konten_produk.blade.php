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
            <div class="swiper-button-next" id="btn-s"></div>
            <div class="swiper-button-prev" id="btn-s"></div>
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
        <h4>Product Specification</h4>
        <div class="table-responsive">
            <table class="table table-borderless">
                <tbody>
                    @foreach ($product['specs'] as $s )
                    <tr>
                        <td scope="row">{!! $s['param'] !!}</td>
                        <td>{!! $s['result'] !!}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <h4>Supply Capability</h4>
        <div class="table-responsive">
            <table class="table table-borderless">
                <tbody>
                    @foreach ($product['supply'] as $su )
                    <tr>
                        <td scope="row">{{ $su['supp'] }}</td>
                        <td>{{ $su['result'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <h4>Packaging & Delivery</h4>
        <div class="table-responsive">
            <table class="table table-borderless">
                <tbody>
                    @foreach ($product['packaging'] as $p )
                    <tr>
                        <td scope="row">{{ $p['package'] }}</td>
                        <td>{{ $p['result'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
