<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreOrderRequest;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        return Order::all();
    }
    
    public function show($order_id) {
       return Order::with('products')->find($order_id);
    }

    public function store(StoreOrderRequest $request) {
        $order = Order::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'phone' => $request->phone
        ]);

        $products = [];
        foreach($request->products as $product) {
            $products[$product['product_id']] = ['quantity' => $product['quantity']];
        }
        return $order;
    }
}
