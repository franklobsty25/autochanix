@php
$features = [
    [
        'icon' => 'fas fa-shopping-basket grocery-cl',
        'name' => 'Free Shipping',
        'title' => 'Capped at $10 per order',
    ],
    [
        'icon' => 'far fa-credit-card grocery-cl',
        'name' => 'Secure Payments',
        'title' => 'Up to 6 months installments',
    ],
    [
        'icon' => 'fas fa-shield-alt grocery-cl',
        'name' => '15-Days Returns',
        'title' => 'Shop with fully confidence',
    ],
    [
        'icon' => 'fas fa-headphones-alt grocery-cl',
        'name' => '24x7 Fully Support',
        'title' => 'Get friendly support',
    ]
];
@endphp

@foreach ($features as $item)
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="d-flex align-items-center justify-content-start py-2">
            <div class="d_ico">
                <i class="{{ $item['icon'] }}"></i>
            </div>
            <div class="d_capt">
                <h5 class="mb-0">{{ $item['name'] }}</h5>
                <span class="text-muted">{{ $item['title'] }}</span>
            </div>
        </div>
    </div>
@endforeach