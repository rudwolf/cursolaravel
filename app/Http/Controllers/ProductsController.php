<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Http\Controllers\CrudController;

class ProductsController extends CrudController
{
    protected $model = '\App\Product';
    protected $path = 'products';

    public function __construct(ProductsRequest $request)
    {

    }

    /*public function(Request $request, $id)
    {
        $product = $this->getModel()->find($id);

        if ($request->isMethod('post')) {
            $product->categories->sync($request->input('categories'));
            return redirect()->route('products.index');
        }

        $categories = |Db::table('categories')->lists('title','id');
    }*/
}
