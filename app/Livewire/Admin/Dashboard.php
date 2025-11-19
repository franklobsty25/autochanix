<?php

namespace App\Livewire\Admin;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $usersCount;
    public $productsCount;
    public $ordersCount;
    public $totalSales;

    public function mount()
    {
        $this->loadStats();
    }

    public function refreshStats()
    {
        $this->loadStats();
    }

    private function loadStats()
    {
        $this->usersCount    = User::count();
        $this->productsCount = Product::count();
        $this->ordersCount   = Order::count();
        $this->totalSales    = Order::sum('total_amount');
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
