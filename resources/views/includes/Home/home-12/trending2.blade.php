@php
$trendings = [
    [
        'img' => 'assets/img/category/c-1.png',
        'title' => 'Fresh Vegetables',
    ],
    [
        'img' => 'assets/img/category/c-3.png',
        'title' => 'Dairy',
    ],
    [
        'img' => 'assets/img/category/c-12.png',
        'title' => 'Noodles & Sauces',
    ],
    [
        'img' => 'assets/img/category/c-4.png',
        'title' => 'Meat & Seafood',
    ],
    [
        'img' => 'assets/img/category/c-5.png',
        'title' => 'Fruits',
    ],
    [
        'img' => 'assets/img/category/c-6.png',
        'title' => 'Grocery & Staples',
    ],
    [
        'img' => 'assets/img/category/c-7.png',
        'title' => 'Snacks',
    ],
    [
        'img' => 'assets/img/category/c-8.png',
        'title' => 'Pets care',
    ],
    [
        'img' => 'assets/img/category/c-9.png',
        'title' => 'Electornics',
    ],
    [
        'img' => 'assets/img/category/c-10.png',
        'title' => 'Home Care',
    ],
    [
        'img' => 'assets/img/category/c-2.png',
        'title' => 'Eggs',
    ],
    [
        'img' => 'assets/img/category/c-11.png',
        'title' => 'Dry Snacks',
    ]
];
@endphp

@foreach ($trendings as $item)
    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="bg-white rounded px-3 py-4 mb-3">
            <div class="woo_cat_thumb mb-2 d-flex align-items-center justify-content-center">
                <a href="javascript:void(0);"><img src="{{ asset($item['img']) }}" class="img-fluid mx-auto" width="70" alt="" /></a>
            </div>
            <div class="woo_cat_caption text-center">
                <h4 class="m-0 fs-sm ft-medium"><a href="javascript:void(0);">{{ $item['title'] }}</a></h4>
            </div>
        </div>
    </div>
@endforeach