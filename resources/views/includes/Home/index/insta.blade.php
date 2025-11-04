@php
$insta = [
    [
        'img' => 'assets/img/i-1.png',
    ],
    [
        'img' => 'assets/img/i-2.png',
    ],
    [
        'img' => 'assets/img/i-3.png',
    ],
    [
        'img' => 'assets/img/i-7.png',
    ],
    [
        'img' => 'assets/img/i-8.png',
    ],
    [
        'img' => 'assets/img/i-4.png',
    ],
    [
        'img' => 'assets/img/i-5.png',
    ],
    [
        'img' => 'assets/img/i-6.png',
    ],
    [
        'img' => 'assets/img/i-3.png',
    ]
];
@endphp

@foreach ($insta as $item)
    <div class="tiny-slide">
        <div class="_insta_wrap">
            <div class="_insta_thumb">
                <a href="javascript:void(0);" class="open-image" data-img="{{ asset($item['img']) }}">
                    <img src="{{ asset($item['img']) }}" class="img-fluid" alt="" />
                </a>
            </div>
        </div>
    </div>
@endforeach