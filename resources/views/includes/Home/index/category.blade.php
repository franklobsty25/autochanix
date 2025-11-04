@php
$categorys = [
    [
        'img' => 'assets/img/a-1.png', 
        'title' => 'Mens', 
        'name' => 'Shop Mens', 
    ],
    [
        'img' => 'assets/img/a-2.png', 
        'title' => 'Kids', 
        'name' => 'Shop Kids', 
    ],
    [
        'img' => 'assets/img/a-3.png', 
        'title' => 'Womens', 
        'name' => 'Shop Womens', 
    ]
];
@endphp

@foreach ($categorys as $item)
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <a href="" class="card card-overflow card-scale no-radius mb-0">
        <div class="bg-image" style="background:url({{ asset($item['img']) }})no-repeat;" data-overlay="2"></div>
            <div class="ct_body">
                <div class="ct_body_caption">	
                    <h1 class="mb-0 ft-bold text-light">{{ $item['title'] }}</h1>
                </div>
                <div class="ct_footer">
                    <span class="btn btn-white stretched-links">{{ $item['name'] }} <i class="lni lni-arrow-right"></i>
                    </span>
                </div>
            </div>
        </a>
    </div>
@endforeach