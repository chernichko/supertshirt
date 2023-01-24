<?php

namespace App\Providers;

use App\Http\Services\BasketService;
use App\Interfaces\BasketInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BasketInterface::class, function () {
            return new BasketService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Paginator::defaultView('products.include.pagination');
    }
}
