@php
$images = [
    [
        'img' => 'assets/img/product/4.jpg', 
    ],
    [
        'img' => 'assets/img/product/6-a.jpg', 
    ],
    [
        'img' => 'assets/img/product/7.jpg', 
    ],
    [
        'img' => 'assets/img/product/7-a.jpg', 
    ]
];
@endphp

@foreach ($images as $item)
    <div class="single_view_slide"><a href="{{ asset($item['img']) }}" data-lightbox="roadtrip" class="d-block mb-4"><img src="{{ asset($item['img']) }}" class="img-fluid rounded" alt="" /></a></div>
@endforeach