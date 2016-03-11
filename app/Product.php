<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['title', 'body', 'value', 'qtd', 'url', 'image'];

    public function setUrlAttribute($value)
    {
        if ($value == '')
            $value = $this->attributes['title'];
        $this->attributes['url'] = str_slug($value);
    }

    public function setImageAttribute($value) {
        if($value) {
            $image = $value;
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // saving thumb
            $pathSmall = storage_path(). '/images/products/thumbs/'. $filename;
            Image::make($image->getRealPath())->resize(200, 200)->save($pathSmall);

            // saving big image
            $pathBig = storage_path(). '/images/products/'. $filename;
            Image::make($image->getRealPath())->resize(600, 600)->save($pathBig);

            $this->attributes['image'] = $filename;
        }
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
