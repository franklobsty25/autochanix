@php
$slides = [
    [
        'img' => 'assets/img/banner-3.png',
        'name' => 'New Collection',
        'title' => 'The Standard',
        'title1' => 'With',
        'title2' => 'Smartness',
        'style' => 'theme-cl',
        'desc' => 'Apple 10 comes with 6.5 inches full HD + High Valume',
        'btn' => 'Buy Now',
    ],
    [
        'img' => 'assets/img/banner-24.png',
        'name' => 'Super Sale',
        'title' => 'The Standard',
        'title1' => 'With',
        'title2' => 'Smartness',
        'style' => 'theme-cl',
        'desc' => 'Xiomi Redmi 10 comes with 6.5 inches full HD + LCD Screen',
        'btn' => 'Shop Now',
    ],
    [
        'img' => 'assets/img/banner-25.png',
        'name' => 'Super Sale',
        'title' => 'The Standard',
        'title1' => 'With',
        'title2' => 'Smartness',
        'style' => '',
        'desc' => 'Xiomi Redmi 10 comes with 6.5 inches full HD + LCD Screen',
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
                                <h5 class="fs-sm ft-ragular mb-2">{{ $item['name'] }}</h5>
                                <h1 class="mb-2 ft-bold">{{ $item['title'] }}<br>{{ $item['title1'] }} <span class="{{ $item['style'] }}">{{ $item['title2'] }}</span></h1>
                                <span class="trending">{{ $item['desc'] }}</span>
                            </div>

                            <a href="#" class="btn btn-white stretched-links hover-black">{{ $item['btn'] }}<i class="lni lni-arrow-right ms-2"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach