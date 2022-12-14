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
        Product::insert([
            [
                'category_id' => 1,
                'currency_id' => 1,
                'name'        => 'Rice',
                'price'       => 50.50,
            ],
            [
                'category_id' => 1,
                'currency_id' => 1,
                'name'        => 'Fish',
                'price'       => 120.99,
            ],
            [
                'category_id' => 1,
                'currency_id' => 1,
                'name'        => 'Milk',
                'price'       => 41,
            ],
            [
                'category_id' => 1,
                'currency_id' => 1,
                'name'        => 'Apple Juice',
                'price'       => 62.33,
            ],
            /////////
            [
                'category_id' => 2,
                'currency_id' => 1,
                'name'        => 'Collar',
                'price'       => 400.50,
            ],
            [
                'category_id' => 2,
                'currency_id' => 1,
                'name'        => 'Royal Feed',
                'price'       => 80.91,
            ],
            [
                'category_id' => 2,
                'currency_id' => 1,
                'name'        => 'Toy ball',
                'price'       => 104,
            ],
            [
                'category_id' => 2,
                'currency_id' => 1,
                'name'        => 'Vitamins',
                'price'       => 243.25,
            ],
            /////////
            [
                'category_id' => 3,
                'currency_id' => 1,
                'name'        => 'Laptop',
                'price'       => 10050.00,
            ],
            [
                'category_id' => 3,
                'currency_id' => 1,
                'name'        => 'Microwave',
                'price'       => 4120.99,
            ],
            [
                'category_id' => 3,
                'currency_id' => 1,
                'name'        => 'Cellphone',
                'price'       => 7777.00,
            ],
            [
                'category_id' => 3,
                'currency_id' => 1,
                'name'        => 'Clock',
                'price'       => 1500.80,
            ],
            /////////
            [
                'category_id' => 4,
                'currency_id' => 1,
                'name'        => 'T-shirt',
                'price'       => 200.00,
            ],
            [
                'category_id' => 4,
                'currency_id' => 1,
                'name'        => 'Jeans',
                'price'       => 999.99,
            ],
            [
                'category_id' => 4,
                'currency_id' => 1,
                'name'        => 'Jacket',
                'price'       => 3777.00,
            ],
            [
                'category_id' => 4,
                'currency_id' => 1,
                'name'        => 'Sneakers',
                'price'       => 3500.80,
            ],
        ]);
    }
}
