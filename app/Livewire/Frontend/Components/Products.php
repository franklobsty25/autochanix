<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Products extends Component
{
    public $products = [
        [
            'id' => 65,
            'img' => 'assets/img/shop/7.png',
            'title' => 'Premium Brake Pads Set',
            'name' => 'Brake System',
            'tag' => 'Sale',
            'tag1' => null,
            'style' => 'bg-sale',
            'rating' => 'filled',
            'price' => 89,
        ],
        [
            'id' => 66,
            'img' => 'assets/img/shop/8.png',
            'title' => 'Engine Oil Filter',
            'name' => 'Engine Parts',
            'tag' => 'New',
            'tag1' => '-25%',
            'style' => 'bg-new',
            'rating' => '',
            'price' => 24,
        ],
        [
            'id' => 67,
            'img' => 'assets/img/shop/11.png',
            'title' => 'Michelin Pilot Sport Tires',
            'name' => 'Tires & Wheels',
            'tag' => 'Sold Out',
            'tag1' => null,
            'style' => 'bg-sold',
            'rating' => 'filled',
            'price' => 450,
        ],
        [
            'id' => 68,
            'img' => 'assets/img/shop/4.png',
            'title' => 'Car Battery 12V 75Ah',
            'name' => 'Electrical',
            'tag' => 'New',
            'tag1' => '-15%',
            'style' => 'bg-new',
            'rating' => '',
            'price' => 120,
        ],
        [
            'id' => 69,
            'img' => 'assets/img/shop/5.png',
            'title' => 'Spark Plugs Set (4pcs)',
            'name' => 'Engine Parts',
            'tag' => 'Sale',
            'tag1' => '-20%',
            'style' => 'bg-sale',
            'rating' => '',
            'price' => 35,
        ],
        [
            'id' => 70,
            'img' => 'assets/img/shop/6.png',
            'title' => 'Air Filter Element',
            'name' => 'Filters',
            'tag' => 'New',
            'tag1' => null,
            'style' => 'bg-new',
            'rating' => 'filled',
            'price' => 18,
        ],
        [
            'id' => 71,
            'img' => 'assets/img/shop/7.png',
            'title' => 'Phone Car Mount Holder',
            'name' => 'Accessories',
            'tag' => 'Sale',
            'tag1' => null,
            'style' => 'bg-sale',
            'rating' => '',
            'price' => 15,
        ],
        [
            'id' => 72,
            'img' => 'assets/img/shop/8.png',
            'title' => 'Car Seat Covers Set',
            'name' => 'Interior',
            'tag' => 'Sold Out',
            'tag1' => '-35%',
            'style' => 'bg-sold',
            'rating' => 'filled',
            'price' => 85,
        ]
    ];

    #[Layout('components.layouts.app.front-page')]
    public function render()
    {
        return view('livewire.frontend.components.products');
    }
}
