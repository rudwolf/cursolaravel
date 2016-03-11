<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class ProductsController extends Controller
{
    public function details($url)
    {
        $product = Product::where('url', $url)->first();
        return view('products.details', ['product'=>$product]);
    }

    public function index()
    {
        $products = Product::all();
        return view('products.home', ['products' => $products]);
    }
}
