@php
$badges = [
    [
        'title' => 'Primary',
        'class' => 'primary one',
    ],
    [
        'title' => 'Secondary',
        'class' => 'secondary two',
    ],
    [
        'title' => 'Success',
        'class' => 'success three',
    ],
    [
        'title' => 'Danger',
        'class' => 'danger four',
    ],
    [
        'title' => 'Warning',
        'class' => 'warning five',
    ],
    [
        'title' => 'Info',
        'class' => 'info six',
    ],
    [
        'title' => 'Light',
        'class' => 'light seven',
    ],
    [
        'title' => 'Dark',
        'class' => 'dark eight',
    ]
];
@endphp

@foreach ($badges as $item)
    <a href="#" class="badge badge-{{ $item['class'] }}">{{ $item['title'] }}</a>
@endforeach