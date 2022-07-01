<?php

namespace App\Providers;

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
        $this->loadHelpers();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Carga los Helpers personalizados.
     */
    protected function loadHelpers()
    {
        foreach (glob(__DIR__ . '/../Helpers/*.php') as $fileName) {
            require_once $fileName;
        }
    }
}
