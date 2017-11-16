<?php

namespace App\Providers;

use App\InputForm\InputForm;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class InputFormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind("inputform",function(){
            return new InputForm();
        });
    }
}
