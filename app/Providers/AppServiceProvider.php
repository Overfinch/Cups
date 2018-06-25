<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use TCG\Voyager\Models\Page;
use App\Category;
use App\Slide;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::share('my_menu', menu('test', 'my_menu'));
        View::share('pages_menu', Page::all());
        View::share('categories', Category::with('children')->where('parent_id',null)->get());
        View::share('slides', Slide::all());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
