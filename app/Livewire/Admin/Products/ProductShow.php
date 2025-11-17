<?php

namespace App\Livewire\Admin\Products;

use App\Models\Product;
use App\Util;
use Illuminate\View\View;
use Livewire\Component;

class ProductShow extends Component
{
    use Util;

    public $product;

    public function mount(string $productId): void
    {
        $this->product = Product::firstWhere('id', $this->decrypt($productId));
    }

    public function render(): View
    {
        return view('livewire.admin.products.product-show');
    }
}
