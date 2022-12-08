<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name' => 'Bandeja Paisa',
            'image' => 'https://cdn.colombia.com/gastronomia/2011/08/02/bandeja-paisa-1616.gif',
            'description' => 'Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            'quantity' => 100,
            'price' => 10000
        ]);

        Product::create([
            'name' => 'Sancocho De Pescado',
            'image' => 'https://cdn.colombia.com/gastronomia/2011/07/28/sancocho-de-pescado-1642.gif',
            'description' => 'Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            'quantity' => 100,
            'price' => 10000
        ]);


        Product::create([
            'name' => 'Carne En Bisteck',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1ftgM7U2mEU2S7PRQqQh7T_VZ9mGK1rm9Iw&usqp=CAU',
            'description' => 'Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            'quantity' => 100,
            'price' => 10000
        ]);
    }
}
