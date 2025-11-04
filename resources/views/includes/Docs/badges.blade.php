@php
$badges = [
    [
        'title' => 'Primary',
        'class' => 'primary',
    ],
    [
        'title' => 'Secondary',
        'class' => 'secondary',
    ],
    [
        'title' => 'Success',
        'class' => 'success',
    ],
    [
        'title' => 'Danger',
        'class' => 'danger',
    ],
    [
        'title' => 'Warning',
        'class' => 'warning',
    ],
    [
        'title' => 'Info',
        'class' => 'info',
    ],
    [
        'title' => 'Light',
        'class' => 'light',
    ],
    [
        'title' => 'Dark',
        'class' => 'dark',
    ]
];
@endphp

@foreach ($badges as $item)
    <span class="badge badge-{{ $item['class'] }}">{{ $item['title'] }}</span>
@endforeach