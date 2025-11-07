@php
$trendings = [
    [
        'id' => 1,
        'img' => 'assets/img/product/1.jpg',
        'title' => 'Half Running Set',
        'tag' => 'Sale',
        'style' => 'bg-success',
        'price' => '99 - $129',
        'name' => 'color1',
        'id1' => 'white',
        'id2' => 'blue',
        'id3' => 'yellow',
        'id4' => 'pink',
        'check' => '',
    ],
    [
        'id' => 2,
        'img' => 'assets/img/product/2.jpg',
        'title' => 'Formal Men Lowers',
        'tag' => 'New',
        'style' => 'bg-info',
        'price' => '99 - $129',
        'name' => 'color2',
        'id1' => 'white2',
        'id2' => 'blue2',
        'id3' => 'yellow2',
        'id4' => 'pink2',
        'check' => '',
    ],
    [
        'id' => 3,
        'img' => 'assets/img/product/3.jpg',
        'title' => 'Half Running Suit',
        'tag' => false,
        'style' => '',
        'price' => '99 - $129',
        'name' => 'color3',
        'id1' => 'white3',
        'id2' => 'blue3',
        'id3' => 'yellow3',
        'id4' => 'pink3',
        'check' => '',
    ],
    [
        'id' => 4,
        'img' => 'assets/img/product/4.jpg',
        'title' => 'Half Fancy Lady Dress',
        'tag' => 'Hot',
        'style' => 'bg-warning',
        'price' => '99 - $129',
        'name' => 'color4',
        'id1' => 'white4',
        'id2' => 'blue4',
        'id3' => 'yellow4',
        'id4' => 'pink4',
        'check' => '',
    ],
    [
        'id' => 5,
        'img' => 'assets/img/product/5.jpg',
        'title' => 'Flix Flox Jeans',
        'tag' => false,
        'style' => '',
        'price' => '99 - $129',
        'name' => 'color5',
        'id1' => 'white5',
        'id2' => 'blue5',
        'id3' => 'yellow5',
        'id4' => 'pink5',
        'check' => '',
    ],
    [
        'id' => 6,
        'img' => 'assets/img/product/6.jpg',
        'title' => 'Fancy Salwar Suits',
        'tag' => 'Hot',
        'style' => 'bg-danger',
        'price' => '99 - $129',
        'name' => 'color6',
        'id1' => 'white6',
        'id2' => 'blue6',
        'id3' => 'yellow6',
        'id4' => 'pink6',
        'check' => '',
    ],
    [
        'id' => 7,
        'img' => 'assets/img/product/7.jpg',
        'title' => 'Collot Full Dress',
        'tag' => 'Sale',
        'style' => 'bg-success',
        'price' => '99 - $129',
        'name' => 'color7',
        'id1' => 'white7',
        'id2' => 'blue7',
        'id3' => 'yellow7',
        'id4' => 'pink7',
        'check' => '',
    ],
    [
        'id' => 8,
        'img' => 'assets/img/product/8.jpg',
        'title' => 'Formal Fluex Kurti',
        'tag' => 'Sale',
        'style' => 'bg-success',
        'price' => '99 - $129',
        'name' => 'color88',
        'id1' => 'white88',
        'id2' => 'blue88',
        'id3' => 'yellow88',
        'id4' => 'pink88',
        'check' => '',
    ]
];
@endphp

@foreach ($trendings as $item)
    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
        <div class="product_grid card b-0">

            @if ($item['tag'] !== false)
                <div class="badge {{ $item['style'] }} text-white position-absolute ft-regular ab-left text-upper">{{ $item['tag'] }}</div>
            @endif

            <div class="card-body p-0">
                <div class="shop_thumb position-relative">
                    <a class="card-img-top d-block overflow-hidden" href="{{ route('shops-single-v1', ['title' => Str::slug($item['title'])]) }}"><img class="card-img-top" src="{{ asset($item['img']) }}" alt="..."></a>
                    <div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                        <div class="edlio"><a href="#" data-bs-toggle="modal" data-bs-target="#quickview" data-product-id="{{ $item['id'] }}" class="text-white fs-sm ft-medium quickview-btn"><i class="fas fa-eye me-1"></i>Quick View</a></div>
                    </div>
                </div>
            </div>
            <div class="card-footer b-0 p-0 pt-2">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="text-left">
                        <div class="form-check form-option form-check-inline mb-1">
                            <input class="form-check-input" type="radio" name="{{ $item['name'] }}" id="{{ $item['id1'] }}" {{ $item['check'] }}>
                            <label class="form-option-label small rounded-circle" for="{{ $item['id1'] }}"><span class="form-option-color rounded-circle blc1"></span></label>
                        </div>
                        <div class="form-check form-option form-check-inline mb-1">
                            <input class="form-check-input" type="radio" name="{{ $item['name'] }}" id="{{ $item['id2'] }}">
                            <label class="form-option-label small rounded-circle" for="{{ $item['id2'] }}"><span class="form-option-color rounded-circle blc2"></span></label>
                        </div>
                        <div class="form-check form-option form-check-inline mb-1">
                            <input class="form-check-input" type="radio" name="{{ $item['name'] }}" id="{{ $item['id3'] }}">
                            <label class="form-option-label small rounded-circle" for="{{ $item['id3'] }}"><span class="form-option-color rounded-circle blc3"></span></label>
                        </div>
                        <div class="form-check form-option form-check-inline mb-1">
                            <input class="form-check-input" type="radio" name="{{ $item['name'] }}" id="{{ $item['id4'] }}">
                            <label class="form-option-label small rounded-circle" for="{{ $item['id4'] }}"><span class="form-option-color rounded-circle blc4"></span></label>
                        </div>
                    </div>
                    <div class="text-right">
                        <button class="btn auto btn_love snackbar-wishlist"><i class="far fa-heart"></i></button>
                    </div>
                </div>
                <div class="text-left">
                    <h5 class="fw-nornal fs-md mb-0 lh-1 mb-1"><a href="{{ route('shops-single-v1', ['title' => Str::slug($item['title'])]) }}">{{ $item['title'] }}</a></h5>
                    <div class="elis_rty"><span class="ft-medium text-dark fs-sm">${{ $item['price'] }}</span></div>
                </div>
            </div>
        </div>
    </div>
@endforeach
