@php
$posts = [
    [
        'img' => 'assets/img/bl-1.png',
        'title' => 'Alonso Kelina Falao Asiano Pero',
        'time' => '10 Min ago',
    ],
    [
        'img' => 'assets/img/bl-2.png',
        'title' => 'It is a long established fact that a reader',
        'time' => '2 Hours ago',
    ],
    [
        'img' => 'assets/img/bl-3.png',
        'title' => 'Many desktop publish packages and web',
        'time' => '4 Hours ago',
    ],
    [
        'img' => 'assets/img/bl-1.png',
        'title' => 'Various versions have evolved over the years',
        'time' => '7 Hours ago',
    ],
    [
        'img' => 'assets/img/bl-2.png',
        'title' => 'Photo booth anim 8-bit PBR 3 wolf moon.',
        'time' => '3 Days ago',
    ]
];
@endphp

@foreach ($posts as $item)
    <li>
        <span class="left">
            <img src="{{ asset($item['img']) }}" alt="" class="">
        </span>
        <span class="right">
            <a class="feed-title" href="#">{{ $item['title'] }}</a> 
            <span class="post-date"><i class="ti-calendar"></i>{{ $item['time'] }}</span>
        </span>
    </li>
@endforeach