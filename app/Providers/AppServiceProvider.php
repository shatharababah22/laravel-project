<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\AbstractPaginator;
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
    public function boot(){
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();

        Paginator::defaultView('view-name');

        Paginator::defaultSimpleView('view-name');
    
        Paginator::useBootstrap(); //https://laravel.com/docs/8.x/pagination#using-bootstrap
    }
}
