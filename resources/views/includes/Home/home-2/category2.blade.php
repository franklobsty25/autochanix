@php
$categorys = [
    [
        'img' => 'assets/img/b-8.png',
        'title' => "Women Clothes",
        'name' => '3272 Items',
        'btn' => 'Browse Items',
        'style' => 'lg_height',
    ],
    [
        'img' => 'assets/img/b-5.png',
        'title' => "Men's Wear",
        'name' => '7632 Items',
        'btn' => 'Browse Items',
        'style' => 'md_height',
    ]
];
@endphp

@foreach ($categorys as $item)
    <div class="single_cats">
        <a href="#" class="cards card-overflow card-scale {{ $item['style'] }}">
            <div class="bg-image" style="background:url({{ asset($item['img']) }})no-repeat;"></div>
            <div class="ct_body">
                <div class="ct_body_caption left">	
                    <h2 class="m-0 ft-bold lh-1 fs-md text-upper">{{ $item['title'] }}</h2>
                    <span>{{ $item['name'] }}</span>
                </div>
                <div class="ct_footer left">
                    <span class="stretched-link fs-md">{{ $item['btn'] }} <i class="ti-arrow-circle-right"></i></span>
                </div>
            </div>
        </a>
    </div>
@endforeach