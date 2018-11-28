<?php 

namespace ActivismBE\Artisan;

use Illuminate\Support\ServiceProvider; 
use ActivismBE\Artisan\Console\Commands\MakeUser;

/**
 * Class MakeUserServiceProvider 
 * 
 * @package ActivismBE\Artisan
 */
class MakeUserServiceProvider extends ServiceProvider 
{
   /**
    * Register the application services. 
    *
    * @return void
    */ 
    public function register(): void 
    {
        $this->app->singleton('activismBE.artisan.make:user', function ($app) {
            return $app->make(MakeUser::class);
        });

        $this->commands('activismBE.artisan.make:user');
    }
}