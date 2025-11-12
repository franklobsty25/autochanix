<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Seller extends Component
{
    public $sellers = [
        [
            'id' => 67,
            'img' => 'assets/img/shop/11.png',
            'title' => 'Apple iPhone 11(White)',
            'name' => 'Mobiles',
            'tag' => 'Sale',
            'style' => 'bg-sale',
            'price' => 18499,
        ],
        [
            'id' => 73,
            'img' => 'assets/img/shop/2.png',
            'title' => 'iBenzer Macbook Air 13',
            'name' => 'Laptop',
            'tag' => '-50%',
            'style' => 'bg-danger',
            'price' => 58990,
        ],
        [
            'id' => 66,
            'img' => 'assets/img/shop/10.png',
            'title' => 'boAt Rockerz 425',
            'name' => 'Headphones',
            'tag' => 'Hot',
            'style' => 'bg-hot',
            'price' => 1199,
        ]
    ];

    #[Layout('components.layouts.app.front-page')]
    public function render()
    {
        return view('livewire.frontend.components.seller');
    }
}
