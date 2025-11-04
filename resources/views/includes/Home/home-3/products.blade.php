@php
$products = [
    [
        'id' => 22,
        'img' => 'assets/img/product/15.png', 
        'title' => 'Women Straight Pants',
        'tag' => 'Hot',
        'tag1' => null,
        'reviews' => '5 Reviews',
        'star' => 'filled',
        'style' => 'bg-hot',
        'price' => '99 - $129',
    ],
    [
        'id' => 23,
        'img' => 'assets/img/product/16.png', 
        'title' => 'Yellow One-piece',
        'tag' => 'Sold Out',
        'tag1' => '-40%',
        'reviews' => '0 Reviews',
        'star' => '',
        'style' => 'bg-sold',
        'price' => '129',
    ],
    [
        'id' => 24,
        'img' => 'assets/img/product/17.png', 
        'title' => 'Skinny Jeans',
        'tag' => 'Sale',
        'tag1' => null,
        'reviews' => '32 Reviews',
        'star' => 'filled',
        'style' => 'bg-sale',
        'price' => '99 - $129',
    ],
    [
        'id' => 25,
        'img' => 'assets/img/product/18.png', 
        'title' => 'Mini Skirts',
        'tag' => 'New',
        'tag1' => '-55%',
        'reviews' => '0 Reviews',
        'star' => '',
        'style' => 'bg-new',
        'price' => '50 - $149',
    ],
    [
        'id' => 26,
        'img' => 'assets/img/product/19.png', 
        'title' => 'Straight-Leg Jeans',
        'tag' => 'Hot',
        'tag1' => '-30%',
        'reviews' => '0 Reviews',
        'star' => '',
        'style' => 'bg-hot',
        'price' => '199',
    ],
    [
        'id' => 27,
        'img' => 'assets/img/product/20.png', 
        'title' => 'Westside Denim Shorts',
        'tag' => 'New',
        'tag1' => null,
        'reviews' => '42 Reviews',
        'star' => 'filled',
        'style' => 'bg-new',
        'price' => '110 - $600',
    ],
    [
        'id' => 28,
        'img' => 'assets/img/product/21.png', 
        'title' => 'Flare Maxi Dress',
        'tag' => 'Sale',
        'tag1' => null,
        'reviews' => '0 Reviews',
        'star' => '',
        'style' => 'bg-sale',
        'price' => '99 - $110',
    ],
    [
        'id' => 29,
        'img' => 'assets/img/product/22.png', 
        'title' => 'T Shirt Mockup Gray',
        'tag' => 'Sold Out',
        'tag1' => '-60%',
        'reviews' => '15 Reviews',
        'star' => 'filled',
        'style' => 'bg-sold',
        'price' => '119',
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
                    <a class="card-img-top d-block overflow-hidden" href="{{ route('shop-single-v1', ['title' => Str::slug($item['title'])]) }}"><img class="card-img-top" src="{{ asset($item['img']) }}" alt="..."></a>
                    <div class="product-left-hover-overlay">
                        <ul class="left-over-buttons">
                            <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
                            <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
                            <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
                        </ul>
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
                        <h5 class="fs-md mb-0 lh-1 mb-1"><a href="{{ route('shop-single-v1', ['title' => Str::slug($item['title'])]) }}">{{ $item['title'] }}</a></h5>
                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">${{ $item['price'] }}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach