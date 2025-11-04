@php
$categorys = [
    [
        'img' => 'assets/img/c-22.png',
        'title' => 'Adventure Kille',
        'title1' => 'Goggles',
        'price' => 'Start From $10.99',
        'class' => 'right',
        'style' => 'left lis-top',
    ],
    [
        'img' => 'assets/img/c-44.png',
        'title' => 'New Styles',
        'title1' => 'iPhones',
        'price' => 'Start From $500.99',
        'class' => 'left',
        'style' => 'right lis-bottom',
    ]
];
@endphp

@foreach ($categorys as $item)
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="single_cats">
            <a href="#" class="cards card-overflow card-scale lg_height">
                <div class="bg-image {{ $item['class'] }}" style="background:url({{ asset($item['img']) }})no-repeat;"></div>
                <div class="ct_body">
                    <div class="ct_body_caption {{ $item['style'] }}">	
                        <h2 class="ft-bold lh-1">{{ $item['title'] }}<br>{{ $item['title1'] }}</h2>
                        <span class="ft-medium text-underline">{{ $item['price'] }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endforeach