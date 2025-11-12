<?php

namespace App\Livewire\Frontends;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Checkout extends Component
{
    #[Layout('components.layouts.app.front-page')]
    public function render()
    {
        return view('livewire.frontends.checkout');
    }
}
