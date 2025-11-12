<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Recent extends Component
{
    public $recents = [
        [
            'id' => 71,
            'img' => 'assets/img/shop/7.png',
            'title' => 'Sony 139 Cm Smart LED TV',
            'name' => 'TV/LED',
            'tag' => 'New',
            'style' => 'bg-new',
            'price' => 81830,
        ],
        [
            'id' => 72,
            'img' => 'assets/img/shop/8.png',
            'title' => 'Sony WH-CH520 Pink Headphones',
            'name' => 'Headphone',
            'tag' => 'Hot',
            'style' => 'bg-hot',
            'price' => 4490,
        ],
        [
            'id' => 65,
            'img' => 'assets/img/shop/9.png',
            'title' => 'iPhone 13 Pro Max',
            'name' => 'Mobiles',
            'tag' => '-50%',
            'style' => 'bg-danger',
            'price' => 39999,
        ],

    ];

    #[Layout('components.layouts.app.front-page')]
    public function render()
    {
        return view('livewire.frontend.components.recent');
    }
}
