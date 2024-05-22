<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Banner;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        View::composer('layouts.app', function ($view) {
            $bannerImages = Banner::all();
            $view->with('bannerImages', $bannerImages);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
