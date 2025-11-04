@php
$colors = [
    [
        'id' => 'white8', 
        'blc' => 'blc7', 
    ],
    [
        'id' => 'blue8', 
        'blc' => 'blc2', 
    ],
    [
        'id' => 'yellow8', 
        'blc' => 'blc5', 
    ],
    [
        'id' => 'pink8', 
        'blc' => 'blc3', 
    ],
    [
        'id' => 'red', 
        'blc' => 'blc4', 
    ],
    [
        'id' => 'green', 
        'blc' => 'blc6', 
    ]
];
@endphp

@foreach ($colors as $item)
    <div class="form-check form-option form-check-inline mb-1">
        <input class="form-check-input" type="radio" name="color8" id="{{ $item['id'] }}">
        <label class="form-option-label rounded-circle" for="{{ $item['id'] }}"><span class="form-option-color rounded-circle {{ $item['blc'] }}"></span></label>
    </div>
@endforeach