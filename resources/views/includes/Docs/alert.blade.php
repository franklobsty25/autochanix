@php
$alerts = [
    [
        'title' => 'This is a primary alert—check it out!',
        'class' => 'primary',
    ],
    [
        'title' => 'This is a secondary alert—check it out!',
        'class' => 'secondary',
    ],
    [
        'title' => 'This is a success alert—check it out!',
        'class' => 'success',
    ],
    [
        'title' => 'This is a danger alert—check it out!',
        'class' => 'danger',
    ],
    [
        'title' => 'This is a info alert—check it out!',
        'class' => 'info',
    ],
    [
        'title' => 'This is a light alert—check it out!',
        'class' => 'light',
    ],
    [
        'title' => 'This is a dark alert—check it out!',
        'class' => 'dark',
    ]
];
@endphp

@foreach ($alerts as $item)
    <div class="alert alert-{{ $item['class'] }}" role="alert">
        {{ $item['title'] }}
    </div>
@endforeach

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>