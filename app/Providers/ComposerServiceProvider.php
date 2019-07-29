<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
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
        //View::composer('home.*', function($view){
          //  $view->with('pages'=>\App\Page::get()->toTree());
        //});
        View::composer('home.*', function($view){
          $view->with('pages', \App\Page::all() );
        });
    }
}
