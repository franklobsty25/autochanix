<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Featured extends Component
{
    public $featureds = [
        [
            'id' => 68,
            'img' => 'assets/img/shop/4.png',
            'title' => 'Apple iPhone 11(Black)',
            'name' => 'iPhones',
            'tag' => 'Hot',
            'style' => 'bg-hot',
            'price' => 48900,
        ],
        [
            'id' => 69,
            'img' => 'assets/img/shop/5.png',
            'title' => 'Canon EOS Digital Camera',
            'name' => 'Camera',
            'tag' => '-50%',
            'style' => 'bg-danger',
            'price' => 33421,
        ],
        [
            'id' => 70,
            'img' => 'assets/img/shop/6.png',
            'title' => 'JBL JR310BT Wireless Headphones',
            'name' => 'Headphones',
            'tag' => 'Sold',
            'style' => 'bg-sold',
            'price' => 12239,
        ]
    ];

    #[Layout('components.layouts.app.front-page')]
    public function render()
    {
        return view('livewire.frontend.components.featured');
    }
}
