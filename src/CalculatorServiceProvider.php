<?php

namespace okw\calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
		// include __DIR__.'/Plus.php';
		$this->app->bind('calculator', Calculator::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
		// $this->app->make('okw\calculator\Plus');
		//Dynamically add IP2LocationLaravel alias
		// AliasLoader::getInstance()->alias('Calculator', 'okw\calculator\Facade\Calculator');
    }
}
