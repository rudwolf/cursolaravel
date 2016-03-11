<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;
use App\Http\Controllers\CrudController;

class ProductsController extends CrudController
{
    protected $model = '\App\Product';
    protected $path = 'products';
    protected $route_base_name = 'admin.products';

    public function __construct(ProductsRequest $request)
    {

    }

    public function categories(Request $request, $id)
    {
        $product = $this->getModel()->find($id);

        if ($request->isMethod('post')) {
            $product->categories()->sync($request->input('categories'));
            return redirect()->route('admin.products.index');
        }

        $categories = \DB::table('categories')->lists('title','id');
        $checked = $product->categories->lists('title','id');
        return view(
            'products.categories',
            compact('product','checked','categories')
        );
    }


}
