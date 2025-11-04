@php
$insta = [
    [
        'img' => 'assets/img/p-13.png',
    ],
    [
        'img' => 'assets/img/p-14.png',
    ],
    [
        'img' => 'assets/img/p-15.png',
    ],
    [
        'img' => 'assets/img/p-16.png',
    ],
    [
        'img' => 'assets/img/p-17.png',
    ],
    [
        'img' => 'assets/img/p-18.png',
    ],
    [
        'img' => 'assets/img/p-19.png',
    ],
    [
        'img' => 'assets/img/p-20.png',
    ],
    [
        'img' => 'assets/img/p-15.png',
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