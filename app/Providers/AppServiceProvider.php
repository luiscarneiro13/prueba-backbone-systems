<?php

namespace App\Providers;

use Illuminate\Database\Events\MigrationsStarted;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Events\MigrationsEnded;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
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
        
    }

    /**
     * Carga los Helpers personalizados.
     */
    protected function loadHelpers()
    {
        if (config('app.env') === 'production') {
            Event::listen(MigrationsStarted::class, function () {
                DB::statement('SET SESSION sql_require_primary_key=0');
            });
            Event::listen(MigrationsEnded::class, function () {
                DB::statement('SET SESSION sql_require_primary_key=1');
            });
        }
        
        foreach (glob(__DIR__ . '/../Helpers/*.php') as $fileName) {
            require_once $fileName;
        }
    }
}
