@php
$products = [
    [
        'id' => 30,
        'img' => 'assets/img/product/7.jpg',
        'img1' => 'assets/img/product/7-a.jpg',
        'title' => 'Beautiful Design Dress',
        'tag' => 'Sale',
        'style' => 'bg-sale',
        'price' => 99,
        'original_price' => 129,
        'class' => 'ft-medium theme-cl fs-md',
    ],
    [
        'id' => 31,
        'img' => 'assets/img/product/8.jpg',
        'img1' => 'assets/img/product/8-a.jpg',
        'title' => 'women Down Jacket',
        'tag' => 'New',
        'style' => 'bg-new',
        'price' => 79,
        'original_price' => 129,
        'class' => 'ft-medium theme-cl fs-md',
    ],
    [
        'id' => 32,
        'img' => 'assets/img/product/9.jpg',
        'img1' => 'assets/img/product/9-a.jpg',
        'title' => 'women rompers',
        'tag' => false,
        'style' => '',
        'price' => 80,
        'original_price' => null,
        'class' => 'ft-medium fs-md text-dark',
    ],
    [
        'id' => 17,
        'img' => 'assets/img/product/10.jpg',
        'img1' => 'assets/img/product/10-a.jpg',
        'title' => 'Boys White T-shirt',
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

            <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i class="far fa-heart"></i></button>
            <div class="card-body p-0">
                <div class="shop_thumb position-relative">
                    <a class="card-img-top d-block overflow-hidden ovr-hide" href="#"><img class="card-img-top" src="{{ asset($item['img']) }}" alt="..."></a>
                    <a class="card-img-top d-block overflow-hidden ovr-show" href="#"><img class="card-img-top" src="{{ asset($item['img1']) }}" alt="..."></a>
                    <div class="product-hover-overlay btn d-flex align-items-center justify-content-center">
                        <div class="group_btn">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#quickview" data-product-id="{{ $item['id'] }}" class="prd_btn_square quickview-btn"><i class="ti-fullscreen"></i></a>
                            <a href="javascript:void(0);" class="prd_btn_square snackbar-wishlist" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="lni lni-heart"></i></a>
                            <a href="javascript:void(0);" class="prd_btn_square snackbar-addcart" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="lni lni-shopping-basket"></i></a>
                            <a href="javascript:void(0);" class="prd_btn_square" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="lni lni-shuffle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer b-0 p-3 pb-0 bg-white d-flex align-items-start justify-content-center">
                <div class="text-left">
                    <div class="text-center">
                        <h5 class="fw-normal fs-md mb-0 lh-1 mb-1"><a href="#">{{ $item['title'] }}</a></h5>
                        <div class="elis_rty">
                            @if ($item['original_price'])
                                <span class="text-muted ft-medium line-through me-2">¢{{ $item['original_price'] }}.00</span>
                                <span class="{{ $item['class'] }}">¢{{ $item['price'] }}.00</span>
                            @else
                                <span class="{{ $item['class'] }}">¢{{ $item['price'] }}.00</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
