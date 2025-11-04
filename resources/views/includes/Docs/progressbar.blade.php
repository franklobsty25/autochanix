@php
$progressbars = [
    [
        'style' => 'progress mb-3',
        'class' => 'dark',
        'width' => '12%',
        'valuenow' => '12',
    ],
    [
        'style' => 'progress mb-3',
        'class' => 'success',
        'width' => '25%',
        'valuenow' => '25',
    ],
    [
        'style' => 'progress mb-3',
        'class' => 'info',
        'width' => '50%',
        'valuenow' => '50',
    ],
    [
        'style' => 'progress mb-3',
        'class' => 'warning',
        'width' => '75%',
        'valuenow' => '75',
    ],
    [
        'style' => 'progress',
        'class' => 'danger',
        'width' => '100%',
        'valuenow' => '100',
    ]
];
@endphp

@foreach ($progressbars as $item)
    <div class="{{ $item['style'] }}">
        <div class="progress-bar bg-{{ $item['class'] }}" role="progressbar" style="width:{{ $item['width'] }}" aria-valuenow="{{ $item['valuenow'] }}" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
@endforeach