<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $product = new App\Product;
        $product->name = 'Produto A';
        $product->price = '24.99';
        $product->weight = '300';
        $product->size = '2x2x10';
        $product->save();

        $product = new App\Product;
        $product->name = 'Produto B';
        $product->price = '88.00';
        $product->weight = '1100';
        $product->size = '3x10x30';
        $product->save();

    }
}
