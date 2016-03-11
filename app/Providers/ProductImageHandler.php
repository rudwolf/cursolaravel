<?php

namespace App\Providers;

use App\Product;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

class ProductImageHandler extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Product::deleting(function ($product) {
            if (!empty($product->image))
                $this->deleteImage($product->image);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

    public function deleteImage($filename) {
        $pathSmall = storage_path(). '/images/products/thumbs/'. $filename;
        $pathBig = storage_path(). '/images/products/'. $filename;

        if(File::exists($pathSmall)) File::delete($pathSmall);
        if(File::exists($pathBig)) File::delete($pathBig);
    }
}
