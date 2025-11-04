@php
$navs = [
    [
        'title' => "All",
        'class' => "",
        'link' => "#all",
        'id' => "all-tab",
        'controls' => "all",
        'selected' => "true",
    ],
    [
        'title' => "Men's",
        'class' => "active",
        'link' => "#mens",
        'id' => "mens-tab",
        'controls' => "mens",
        'selected' => "false",
    ],
    [
        'title' => "Women",
        'class' => "",
        'link' => "#women",
        'id' => "women-tab",
        'controls' => "women",
        'selected' => "false",
    ],
    [
        'title' => "Kids",
        'class' => "",
        'link' => "#kids",
        'id' => "kids-tab",
        'controls' => "kids",
        'selected' => "false",
    ]
];
@endphp

@foreach ($navs as $item)
    <li class="nav-item" role="presentation">
        <a class="nav-link {{ $item['class'] }}" href="{{ $item['link'] }}" id="{{ $item['id'] }}" data-bs-toggle="tab" role="tab" aria-controls="{{ $item['controls'] }}" aria-selected="{{ $item['selected'] }}">{{ $item['title'] }}</a>
    </li>
@endforeach