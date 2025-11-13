<?php

namespace App\Livewire\Frontend\Shop\Components;

use Livewire\Attributes\Layout;
use Livewire\Component;

class MatchingProducts extends Component
{
     public $deals = [
        [
        'id' => 8,
        'img' => 'assets/img/product/8.jpg',
        'title' => 'Engine Oil 5W-30',
        'tag' => false,
        'style' => '',
        'price' => 129,
        'original_price' => 149,
        'class' => 'ft-medium theme-cl fs-md',
        ],
        [
        'id' => 15,
        'img' => 'assets/img/product/9.jpg',
        'title' => 'Air Filter',
        'tag' => 'Sale',
        'style' => 'bg-sale',
        'price' => 99,
        'original_price' => null,
        'class' => 'ft-medium theme-cl fs-md',
        ],
        [
        'id' => 18,
        'img' => 'assets/img/product/11.jpg',
        'title' => 'Spark Plug Pack (4pcs)',
        'tag' => 'Sold Out',
        'style' => 'bg-sold',
        'price' => 199,
        'original_price' => 149,
        'class' => 'ft-medium theme-cl fs-md',
        ],
         [
             'id' => 17,
             'img' => 'assets/img/shop/1.png',
             'title' => 'Folk Lighting',
             'tag' => 'New',
             'style' => 'bg-new',
             'price' => 149,
             'original_price' => null,
             'class' => 'ft-medium fs-md text-dark',
         ],
    ];

    #[Layout('components.layouts.app.front-page')]
    public function render()
    {
        return view('livewire.frontend.shop.components.matching-products');
    }
}
