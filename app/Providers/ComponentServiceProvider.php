<?php

namespace App\Providers;

use App\View\Components\Header;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


class ComponentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('header', Header::class);
        Blade::component('footer', Footer::class);
    }
}