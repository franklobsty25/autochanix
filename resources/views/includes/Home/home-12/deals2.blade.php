@php
$deals = [
    [
        'id' => 49,
        'img' => 'assets/img/grocery/1.png', 
        'title' => 'Garden radish',
        'tag' => 'Hot',
        'style' => 'bg-hot',
        'reviews' => '5 Reviews',
        'price' => 33,
    ],
    [
        'id' => 50,
        'img' => 'assets/img/grocery/2.png', 
        'title' => 'Broccoli',
        'tag' => 'Sold Out',
        'style' => 'bg-sold',
        'reviews' => '5 Reviews',
        'price' => 99,
    ],
    [
        'id' => 51,
        'img' => 'assets/img/grocery/3.png', 
        'title' => 'Hybrid Tomato',
        'tag' => '-50%',
        'style' => 'bg-danger',
        'reviews' => '5 Reviews',
        'price' => 30,
    ],
    [
        'id' => 52,
        'img' => 'assets/img/grocery/4.png', 
        'title' => 'Spinach',
        'tag' => 'Sale',
        'style' => 'bg-sale',
        'reviews' => '5 Reviews',
        'price' => 24,
    ],
    [
        'id' => 53,
        'img' => 'assets/img/grocery/5.png', 
        'title' => 'Green Cucumber',
        'tag' => 'Sale',
        'style' => 'bg-sale',
        'reviews' => '5 Reviews',
        'price' => 40,
    ],
    [
        'id' => 55,
        'img' => 'assets/img/grocery/7.png', 
        'title' => 'Beetroot',
        'tag' => 'Sold Out',
        'style' => 'bg-sold',
        'reviews' => '5 Reviews',
        'price' => 16,
    ]
];
@endphp

@foreach ($deals as $item)
    <div class="single_itesm">
        <div class="product_grid card b-0 grocery px-3 py-3">
            <div class="badge {{ $item['style'] }} text-white position-absolute ft-regular ab-left text-upper">{{ $item['tag'] }}</div>
            <div class="card-body p-0">
                <div class="shop_thumb position-relative">
                    <a class="card-img-top d-block overflow-hidden" href="{{ route('shop-single-v1', ['title' => Str::slug($item['title'])]) }}"><img class="card-img-top" src="{{ asset($item['img']) }}" alt="..."></a>
                    <div class="product-left-hover-overlay">
                        <ul class="left-over-buttons">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#quickview" data-product-id="{{ $item['id'] }}" class="d-inline-flex circle align-items-center justify-content-center quickview-btn"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
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
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star"></i>
                            <span class="small">({{ $item['reviews'] }})</span>
                        </div>
                        <h5 class="fs-md mb-0 lh-1 mb-1"><a href="{{ route('shop-single-v1', ['title' => Str::slug($item['title'])]) }}">{{ $item['title'] }}</a></h5>
                        <div class="elis_rty"><span class="ft-bold text-success fs-sm">${{ $item['price'] }}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach