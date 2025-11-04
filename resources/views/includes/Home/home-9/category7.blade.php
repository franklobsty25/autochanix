@php
$categorys = [
    [
        'img' => 'assets/img/offer-1.png',
        'number' => '50%',
        'name' => 'Off',
        'title' => "Shop For Women's",
    ],
    [
        'img' => 'assets/img/offer-2.png',
        'number' => '40%',
        'name' => 'Off',
        'title' => "Shop For Men's",
    ]
];
@endphp

@foreach ($categorys as $item)
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="single_cats">
            <a href="#" class="cards card-overflow card-scale">
                <div class="bg-image" style="background:url({{ asset($item['img']) }})no-repeat;"></div>
                <div class="ct_body">
                    <div class="ct_body_caption left">	
                        <div class="p-5 d-flex align-items-center justify-content-center circle theme-bg text-center">
                            <h2 class="m-0 ft-bold lh-1 text-light text-upper position-absolute">{{ $item['number'] }}<span class="d-block fs-sm">{{ $item['name'] }}</span></h2>
                        </div>
                    </div>
                    <div class="ct_footer left">
                        <span class="stretched-link fs-md">{{ $item['title'] }} <i class="ti-arrow-circle-right"></i></span>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endforeach