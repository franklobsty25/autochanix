@php
$brands = [
    [
        'img' => 'assets/img/shop-logo-1.png', 
    ],
    [
        'img' => 'assets/img/shop-logo-2.png', 
    ],
    [
        'img' => 'assets/img/shop-logo-3.png', 
    ],
    [
        'img' => 'assets/img/shop-logo-4.png', 
    ],
    [
        'img' => 'assets/img/shop-logo-5.png', 
    ],
    [
        'img' => 'assets/img/shop-logo-6.png', 
    ],
    [
        'img' => 'assets/img/shop-logo-1.png', 
    ],
    [
        'img' => 'assets/img/shop-logo-2.png', 
    ]
];
@endphp

@foreach ($brands as $item)
    <div class="single-brands">
        <img src="{{ asset($item['img']) }}" class="img-fluid" alt="" />
    </div>
@endforeach