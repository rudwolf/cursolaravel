<?php
/**
 * Created by Rudwolf.
 * Date: 29/02/2016
 * Time: 10:22
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        view()->composer(
            'layouts.navigation.loja', 'App\Http\ViewComposers\CategoryComposer'
        );
    }
}