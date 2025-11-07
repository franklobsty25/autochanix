@php
$products = [
    [
        'id' => 65,
        'img' => 'assets/img/shops/9.png',
        'title' => 'iPhone 13 Pro Max',
        'name' => 'Mobiles',
        'tag' => 'Sale',
        'tag1' => null,
        'style' => 'bg-sale',
        'rating' => 'filled',
        'price' => 39999,
    ],
    [
        'id' => 66,
        'img' => 'assets/img/shops/10.png',
        'title' => 'boAt Rockerz 425',
        'name' => 'Headphones',
        'tag' => 'New',
        'tag1' => '-40%',
        'style' => 'bg-new',
        'rating' => '',
        'price' => 1199,
    ],
    [
        'id' => 67,
        'img' => 'assets/img/shops/11.png',
        'title' => 'Apple iPhone 11(White)',
        'name' => 'Mobiles',
        'tag' => 'Sold Out',
        'tag1' => null,
        'style' => 'bg-sold',
        'rating' => 'filled',
        'price' => 18499,
    ],
    [
        'id' => 68,
        'img' => 'assets/img/shops/4.png',
        'title' => 'Apple iPhone 11(Black)',
        'name' => 'Mobiles',
        'tag' => 'New',
        'tag1' => '-55%',
        'style' => 'bg-new',
        'rating' => '',
        'price' => 48900,
    ],
    [
        'id' => 69,
        'img' => 'assets/img/shops/5.png',
        'title' => 'Canon EOS Digital Camera',
        'name' => 'Camera',
        'tag' => 'Sale',
        'tag1' => '-30%',
        'style' => 'bg-sale',
        'rating' => '',
        'price' => 33421,
    ],
    [
        'id' => 70,
        'img' => 'assets/img/shops/6.png',
        'title' => 'JBL JR310BT Wireless Headphones',
        'name' => 'Headphone',
        'tag' => 'New',
        'tag1' => null,
        'style' => 'bg-new',
        'rating' => 'filled',
        'price' => 12239,
    ],
    [
        'id' => 71,
        'img' => 'assets/img/shops/7.png',
        'title' => 'Sony 139 Cm Smart LED TV',
        'name' => 'TV/LCD',
        'tag' => 'Sale',
        'tag1' => null,
        'style' => 'bg-sale',
        'rating' => '',
        'price' => 81830,
    ]
];
@endphp

@foreach ($products as $item)
    <div class="single_itesm">
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
