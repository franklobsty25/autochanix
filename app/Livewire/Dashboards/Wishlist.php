<?php

namespace App\Livewire\Dashboards;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Wishlist extends Component
{
    #[Layout('components.layouts.app.front-page')]
    public function render()
    {
        return view('livewire.dashboards.wishlist');
    }
}
