@php
$products = [
    [
        'id' => 74,
        'img' => 'assets/img/shops/14.png',
        'title' => 'Tissot Tradition Powermatic',
        'name' => 'watch',
        'tag' => 'Sale',
        'tag1' => null,
        'style' => 'bg-sale',
        'rating' => 'filled',
        'price' => 49849,
    ],
    [
        'id' => 75,
        'img' => 'assets/img/shops/15.png',
        'title' => 'Tissot Men TRADITION',
        'name' => 'watch',
        'tag' => 'New',
        'tag1' => '-40%',
        'style' => 'bg-new',
        'rating' => '',
        'price' => 57850,
    ],
    [
        'id' => 76,
        'img' => 'assets/img/shops/17.png',
        'title' => 'IWC Portugieser Perpetual Watch',
        'name' => 'watch',
        'tag' => 'Sold Out',
        'tag1' => null,
        'style' => 'bg-sold',
        'rating' => 'filled',
        'price' => 44640,
    ],
    [
        'id' => 77,
        'img' => 'assets/img/shops/18.png',
        'title' => 'Michael Kors Men Runway Black Watch',
        'name' => 'watch',
        'tag' => 'Hot',
        'tag1' => '-55%',
        'style' => 'bg-hot',
        'rating' => '',
        'price' => 17706,
    ],
    [
        'id' => 78,
        'img' => 'assets/img/shops/19.png',
        'title' => 'Rolex Cosmograph Daytona Watch',
        'name' => 'watch',
        'tag' => 'Sale',
        'tag1' => '-30%',
        'style' => 'bg-sale',
        'rating' => '',
        'price' => 45492,
    ],
    [
        'id' => 79,
        'img' => 'assets/img/shops/20.png',
        'title' => "Movado Men's Bold Fusion Analog Watch",
        'name' => 'watch',
        'tag' => 'New',
        'tag1' => null,
        'style' => 'bg-new',
        'rating' => 'filled',
        'price' => 67125,
    ],
    [
        'id' => 80,
        'img' => 'assets/img/shops/21.png',
        'title' => 'Philipp Plein Men Stainless Steel Strap Watch',
        'name' => 'watch',
        'tag' => 'Sold',
        'tag1' => null,
        'style' => 'bg-sold',
        'rating' => '',
        'price' => 68400,
    ],
    [
        'id' => 81,
        'img' => 'assets/img/shops/16.png',
        'title' => 'Victorinox Men Green Dial Maverick Watch',
        'name' => 'watch',
        'tag' => 'New',
        'tag1' => '-60%',
        'style' => 'bg-new',
        'rating' => 'filled',
        'price' => 58395,
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
                        <div class="elso_titl"><span class="small">{{ $item['name'] }}</span></div>
                        <h5 class="fs-md mb-0 lh-1 mb-1"><a href="{{ route('shops-single-v1', ['title' => Str::slug($item['title'])]) }}">{{ $item['title'] }}</a></h5>
                        <div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                            <i class="fas fa-star {{ $item['rating'] }}"></i>
                            <i class="fas fa-star {{ $item['rating'] }}"></i>
                            <i class="fas fa-star {{ $item['rating'] }}"></i>
                            <i class="fas fa-star {{ $item['rating'] }}"></i>
                            <i class="fas fa-star {{ $item['rating'] }}"></i>
                        </div>
                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">${{ $item['price'] }}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
