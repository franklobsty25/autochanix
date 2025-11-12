<?php

namespace App\Livewire\Frontends\Supports;

use Livewire\Attributes\Layout;
use Livewire\Component;

class PrivacyPolicy extends Component
{
    #[Layout('components.layouts.app.front-page')]
    public function render()
    {
        return view('livewire.frontends.supports.privacy-policy');
    }
}
