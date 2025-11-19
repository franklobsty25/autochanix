<?php

namespace App\Livewire\Admin;

use App\CurrencyEnum;
use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;

class SalesReport extends Component
{
    public $totalSales;
    public $salesByMonth;

    public function mount()
    {
        $total = Order::whereMonth('created_at', Carbon::now()->month)
            ->sum('total_amount');

        $this->totalSales = $this->getFormattedValue($total);

        $this->salesByMonth = Order::selectRaw('sum(total_amount) as total, MONTH(created_at) as month')
            ->where('created_at', '>=', Carbon::now()->subYear())
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();

        ds($this->salesByMonth);
    }

    private function getFormattedValue($value)
    {
        return CurrencyEnum::GHS->symbol() . number_format($value, 2);
    }

    public function render()
    {
        return view('livewire.admin.sales-report');
    }
}
