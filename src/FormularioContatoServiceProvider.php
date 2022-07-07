<?php

namespace Rhyltonn\FormularioContato;

use Illuminate\Support\ServiceProvider;

class FormularioContatoServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'formulario-contato');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/formulario-contato'),
        ], 'formulario-contato-views');
    }

    public function register()
    {

    }
}