<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'id'   => 1,
                'name' => 'Food'
            ],
            [
                'id'   => 2,
                'name' => 'Pet products'
            ],
            [
                'id'   => 3,
                'name' => 'Electronics'
            ],
            [
                'id'   => 4,
                'name' => 'Clothing'
            ]
        ]);
    }
}
