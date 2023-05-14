<?php

namespace App\Providers;

use Illuminate\Queue\Failed\PrunableFailedJobProvider;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends  ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function register_project(): void{

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
