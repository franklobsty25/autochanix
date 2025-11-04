@php
$banners = [
    [
        'img' => 'assets/img/b-8.png',
        'off' => 'Up to 30% Off',
        'title' => 'Women Wear',
        'items' => '4232 Items',
        'btn' => 'Browse Items',
	],
    [
        'img' => 'assets/img/b-3.png',
        'off' => 'Up to 40% Off',
        'title' => 'Kids Wear',
        'items' => '5615 Items',
        'btn' => 'Browse Items',
	],
    [
        'img' => 'assets/img/c-8.png',
        'off' => 'Up to 45% Off',
        'title' => 'Kitchen Accessories',
        'items' => '3215 Items',
        'btn' => 'Browse Items',
	]
];
@endphp

@foreach ($banners as $item)
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="single_cats">
            <a href="#" class="cards card-overflow card-scale mid_height">
                <div class="bg-image" style="background:url({{ asset($item['img']) }})no-repeat;"></div>
                <div class="ct_body">
                    <div class="ct_body_caption left">
                        <h6 class="mb-1">{{ $item['off'] }}</h6>
                        <h1 class="mb-2 ft-bold lh-1 fs-md text-upper">{{ $item['title'] }}</h1>
                        <span>{{ $item['items'] }}</span>
                    </div>
                    <div class="ct_footer left">
                        <span class="stretched-link fs-md">{{ $item['btn'] }} <i class="ti-arrow-circle-right"></i></span>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endforeach