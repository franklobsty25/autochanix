<?php

namespace App\Livewire\Frontend\Supports;

use Livewire\Attributes\Layout;
use Livewire\Component;

class PrivacyPolicy extends Component
{
    #[Layout('components.layouts.app.front-page')]
    public function render()
    {
        return view('livewire.frontend.supports.privacy-policy');
    }
}
