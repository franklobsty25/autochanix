@php
$sizes = [
    [
        'id' => '28', 
        'check' => 'checked', 
    ],
    [
        'id' => '30', 
        'check' => '', 
    ],
    [
        'id' => '32', 
        'check' => '', 
    ],
    [
        'id' => '34', 
        'check' => '', 
    ],
    [
        'id' => '36', 
        'check' => '', 
    ],
    [
        'id' => '38', 
        'check' => '', 
    ],
    [
        'id' => '40', 
        'check' => '', 
    ],
    [
        'id' => '42', 
        'check' => '', 
    ],
    [
        'id' => '44', 
        'check' => '', 
    ],
    [
        'id' => '46', 
        'check' => '', 
    ],
    [
        'id' => '48', 
        'check' => '', 
    ],
    [
        'id' => '50', 
        'check' => '', 
    ]
];
@endphp

@foreach ($sizes as $item)
    <div class="form-check form-option size-option form-check-inline mb-2">
        <input class="form-check-input" type="radio" name="size" id="{{ $item['id'] }}" {{ $item['check'] }}>
        <label class="form-option-label" for="{{ $item['id'] }}">{{ $item['id'] }}</label>
    </div>
@endforeach