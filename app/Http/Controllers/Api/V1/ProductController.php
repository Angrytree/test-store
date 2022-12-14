<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreProductRequest;
use App\Models\Currency;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use function PHPUnit\Framework\returnSelf;

class ProductController extends Controller
{
    public function index(Request $request) {
        $products = Product::all();
        if($request->currency) {
            $currency = Currency::where('name', $request->currency)->first();
            
            if(!is_null($currency)) {
                foreach($products as $product) {
                    $product->price = $this->currencyRound($product->price, $currency->rate);
                }
            }  
        }

        return $products;
    }
    
    public function show($product_id, Request $request) {
        $product = Product::find($product_id);
        if($request->currency) {
            $currency = Currency::where('name', $request->currency)->first();
            
            if(!is_null($currency)) {
                $product->price = $this->currencyRound($product->price, $currency->rate);
            }  
        }
        return $product;
    }

    public function store(StoreProductRequest $request) {
        return Product::create([
            'category_id' => $request->category_id,
            'currency_id' => $request->currency_id,
            'price' => $request->price,
            'name' => $request->name,
        ]);
    }

    private function currencyRound($price, $rate) {
        $value = $price/$rate;
        $decimalPlaces = 3 - floor(log10($value)) - 1;
        return round($value, $decimalPlaces);
    }
}
