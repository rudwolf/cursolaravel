<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Category;

/**
 * Created by Rudwolf
 * Date: 29/02/2016
 * Time: 10:01
 */
class CategoryComposer
{
    protected $categories;

    public function __construct(Category $categories)
    {
        $this->categories = $categories;
    }

    public function compose(View $view) {
        $view->with('categories', $this->categories->lists('title','id'));
    }
}