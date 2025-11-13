<?php

namespace App\Livewire\Frontend\Shop\Components;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Information extends Component
{
    public $informations = [
        [
            'name' => 'ID',
            'title' => '#1253458',
        ],
        [
            'name' => 'SKU',
            'title' => 'KUM125896',
        ],
        [
            'name' => 'Color',
            'title' => 'Sky Blue',
        ],
        [
            'name' => 'Size',
            'title' => 'Xl, 42',
        ],
        [
            'name' => 'Weight',
            'title' => '450 Gr',
        ]
    ];

    #[Layout('components.layouts.app.front-page')]
    public function render()
    {
        return view('livewire.frontend.shop.components.information');
    }
}
