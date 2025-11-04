@php
$styles = [
    [
        'img' => 'assets/img/c-2.png',
        'title' => 'Wall Designs',
        'items' => '450 Items',
        'style' => 'col-xl-6 col-lg-6 col-md-12 col-sm-12',
    ],
    [
        'img' => 'assets/img/c-5.png',
        'title' => 'Dinning Table',
        'items' => '620 Items',
        'style' => 'col-xl-6 col-lg-6 col-md-12 col-sm-12',
    ],
    [
        'img' => 'assets/img/c-12.png',
        'title' => 'Room Lighting',
        'items' => '762 Items',
        'style' => 'col-xl-12 col-lg-12 col-md-12 col-sm-12',
    ]
];
@endphp

@foreach ($styles as $item)
    <div class="{{ $item['style'] }}">
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