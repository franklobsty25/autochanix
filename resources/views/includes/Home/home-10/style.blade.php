@php
$styles = [
    [
        'img' => 'assets/img/c-3.png',
        'title' => 'Arm Chair',
        'items' => '762 Items',
    ],
    [
        'img' => 'assets/img/c-5.png',
        'title' => 'Dinning Table',
        'items' => '512 Items',
    ]
];
@endphp

@foreach ($styles as $item)
    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
        <div class="single_cats">
            <a href="#" class="cards card-overflow card-scale md_height">
                <div class="bg-image" style="background:url({{ asset($item['img']) }})no-repeat;"></div>
                <div class="ct_body">
                    <div class="ct_body_caption left">	
                        <h2 class="m-0 ft-bold lh-1 fs-md text-upper">{{ $item['title'] }}</h2>
                        <span>{{ $item['items'] }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div>								
@endforeach