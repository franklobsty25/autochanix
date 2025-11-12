<?php

namespace App\Livewire\Frontends\Supports;

use Livewire\Attributes\Layout;
use Livewire\Component;

class AboutUs extends Component
{
    #[Layout('components.layouts.app.front-page')]
    public function render()
    {
        return view('livewire.frontends.supports.about-us');
    }
}
