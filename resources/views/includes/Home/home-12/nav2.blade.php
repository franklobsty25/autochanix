@php
$navs = [
    [
        'title' => "All",
        'class' => "active",
        'link' => "#all",
        'id' => "all-tab",
        'controls' => "all",
        'selected' => "true",
    ],
    [
        'title' => "Vegetables",
        'class' => "",
        'link' => "#mens",
        'id' => "mens-tab",
        'controls' => "mens",
        'selected' => "false",
    ],
    [
        'title' => "Meet",
        'class' => "",
        'link' => "#women",
        'id' => "women-tab",
        'controls' => "women",
        'selected' => "false",
    ],
    [
        'title' => "Drink",
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
        <a class="nav-link {{ $item['class'] }}" id="{{ $item['id'] }}" href="{{ $item['link'] }}" data-bs-toggle="tab" role="tab" aria-controls="{{ $item['controls'] }}" aria-selected="{{ $item['selected'] }}">{{ $item['title'] }}</a>
    </li>
@endforeach