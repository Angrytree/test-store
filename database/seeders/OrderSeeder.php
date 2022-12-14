<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $orders = Order::factory(25)->create();
        $orders->each(function($order) use ($products) {
            $toAttached = [];
            $products->random(rand(1,3))->pluck('id')->each(function($product_id) use(&$toAttached) {
                $toAttached[$product_id] = ['quantity' => rand(1,3)];
            });
            $order->products()->attach($toAttached);
        });
    }
}
