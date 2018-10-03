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
		
    }
}
