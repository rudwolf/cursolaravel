<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['title', 'body', 'value', 'qtd', 'url'];

    public function setUrlAttribute($value)
    {
        if ($value == '')
            $value = $this->attributes['title'];
        $this->attributes['url'] = str_slug($value);
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
