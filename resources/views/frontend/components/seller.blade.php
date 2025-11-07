@php
$sellers = [
    [
        'id' => 67,
        'img' => 'assets/img/shop/11.png',
        'title' => 'Apple iPhone 11(White)',
        'name' => 'Mobiles',
        'tag' => 'Sale',
        'style' => 'bg-sale',
        'price' => 18499,
    ],
    [
        'id' => 73,
        'img' => 'assets/img/shop/2.png',
        'title' => 'iBenzer Macbook Air 13',
        'name' => 'Laptop',
        'tag' => '-50%',
        'style' => 'bg-danger',
        'price' => 58990,
    ],
    [
        'id' => 66,
        'img' => 'assets/img/shop/10.png',
        'title' => 'boAt Rockerz 425',
        'name' => 'Headphones',
        'tag' => 'Hot',
        'style' => 'bg-hot',
        'price' => 1199,
    ]
];
@endphp

@foreach ($sellers as $item)
    <div class="product_grid row align-items-center">
        <div class="col-xl-4 col-lg-5 col-md-5 col-4">
            <div class="shop_thumb position-relative">
                <div class="badge {{ $item['style'] }} text-white position-absolute ft-regular ab-left text-upper">{{ $item['tag'] }}</div>
                <a class="card-img-top d-block overflow-hidden" href="#"><img class="card-img-top" src="{{ asset($item['img']) }}" alt="..."></a>
            </div>
        </div>
        <div class="col-xl-8 col-lg-7 col-md-7 col-8 ps-0">
            <div class="text-left mfliud">
                <div class="elso_titl"><span class="small">{{ $item['name'] }}</span></div>
                <h5 class="fs-md mb-0 lh-1 mb-1 ft-medium"><a href="#">{{ $item['title'] }}</a></h5>
                <div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="elis_rty"><span class="ft-bold text-dark fs-sm">${{ $item['price'] }}</span></div>
            </div>
        </div>
    </div>
@endforeach
