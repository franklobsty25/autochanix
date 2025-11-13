<?php

namespace App\Livewire\Frontend\Shop\Components;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Reviews extends Component
{
    public $reviews = [
        [
            'img' => 'assets/img/team-1.jpg',
            'name' => 'Daniel Rajdesh',
            'date' => '30 jul 2025',
            'desc' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum',
            'style' => 'single_rev d-flex align-items-start br-bottom py-3',
        ],
        [
            'img' => 'assets/img/team-2.jpg',
            'name' => 'Seema Gupta',
            'date' => '30 Aug 2025',
            'desc' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum',
            'style' => 'single_rev d-flex align-items-start br-bottom py-3',
        ],
        [
            'img' => 'assets/img/team-3.jpg',
            'name' => 'Mark Jugermi',
            'date' => '10 Oct 2025',
            'desc' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum',
            'style' => 'single_rev d-flex align-items-start br-bottom py-3',
        ],
        [
            'img' => 'assets/img/team-4.jpg',
            'name' => 'Meena Rajpoot',
            'date' => '17 Dec 2025',
            'desc' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum',
            'style' => 'single_rev d-flex align-items-start py-3',
        ]
    ];

    #[Layout('components.layouts.app.front-page')]
    public function render()
    {
        return view('livewire.frontend.shop.components.reviews');
    }
}
