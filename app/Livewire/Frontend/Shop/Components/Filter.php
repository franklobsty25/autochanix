<?php

namespace App\Livewire\Frontend\Shop\Components;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Filter extends Component
{
    #[Layout('components.layouts.app.front-page')]
    public function render()
    {
        return view('livewire.frontend.shop.components.filter');
    }
}
