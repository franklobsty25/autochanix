<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use App\StateEnum;
use App\Util;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Form;
use Livewire\WithFileUploads;

class ProductForm extends Form
{
    use Util, WithFileUploads;

    public $name, $description, $price, $discount, $tax, $state,
        $promotion_price, $stock_quantity, $category_id, $images;

    public ?Product $product;

    public function setProduct(Product $product) {
        $this->product = $product;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->discount = $product->discount;
        $this->tex = $product->tax;
        $this->state = $product->state;
        $this->promotion_price = $product->promotion_price;
        $this->stock_quantity = $product->stock_quantity;
        $this->category_id = $product->category_id;
    }

    public function store() {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|decimal:2|min:0',
            'stock_quantity' => 'required|integer|min:0',
            'promotion_price' => 'nullable|decimal:2|min:0',
            'discount' => 'nullable|integer|min:0',
            'tax' => 'nullable|integer|min:0',
            'state' => ['required', Rule::enum(StateEnum::class)],
            'category_id' => 'required|integer|exists:categories,id',
            'images.*' => 'required|mimes:jpeg,jpg,png,gif,svg,webp,avif|max:2048',
        ]);

        if ($validated['images']) {
            $imagesPath = $this->uploadMultipleImages($validated['images'], 'images/products');
        }

        $validated['images'] = $imagesPath;
        $validated['reference'] = Str::uuid()->toString();
        $validated['user_id'] = auth()->id();

        Product::create($validated);

        $this->reset();
    }

    public function update() {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|decimal:2|min:0',
            'stock_quantity' => 'required|integer|min:0',
            'promotion_price' => 'nullable|decimal:2|min:0',
            'discount' => 'nullable|integer|min:0',
            'tax' => 'nullable|integer|min:0',
            'state' => ['required', Rule::enum(StateEnum::class)],
            'category_id' => 'required|integer|exists:categories,id',
            'images.*' => 'nullable|mimes:jpeg,jpg,png,gif,svg,webp,avif|max:2048',
        ]);

        $imagesPath = null;
        if (request()->hasFile('images')) {
            $imagesPath = $this->uploadMultipleImages($validated['images'], 'images/products');
        }

        $validated['discount'] = $validated['discount'] ?? $this->product->discount;
        $validated['tax'] = $validated['tax'] ?? $this->product->tax;

        $validated['images'] = $imagesPath ?? $this->product->images;

        $this->product->update($validated);
    }
}
