<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'category_id' => '1',
            'title' => "Product 1",
            'description' =>"Short description",
            'cost_price' => '12',
            'price' => '20'
        ]);
    }
}