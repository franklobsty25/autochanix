<?php

namespace App\Livewire\Admin\Products;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class ProductShow extends Component
{
    public $product;

    public function mount(Product $product): void
    {
        $this->product = $product;
    }

    public function render(): View
    {
        return view('livewire.admin.products.product-show');
    }
}
