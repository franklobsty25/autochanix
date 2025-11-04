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
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-6"><a href="{{ asset($item['img']) }}" data-lightbox="roadtrip" class="d-block mb-4"><img src="{{ asset($item['img']) }}" class="img-fluid rounded" alt="" /></a></div>
@endforeach