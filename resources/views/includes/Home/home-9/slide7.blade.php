@php
$slides = [
    [
        'img' => 'assets/img/banner-18.png',
        'name' => 'Save up to 60% off',
        'title' => "The Best Deals",
        'title1' => 'of The Year',
        'desc' => "There's nothing like trend",
        'btn' => 'Shop Now',
    ],
    [
        'img' => 'assets/img/banner-19.png',
        'name' => 'Mega Sale',
        'title' => "Get up to 50% off",
        'title1' => 'Black Friday',
        'desc' => "There's nothing like trend",
        'btn' => 'Shop Now',
    ],
    [
        'img' => 'assets/img/banner-20.png',
        'name' => 'Super Sale',
        'title' => "Online",
        'title1' => 'Fashion Shop',
        'desc' => "There's nothing like trend",
        'btn' => 'Shop Now',
    ]
];
@endphp

@foreach ($slides as $item)
    <div data-background-image="{{ asset($item['img']) }}" class="item">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-slider-container">

                        <div class="home-slider-desc">
                            <div class="home-slider-title mb-4">
                                <h5 class="theme-cl fs-md ft-ragular mb-0">{{ $item['name'] }}</h5>
                                <h1 class="mb-1 ft-bold lg-heading">{{ $item['title'] }}<br>{{ $item['title1'] }}</h1>
                                <span class="trending">{{ $item['desc'] }}</span>
                            </div>

                            <a href="#" class="btn stretched-links borders">{{ $item['btn'] }}<i class="lni lni-arrow-right ms-2"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach