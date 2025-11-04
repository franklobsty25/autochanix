@php
$categories = [
    [
        'name' => 'Lifestyle',
        'number' => '09',
    ],
    [
        'name' => 'Travel',
        'number' => '12',
    ],
    [
        'name' => 'Fashion',
        'number' => '19',
    ],
    [
        'name' => 'Branding',
        'number' => '17',
    ],
    [
        'name' => 'Music',
        'number' => '10',
    ],
];
@endphp

@foreach ($categories as $item)
    <li><a href="#">{{ $item['name'] }} <span>{{ $item['number'] }}</span></a></li>
@endforeach