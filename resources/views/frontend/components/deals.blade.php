@php
$deals = [
    [
        'id' => 8,
        'img' => 'assets/img/product/8.jpg',
        'title' => 'Engine Oil 5W-30',
        'tag' => false,
        'style' => '',
        'price' => 129,
        'original_price' => 149,
        'class' => 'ft-medium theme-cl fs-md',
	],
    [
        'id' => 15,
        'img' => 'assets/img/product/9.jpg',
        'title' => 'Air Filter',
        'tag' => 'Sale',
        'style' => 'bg-sale',
        'price' => 99,
        'original_price' => null,
        'class' => 'ft-medium theme-cl fs-md',
    ],
    // [
    //     'id' => 17,
    //     'img' => 'assets/img/product/10.jpg',
    //     'title' => 'Boys White T-shirt',
    //     'tag' => 'New',
    //     'style' => 'bg-new',
    //     'price' => 149,
    //     'original_price' => null,
    //     'class' => 'ft-medium fs-md text-dark',
    // ],
    [
        'id' => 18,
        'img' => 'assets/img/product/11.jpg',
        'title' => 'Spark Plug Pack (4pcs)',
        'tag' => 'Sold Out',
        'style' => 'bg-sold',
        'price' => 199,
        'original_price' => 149,
        'class' => 'ft-medium theme-cl fs-md',
    ],
    // [
    //     'id' => 19,
    //     'img' => 'assets/img/product/12.jpg',
    //     'title' => 'Women White T-shirt',
    //     'tag' => false,
    //     'style' => '',
    //     'price' => 600,
    //     'original_price' => 666,
    //     'class' => 'ft-medium theme-cl fs-md',
    // ],
    // [
    //     'id' => 20,
    //     'img' => 'assets/img/product/13.jpg',
    //     'title' => 'Boys Shorts',
    //     'tag' => 'Hot',
    //     'style' => 'bg-hot',
    //     'price' => 110,
    //     'original_price' => null,
    //     'class' => 'ft-medium fs-md text-dark',
    // ],
    // [
    //     'id' => 21,
    //     'img' => 'assets/img/product/14.jpg',
    //     'title' => 'Boys yellow T-shirt',
    //     'tag' => 'Sale',
    //     'style' => 'bg-sale',
    //     'price' => 119,
    //     'original_price' => null,
    //     'class' => 'ft-medium theme-cl fs-md text-dark',
	// ]
];
@endphp

@foreach ($deals as $item)
    <div class="single_itesm">
        <div class="product_grid card b-0 mb-0">

            @if ($item['tag'] !== false)
                <div class="badge {{ $item['style'] }} text-white position-absolute ft-regular ab-left text-upper">{{ $item['tag'] }}</div>
            @endif

            <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i class="far fa-heart"></i></button>
            <div class="card-body p-0">
                <div class="shop_thumb position-relative">
                    <a class="card-img-top d-block overflow-hidden" href="#"><img class="card-img-top" src="{{ asset($item['img']) }}" alt="..."></a>
                    <div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                        <div class="edlio"><a href="#" data-bs-toggle="modal" data-bs-target="#quickview" data-product-id="{{ $item['id'] }}" class="text-white fs-sm ft-medium quickview-btn"><i class="fas fa-eye me-1"></i>Quick View</a></div>
                    </div>
                </div>
            </div>
            <div class="card-footer b-0 p-3 pb-0 d-flex align-items-start justify-content-center">
                <div class="text-left">
                    <div class="text-center">
                        <h5 class="fw-normal fs-md mb-0 lh-1 mb-1"><a href="#">{{ $item['title'] }}</a></h5>
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
