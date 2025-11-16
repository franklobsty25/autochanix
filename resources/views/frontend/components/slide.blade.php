@php
$slides = [
    [
        'img' => 'assets/img/banner-12.png',
        'name' => 'New Collection',
        'title' => 'The Standard',
        'title1' => 'With Smartness',
        'desc' => "Apple 10 comes with 6.5 inches full HD + High Valume",
        'btn' => 'Buy Now',
        'class' => 'text-light fs-sm ft-ragular mb-0',
        'class1' => 'mb-1 ft-bold lg-heading text-light',
        'class2' => 'trending text-light',
        'style' => 'btn btn-white stretched-links',
    ],
    // [
    //     'img' => 'assets/img/banner-27.png',
    //     'name' => 'Super Sale',
    //     'title' => 'The Standard',
    //     'title1' => 'With Smartness',
    //     'desc' => "Xiomi Redmi 10 comes with 6.5 inches full HD + LCD Screen",
    //     'btn' => 'Shop Now',
    //     'class' => 'text-light fs-sm ft-ragular mb-0',
    //     'class1' => 'mb-1 ft-bold lg-heading text-light',
    //     'class2' => 'trending text-light',
    //     'style' => 'btn btn-white stretched-links',
    // ],
    [
        'img' => 'assets/img/banner-28.png',
        'name' => 'Winter Collection',
        'title' => 'New Winter',
        'title1' => 'Collections 2025',
        'desc' => "There's nothing like trend",
        'btn' => 'Shop Now',
        'class' => 'text-light fs-sm ft-ragular mb-0',
        'class1' => 'mb-1 ft-bold lg-heading text-light',
        'class2' => 'trending text-light',
        'style' => 'btn stretched-links borders',
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
                                <h5 class="{{ $item['class'] }}">{{ $item['name'] }}</h5>
                                <h1 class="{{ $item['class1'] }}">{{ $item['title'] }}<br>{{ $item['title1'] }}</h1>
                                <span class="{{ $item['class2'] }}">{{ $item['desc'] }}</span>
                            </div>

                            <a href="{{ route('shop') }}" class="{{ $item['style'] }}">{{ $item['btn'] }}<i class="lni lni-arrow-right ms-2"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
