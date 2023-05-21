<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Paginationで追加する必要あり
use Illuminate\Pagination\Paginator;


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
        //

        // Paginationで追加する必要あり
        Paginator::useBootstrap();
    }
}
