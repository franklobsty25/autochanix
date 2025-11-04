@php
$links = [
    [
        'title' => 'Alert',
        'class' => 'active',
        'id' => 'v-alert-tab',
        'link' => '#v-alert',
        'controls' => 'v-alert',
        'selected' => 'true',
    ],
    [
        'title' => 'Avaters',
        'class' => '',
        'id' => 'v-avaters-tab',
        'link' => '#v-avaters',
        'controls' => 'v-avaters',
        'selected' => 'false',
    ],
    [
        'title' => 'Badges',
        'class' => '',
        'id' => 'v-badges-tab',
        'link' => '#v-badges',
        'controls' => 'v-badges',
        'selected' => 'false',
    ],
    [
        'title' => 'Breadcrumb',
        'class' => '',
        'id' => 'v-breadcrumb-tab',
        'link' => '#v-breadcrumb',
        'controls' => 'v-breadcrumb',
        'selected' => 'false',
    ],
    [
        'title' => 'Buttons',
        'class' => '',
        'id' => 'v-buttons-tab',
        'link' => '#v-buttons',
        'controls' => 'v-buttons',
        'selected' => 'false',
    ],
    [
        'title' => 'Form',
        'class' => '',
        'id' => 'v-form-tab',
        'link' => '#v-form',
        'controls' => 'v-form',
        'selected' => 'false',
    ],
    [
        'title' => 'Lists',
        'class' => '',
        'id' => 'v-lists-tab',
        'link' => '#v-lists',
        'controls' => 'v-lists',
        'selected' => 'false',
    ],
    [
        'title' => 'Tabs',
        'class' => '',
        'id' => 'v-tabss-tab',
        'link' => '#v-tabss',
        'controls' => 'v-tabss',
        'selected' => 'false',
    ],
    [
        'title' => 'Accordion',
        'class' => '',
        'id' => 'v-accordions-tab',
        'link' => '#v-accordions',
        'controls' => 'v-accordions',
        'selected' => 'false',
    ],
    [
        'title' => 'Pagination',
        'class' => '',
        'id' => 'v-pagination-tab',
        'link' => '#v-pagination',
        'controls' => 'v-pagination',
        'selected' => 'false',
    ],
    [
        'title' => 'Typography',
        'class' => '',
        'id' => 'v-typography-tab',
        'link' => '#v-typography',
        'controls' => 'v-typography',
        'selected' => 'false',
    ],
    [
        'title' => 'Progressbar',
        'class' => '',
        'id' => 'v-progressbar-tab',
        'link' => '#v-progressbar',
        'controls' => 'v-progressbar',
        'selected' => 'false',
    ],
    [
        'title' => 'Utility',
        'class' => '',
        'id' => 'v-utility-tab',
        'link' => '#v-utility',
        'controls' => 'v-utility',
        'selected' => 'false',
    ]
];
@endphp

@foreach ($links as $item)
    <a class="nav-link {{ $item['class'] }}" id="{{ $item['id'] }}" data-bs-toggle="pill" href="{{ $item['link'] }}" role="tab" aria-controls="{{ $item['controls'] }}" aria-selected="{{ $item['selected'] }}">{{ $item['title'] }}</a>
@endforeach