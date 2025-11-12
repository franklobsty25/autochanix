<?php

namespace App\Livewire\Frontend\Shop\Components;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Products extends Component
{
    public $products = [
        [
            'id' => 1,
            'img' => 'assets/img/product/7.jpg',
            'title' => 'Brake Pad Set',
            'tag' => 'Sale',
            'style' => 'bg-sale',
            'price' => 119,
            'original_price' => null,
            'class' => 'fw-medium fs-md text-dark',
        ],
        [
            'id' => 2,
            'img' => 'assets/img/product/8.jpg',
            'title' => 'Engine Oil 5W-30',
            'tag' => 'Sold Out',
            'style' => 'bg-sold',
            'price' => 79,
            'original_price' => 129,
            'class' => 'ft-medium theme-cl fs-md',
        ],
        [
            'id' => 3,
            'img' => 'assets/img/product/9.jpg',
            'title' => 'Air Filter',
            'tag' => false,
            'style' => '',
            'price' => 80,
            'original_price' => null,
            'class' => 'ft-medium fs-md text-dark',
        ],
        [
            'id' => 4,
            'img' => 'assets/img/product/11.jpg',
            'title' => 'Spark Plug Pack (4pcs)',
            'tag' => 'Hot',
            'style' => 'bg-hot',
            'price' => 110,
            'original_price' => 149,
            'class' => 'ft-medium theme-cl fs-md',
        ],

    ];

    #[Layout('components.layouts.app.front-page')]
    public function render()
    {
        return view('livewire.frontend.shop.components.products');
    }
}
