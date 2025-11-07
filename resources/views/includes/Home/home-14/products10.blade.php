@php
$products = [
    [
        'id' => 65,
        'img' => 'assets/img/shops/7.png',
        'title' => 'Premium Brake Pads Set',
        'name' => 'Brake System',
        'tag' => 'Sale',
        'tag1' => null,
        'style' => 'bg-sale',
        'rating' => 'filled',
        'price' => 89,
    ],
    [
        'id' => 66,
        'img' => 'assets/img/shops/8.png',
        'title' => 'Engine Oil Filter',
        'name' => 'Engine Parts',
        'tag' => 'New',
        'tag1' => '-25%',
        'style' => 'bg-new',
        'rating' => '',
        'price' => 24,
    ],
    [
        'id' => 67,
        'img' => 'assets/img/shops/11.png',
        'title' => 'Michelin Pilot Sport Tires',
        'name' => 'Tires & Wheels',
        'tag' => 'Sold Out',
        'tag1' => null,
        'style' => 'bg-sold',
        'rating' => 'filled',
        'price' => 450,
    ],
    [
        'id' => 68,
        'img' => 'assets/img/shops/4.png',
        'title' => 'Car Battery 12V 75Ah',
        'name' => 'Electrical',
        'tag' => 'New',
        'tag1' => '-15%',
        'style' => 'bg-new',
        'rating' => '',
        'price' => 120,
    ],
    [
        'id' => 69,
        'img' => 'assets/img/shops/5.png',
        'title' => 'Spark Plugs Set (4pcs)',
        'name' => 'Engine Parts',
        'tag' => 'Sale',
        'tag1' => '-20%',
        'style' => 'bg-sale',
        'rating' => '',
        'price' => 35,
    ],
    [
        'id' => 70,
        'img' => 'assets/img/shops/6.png',
        'title' => 'Air Filter Element',
        'name' => 'Filters',
        'tag' => 'New',
        'tag1' => null,
        'style' => 'bg-new',
        'rating' => 'filled',
        'price' => 18,
    ],
    [
        'id' => 71,
        'img' => 'assets/img/shops/7.png',
        'title' => 'Phone Car Mount Holder',
        'name' => 'Accessories',
        'tag' => 'Sale',
        'tag1' => null,
        'style' => 'bg-sale',
        'rating' => '',
        'price' => 15,
    ],
    [
        'id' => 72,
        'img' => 'assets/img/shops/8.png',
        'title' => 'Car Seat Covers Set',
        'name' => 'Interior',
        'tag' => 'Sold Out',
        'tag1' => '-35%',
        'style' => 'bg-sold',
        'rating' => 'filled',
        'price' => 85,
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
                    <a class="card-img-top d-block overflow-hidden" href="#"><img class="card-img-top" src="{{ asset($item['img']) }}" alt="..."></a>
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
                        <h5 class="fs-md mb-0 lh-1 mb-1"><a href="#">{{ $item['title'] }}</a></h5>
                        <div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                            <i class="fas fa-star {{ $item['rating'] }}"></i>
                            <i class="fas fa-star {{ $item['rating'] }}"></i>
                            <i class="fas fa-star {{ $item['rating'] }}"></i>
                            <i class="fas fa-star {{ $item['rating'] }}"></i>
                            <i class="fas fa-star {{ $item['rating'] }}"></i>
                        </div>
                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">¢{{ $item['price'] }}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
