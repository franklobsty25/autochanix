@php
$products = [
    [
        'id' => 1,
        'img' => 'assets/img/product/7.jpg',
         'title' => 'Brake Pad Set',
        'tag' => 'Sale',
        'style' => 'bg-sale',
        'price' => 119,
        'original_price' => null,
        'class' => 'fw-medium fs-md text-dark',
    ],
    [
        'id' => 2,
        'img' => 'assets/img/product/8.jpg',
        'title' => 'Engine Oil 5W-30',
        'tag' => 'Sold Out',
        'style' => 'bg-sold',
        'price' => 79,
        'original_price' => 129,
        'class' => 'ft-medium theme-cl fs-md',
    ],
    [
        'id' => 3,
        'img' => 'assets/img/product/9.jpg',
         'title' => 'Air Filter',
        'tag' => false,
        'style' => '',
        'price' => 80,
        'original_price' => null,
        'class' => 'ft-medium fs-md text-dark',
    ],
    [
        'id' => 4,
        'img' => 'assets/img/product/11.jpg',
        'title' => 'Spark Plug Pack (4pcs)',
        'tag' => 'Hot',
        'style' => 'bg-hot',
        'price' => 110,
        'original_price' => 149,
        'class' => 'ft-medium theme-cl fs-md',
    ],

];
@endphp

@foreach ($products as $item)
    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
        <div class="product_grid card b-0">

            @if ($item['tag'] !== false)
                <div class="badge {{ $item['style'] }} text-white position-absolute ft-regular ab-left text-upper">{{ $item['tag'] }}</div>
            @endif

            <button class="btn btn_love position-absolute ab-right snackbar-wishlist"><i class="far fa-heart"></i></button>
            <div class="card-body p-0">
                <div class="shop_thumb position-relative">
                    <a class="card-img-top d-block overflow-hidden" href="/shop-details"><img class="card-img-top" src="{{ asset($item['img']) }}" alt="..."></a>
                    <div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                        <div class="edlio"><a href="#" data-bs-toggle="modal" data-bs-target="#quickview" data-product-id="{{ $item['id'] }}"
                          class="text-white fs-sm ft-medium quickview-btn"><i class="fas fa-eye me-1"></i>Quick View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footers b-0 pt-3 px-2 bg-white d-flex align-items-start justify-content-center">
                <div class="text-left">
                    <div class="text-center">
                        <h5 class="fw-normal fs-md mb-0 lh-1 mb-1"><a href="#">{{ $item['title'] }}</a></h5>
                        <div class="elis_rty">
                            @if ($item['original_price'])
                                <span class="text-muted ft-medium line-through me-2">${{ $item['original_price'] }}.00</span>
                                <span class="{{ $item['class'] }}">${{ $item['price'] }}.00</span>
                            @else
                                <span class="ft-medium fs-md text-dark">${{ $item['price'] }}.00</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
<!-- includes.Home.index.quickview -->
@include('frontend.shops.components.quickview')
