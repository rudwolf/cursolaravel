<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function listProducts($category_id) {
        $category = Category::find($category_id);
        return view ('categories.list_products', ['category'=>$category]);
    }
}
