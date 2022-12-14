<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name',
    ];

    public function proructs() {
        return $this->hasMany(Product::class);
    }
}
