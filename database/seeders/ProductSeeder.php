<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'Description of Product 1',
                'reference' => Str::uuid()->toString(),
                'price' => 10.00,
                'images' => 'assets/img/shop/6.png|assets/img/shop/7.png',
                'category_id' => Category::all()[0]->id,
                'user_id' => User::firstWhere('email', 'admin@example.com')->id,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);

            unset($product);
        }
    }
}
