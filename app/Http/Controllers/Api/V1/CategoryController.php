<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return Category::all();
    }
    
    public function show($category_id) {
       return Category::find($category_id);
    }

    public function store(StoreCategoryRequest $request) {
        return Category::create(['name' => $request->name]);
    }
}
