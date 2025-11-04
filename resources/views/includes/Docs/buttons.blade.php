@php
$buttons = [
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
    ],
    [
        'title' => 'Link',
        'class' => 'link',
    ]
];
@endphp

@foreach ($buttons as $item)
    <button type="button" class="btn btn-{{ $item['class'] }}">{{ $item['title'] }}</button>
@endforeach