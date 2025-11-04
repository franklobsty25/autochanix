@php
$categorys = [
    [
        'img' => 'assets/img/a-7.png', 
        'title' => "Women's",
        'collections' => "5670 Collections",
    ],
    [
        'img' => 'assets/img/a-9.png', 
        'title' => "Men's",
        'collections' => "3220 Collections",
    ],
    [
        'img' => 'assets/img/a-8.png', 
        'title' => "Kids",
        'collections' => "7412 Collections",
    ],
    [
        'img' => 'assets/img/a-10.png', 
        'title' => "Accessories",
        'collections' => "6580 Collections",
    ]
];
@endphp

@foreach ($categorys as $item)
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
        <div class="cats_caption_wrap">
            <div class="cats_caption_thumb mb-2">
                <a href="#" class="d-block"><img src="{{ asset($item['img']) }}" class="img-fluid rounded" alt="" /></a>
            </div>
            <div class="cats_caption text-center">
                <h4 class="m-0">{{ $item['title'] }}</h4>
                <span class="text-muted">{{ $item['collections'] }}</span>
            </div>
        </div>
    </div>
@endforeach