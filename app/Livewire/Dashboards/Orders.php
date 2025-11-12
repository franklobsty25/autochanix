<?php

namespace App\Livewire\Dashboards;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Orders extends Component
{
    #[Layout('components.layouts.app.front-page')]
    public function render()
    {
        return view('livewire.dashboards.orders');
    }
}
