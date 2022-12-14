<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{    
    protected $fillable = [
        'category_id',
        'currency_id',
        'name',
        'price'
    ];


    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class, 'order_products');
    }
}
