@php
$trendys = [
    [
        'id' => 41,
        'img' => 'assets/img/furniture/1.png', 
        'title' => 'Armchair',
        'tag' => 'Sale',
        'style' => 'bg-sale',
        'price' => 119,
        'original_price' => null,
        'class' => 'ft-medium fs-md text-dark',
    ],
    [
        'id' => 42,
        'img' => 'assets/img/furniture/2.png', 
        'title' => 'Rocking Chair',
        'tag' => 'New',
        'style' => 'bg-new',
        'price' => 79,
        'original_price' => 129,
        'class' => 'ft-medium theme-cl fs-md',
    ],
    [
        'id' => 43,
        'img' => 'assets/img/furniture/3.png', 
        'title' => 'Desk Chair',
        'tag' => false,
        'style' => '',
        'price' => 80,
        'original_price' => null,
        'class' => 'ft-medium fs-md text-dark',
    ],
    [
        'id' => 44,
        'img' => 'assets/img/furniture/4.png', 
        'title' => 'Dining Chair',
        'tag' => 'Hot',
        'style' => 'bg-hot',
        'price' => 110,
        'original_price' => 149,
        'class' => 'ft-medium theme-cl fs-md',
    ],
    [
        'id' => 45,
        'img' => 'assets/img/furniture/5.png', 
        'title' => 'Folding Chair',
        'tag' => false,
        'style' => '',
        'price' => 49,
        'original_price' => 90,
        'class' => 'ft-medium theme-cl fs-md',
    ],
    [
        'id' => 46,
        'img' => 'assets/img/furniture/6.png', 
        'title' => 'Lounge Chair',
        'tag' => 'Hot',
        'style' => 'bg-hot',
        'price' => 114,
        'original_price' => null,
        'class' => 'ft-medium fs-md text-dark',
    ],
    [
        'id' => 47,
        'img' => 'assets/img/furniture/7.png', 
        'title' => 'Wingback Chair',
        'tag' => 'Sale',
        'style' => 'bg-sale',
        'price' => 120,
        'original_price' => null,
        'class' => 'ft-medium theme-cl fs-md text-dark',
    ],
    [
        'id' => 48,
        'img' => 'assets/img/furniture/8.png', 
        'title' => 'Barrel Chair',
        'tag' => false,
        'style' => '',
        'price' => 129,
        'original_price' => 149,
        'class' => 'ft-medium theme-cl fs-md',
    ]
];
@endphp

@foreach ($trendys as $item)
    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
        <div class="product_grid card b-0">

            @if ($item['tag'] !== false)
                <div class="badge {{ $item['style'] }} text-white position-absolute ft-regular ab-left text-upper">{{ $item['tag'] }}</div>
            @endif

            <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i class="far fa-heart"></i></button> 
            <div class="card-body p-0">
                <div class="shop_thumb position-relative">
                    <a class="card-img-top d-block overflow-hidden" href="{{ route('shop-single-v1', ['title' => Str::slug($item['title'])]) }}"><img class="card-img-top" src="{{ asset($item['img']) }}" alt="..."></a>
                    <div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                        <div class="edlio"><a href="#" data-bs-toggle="modal" data-bs-target="#quickview" data-product-id="{{ $item['id'] }}" class="text-white fs-sm ft-medium quickview-btn"><i class="fas fa-eye me-1"></i>Quick View</a></div>
                    </div>
                </div>
            </div>
            <div class="card-footers b-0 pt-3 px-2 bg-white d-flex align-items-start justify-content-center">
                <div class="text-left">
                    <div class="text-center">
                        <h5 class="fw-normal fs-md mb-0 lh-1 mb-1"><a href="{{ route('shop-single-v1', ['title' => Str::slug($item['title'])]) }}">{{ $item['title'] }}</a></h5>
                        <div class="elis_rty">
                            @if ($item['original_price'])
                                <span class="text-muted ft-medium line-through me-2">${{ $item['original_price'] }}.00</span>
                                <span class="{{ $item['class'] }}">${{ $item['price'] }}.00</span>
                            @else
                                <span class="{{ $item['class'] }}">${{ $item['price'] }}.00</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach