@php
$products = [
    [
        'id' => 5,
        'img' => 'assets/img/product/5.jpg',
        'title' => 'Flix Flox Jeans',
        'tag' => 'Sale',
        'tag1' => '-30%',
        'reviews' => '0 Reviews',
        'star' => '',
        'style' => 'bg-sale',
        'price' => 49,
    ],
    [
        'id' => 6,
        'img' => 'assets/img/product/6.jpg',
        'title' => 'Fancy Salwar Suits',
        'tag' => 'New',
        'tag1' => null,
        'reviews' => '42 Reviews',
        'star' => 'filled',
        'style' => 'bg-new',
        'price' => 114,
    ],
    [
        'id' => 7,
        'img' => 'assets/img/product/7.jpg',
        'title' => 'Collot Full Dress',
        'tag' => 'Sale',
        'tag1' => null,
        'reviews' => '0 Reviews',
        'star' => '',
        'style' => 'bg-sale',
        'price' => 120,
    ],
    [
        'id' => 8,
        'img' => 'assets/img/product/8.jpg',
        'title' => 'Formal Fluex Kurti',
        'tag' => 'Sold Out',
        'tag1' => '-60%',
        'reviews' => '15 Reviews',
        'star' => 'filled',
        'style' => 'bg-sold',
        'price' => 129,
    ]
];
@endphp

@foreach ($products as $item)
    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
        <div class="product_grid card b-0">

            @if($item['tag1'])
                <div class="badge {{ $item['style'] }} text-white position-absolute ft-regular ab-left text-upper">{{ $item['tag'] }}</div>
                <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">{{ $item['tag1'] }}</div>
            @else
                <div class="badge {{ $item['style'] }} text-white position-absolute ft-regular ab-left text-upper">{{ $item['tag'] }}</div>
            @endif

            <div class="card-body p-0">
                <div class="shop_thumb position-relative">
                    <a class="card-img-top d-block overflow-hidden" href="{{ route('shops-single-v1', ['title' => Str::slug($item['title'])]) }}"><img class="card-img-top" src="{{ asset($item['img']) }}" alt="..."></a>
                    <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                        <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                        <div class="edlio d-flex align-items-center">
                            <button class="btn auto btn_love me-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                            <a href="#" class="text-underline quickview-btn" data-bs-toggle="modal" data-bs-target="#quickview" data-product-id="{{ $item['id'] }}"><i class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                <div class="text-left">
                    <div class="text-left">
                        <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                            <i class="fas fa-star {{ $item['star'] }}"></i>
                            <i class="fas fa-star {{ $item['star'] }}"></i>
                            <i class="fas fa-star {{ $item['star'] }}"></i>
                            <i class="fas fa-star {{ $item['star'] }}"></i>
                            <i class="fas fa-star {{ $item['star'] }}"></i>
                            <span class="small">({{ $item['reviews'] }})</span>
                        </div>
                        <h5 class="fs-md mb-0 lh-1 mb-1"><a href="{{ route('shops-single-v1', ['title' => Str::slug($item['title'])]) }}">{{ $item['title'] }}</a></h5>
                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">${{ $item['price'] }}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
