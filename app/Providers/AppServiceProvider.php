<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\SocialMediaServiceInterface;
use App\Services\LinkedInServices;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //here you can also use app() instead $this->app
        $this->app->bind(SocialMediaServiceInterface::class, function(){
            return new LinkedInServices;
        });
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
}
