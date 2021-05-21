<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class AddressProvider
 * @package App\Providers
 */
class AddressProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
