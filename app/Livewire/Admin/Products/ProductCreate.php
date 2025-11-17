<?php

namespace App\Livewire\Admin\Products;

use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use App\Util;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductCreate extends Component
{
    use Util, WithFileUploads;

    public $categories;
    public ProductForm $form;
    public function mount()
    {
        $this->categories = Category::latest()->get();
    }

    public function save()
    {
        $this->form->store();
        return to_route('products.index')->with('success', 'Product created successfully.');
    }

    public function render(): View
    {
        return view('livewire.admin.products.product-create');
    }
}
