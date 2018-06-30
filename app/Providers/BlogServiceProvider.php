<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Category;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mainMenu();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function mainMenu()
    {
        View::composer('layouts.main_menu', function ($view) {
            $view->with(
                'categories',
                Category::where('parent_id', 0)->where('status', 1)->get()
            );
        });
    }
}
