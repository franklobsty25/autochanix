<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class ProductEdit extends Component
{
    public $product, $name, $description;

    public function mount(Product $product): void
    {
        $this->product = $product;
        $this->name = $this->product->name;
        $this->description = $this->product->description;
    }

    public function render(): View
    {
        return view('livewire.products.product-edit');
    }

    public function editProduct()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $this->product->name = $this->name;
        $this->product->description = $this->description;

        $this->product->save();

        return to_route('products.index')->with('success', 'Product updated successfully.');
    }
}
