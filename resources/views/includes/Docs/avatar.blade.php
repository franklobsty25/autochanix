@php
$avatars = [
    [
        'class' => 'avatar avatar-xxl',
    ],
    [
        'class' => 'avatar avatar-xl',
    ],
    [
        'class' => 'avatar avatar-lg',
    ],
    [
        'class' => 'avatar',
    ],
    [
        'class' => 'avatar avatar-sm',
    ],
    [
        'class' => 'avatar avatar-xs',
    ]
];
@endphp

@foreach ($avatars as $item)
    <div class="{{ $item['class'] }}">
        <img src="{{ asset('assets/img/team-1.jpg') }}" alt="..." class="img-fluid circle">
    </div>
@endforeach