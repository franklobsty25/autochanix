<?php

namespace App\Livewire\Admin\Products;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class ProductIndex extends Component
{
    public $products;
    public function mount()
    {
        $this->products = Product::latest()->get();
    }

    public function render(): View
    {
        return view('livewire.admin.products.product-index');
    }

    public function deleteProduct(Product $product)
    {
        $product->delete();

        session()->flash('success', 'Product deleted successfully.');
    }
}
