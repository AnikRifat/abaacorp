<?php

namespace App\Providers;

use App\Models\Portfolio;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Website;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $content = Website::find('1');
        View::share('content', $content);

        $portfolio = Portfolio::all();
        View::share('portfolio', $portfolio);
    }
}