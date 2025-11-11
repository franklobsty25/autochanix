<?php

namespace App\Livewire;

use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;

class SalesReport extends Component
{
    public $totalSales;
    public $salesByMonth;

    public function mount()
    {
        $this->totalSales = Order::whereMonth('created_at', Carbon::now()->month)
            ->sum('total_price');

        $this->salesByMonth = Order::selectRaw('sum(total_price) as total, MONTH(created_at) as month')
            ->where('created_at', '>=', Carbon::now()->subYear())
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();
    }

    public function render()
    {
        return view('livewire.sales-report');
    }
}
