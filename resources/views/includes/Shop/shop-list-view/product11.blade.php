@php
$products = [
    [
        'id' => 22,
        'img' => 'assets/img/product/15.png',
        'title' => 'Women Straight Pants',
        'tag' => 'Sale',
        'reviews' => '5 Reviews',
        'star' => 'filled',
        'style' => 'bg-sale',
        'price' => '99 - $129',
    ],
    [
        'id' => 23,
        'img' => 'assets/img/product/16.png',
        'title' => 'Yellow One-piece',
        'tag' => 'Hot',
        'reviews' => '0 Reviews',
        'star' => '',
        'style' => 'bg-hot',
        'price' => '129',
    ],
    [
        'id' => 24,
        'img' => 'assets/img/product/17.png',
        'title' => 'Skinny Jeans',
        'tag' => 'Sale',
        'reviews' => '32 Reviews',
        'star' => 'filled',
        'style' => 'bg-sale',
        'price' => '99 - $129',
    ],
    [
        'id' => 25,
        'img' => 'assets/img/product/18.png',
        'title' => 'Mini Skirts',
        'tag' => 'Sold Out',
        'reviews' => '0 Reviews',
        'star' => '',
        'style' => 'bg-sold',
        'price' => '50 - $149',
    ],
    [
        'id' => 26,
        'img' => 'assets/img/product/19.png',
        'title' => 'Straight-Leg Jeans',
        'tag' => 'Sale',
        'reviews' => '0 Reviews',
        'star' => '',
        'style' => 'bg-sale',
        'price' => '199',
    ],
    [
        'id' => 27,
        'img' => 'assets/img/product/20.png',
        'title' => 'Westside Denim Shorts',
        'tag' => 'New',
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
        'reviews' => '15 Reviews',
        'star' => 'filled',
        'style' => 'bg-sold',
        'price' => '119',
    ],
    [
        'id' => 20,
        'img' => 'assets/img/product/13.jpg',
        'title' => 'Boys Shorts',
        'tag' => 'Sale',
        'reviews' => '0 Reviews',
        'star' => '',
        'style' => 'bg-sale',
        'price' => 110,
    ],
    [
        'id' => 21,
        'img' => 'assets/img/product/14.jpg',
        'title' => 'Boys yellow T-shirt',
        'tag' => 'New',
        'reviews' => '15 Reviews',
        'star' => 'filled',
        'style' => 'bg-new',
        'price' => 119,
    ]
];
@endphp

@foreach ($products as $item)
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <div class="product_grid row">
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                <div class="shop_thumb position-relative">
                    <div class="badge {{ $item['style'] }} text-white position-absolute ft-regular ab-left text-upper">{{ $item['tag'] }}</div>
                    <a class="card-img-top d-block overflow-hidden" href="{{ route('shops-single-v1', ['title' => Str::slug($item['title'])]) }}"><img class="card-img-top" src="{{ asset($item['img']) }}" alt="..."></a>
                    <div class="product-left-hover-overlay">
                        <ul class="left-over-buttons">
                            <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
                            <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
                            <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12">
                <div class="text-left mfliud">

                    <h5 class="fs-md mb-0 lh-1 mb-1 ft-medium"><a href="{{ route('shops-single-v1', ['title' => Str::slug($item['title'])]) }}">{{ $item['title'] }}</a></h5>
                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                        <i class="fas fa-star {{ $item['star'] }}"></i>
                        <i class="fas fa-star {{ $item['star'] }}"></i>
                        <i class="fas fa-star {{ $item['star'] }}"></i>
                        <i class="fas fa-star {{ $item['star'] }}"></i>
                        <i class="fas fa-star {{ $item['star'] }}"></i>
                        <span class="small">({{ $item['reviews'] }})</span>
                    </div>
                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">${{ $item['price'] }}</span></div>
                    <div class="d-block mt-3 mb-4">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum are deleniti atque corrupti quos dolores</p>
                    </div>
                    <div class="position-relative text-left">
                        <a href="javascript:void(0);" class="btn stretched-links borders  snackbar-addcart">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
