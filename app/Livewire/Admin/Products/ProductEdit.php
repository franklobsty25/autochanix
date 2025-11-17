<?php

namespace App\Livewire\Admin\Products;

use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class ProductEdit extends Component
{
    public $categories;
    public ProductForm $form;

    public function mount(Product $product): void
    {
        $this->form->setProduct($product);
        $this->categories = Category::latest()->get();
    }

    public function update()
    {
        $this->form->update();

        return to_route('products.index')->with('success', 'Product updated successfully.');
    }

    public function render(): View
    {
        return view('livewire.admin.products.product-edit');
    }
}
