@php
$images = [
    [
        'img' => 'assets/img/product/17.png',
    ],
    [
        'img' => 'assets/img/product/18.png',
    ],
    [
        'img' => 'assets/img/product/19.png',
    ],
    [
        'img' => 'assets/img/product/20.png',
    ],
    [
        'img' => 'assets/img/product/21.png',
    ]
];
@endphp

@foreach ($images as $item)
    <a href="{{ asset($item['img']) }}"><img src="{{ asset($item['img']) }}" alt=""></a>
@endforeach
