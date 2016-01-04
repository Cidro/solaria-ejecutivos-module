<?php

namespace Asimov\Solaria\Modules\Ejecutivos;

use Illuminate\Support\ServiceProvider;
use Route;

class EjecutivosModuleServiceProvider extends ServiceProvider{

    public function boot(){
        $this->registerRoutes();
        $this->registerViews();
        $this->publishMigrationsAndSeeds();
        $this->publishAssets();
    }

    /**
     * Registra una instancia del modulo en la aplicacion
     *
     * @return void
     */
    public function register() {
        $moduleLoader = $this->app->make('solaria.moduleloader');
        $moduleLoader->add(new Ejecutivos());
    }

    /**
     * Registra las rutas del modulo
     */
    private function registerRoutes() {
        Route::group(['middleware' => 'auth', 'namespace' => 'Asimov\Solaria\Modules\Ejecutivos\Http\Controllers'], function() {
            Route::controller('/backend/modules/ejecutivos', 'EjecutivosController');
        });
        Route::group(['namespace' => 'Asimov\Solaria\Modules\Ejecutivos\Http\Controllers'], function() {
            Route::controller('/modules/ejecutivos', 'PublicEjecutivosController');
        });
    }

    /**
     * Registra las vistas del modulo
     */
    private function registerViews() {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'moduleejecutivos');
    }

    /**
     * Publica las migraciones del modulo
     */
    private function publishMigrationsAndSeeds() {
        $this->publishes([
            __DIR__ . '/database/migrations/' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Publica los assets del modulo
     */
    private function publishAssets(){
        $this->publishes([
            __DIR__ . '/public/' => public_path('modules/ejecutivos')
        ], 'assets');
    }
}