<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Laptop',
            'description' => 'A powerful laptop for work and entertainment.',
            'price' => 999.99,
        ]);

        Product::create([
            'name' => 'Smartphone',
            'description' => 'A sleek and stylish smartphone with advanced features.',
            'price' => 599.99,
        ]);
    }
}
