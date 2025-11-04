@php
$slides = [
    [
        'img' => 'assets/img/banner-4.png',
        'name' => 'Winter Collection',
        'title' => "New Winter",
        'title1' => 'Collections 2025',
        'desc' => "There's nothing like trend",
        'btn' => 'Shop Now',
    ],
    [
        'img' => 'assets/img/banner-7.png',
        'name' => 'Summer Collection',
        'title' => "Women's Fashion",
        'title1' => 'UpTo 30% Off',
        'desc' => "There's nothing like trend",
        'btn' => 'Shop Now',
    ],
    [
        'img' => 'assets/img/banner-11.png',
        'name' => 'Winter Collection',
        'title' => "New Winter",
        'title1' => 'Collections 2025',
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
                                <h5 class="theme-cl fs-sm ft-ragular mb-0">{{ $item['name'] }}</h5>
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