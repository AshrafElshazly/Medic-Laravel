<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Admin
        $this->app->bind(
            'App\Http\Interfaces\Admin\AuthInterface',
            'App\Http\Repositories\Admin\AuthRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminHomeInterface',
            'App\Http\Repositories\Admin\AdminHomeRepository'
        );

        //Web
        $this->app->bind(
            'App\Http\Interfaces\Web\HomeInterface',
            'App\Http\Repositories\Web\HomeRepository'
        );
        
        $this->app->bind(
            'App\Http\Interfaces\Web\AboutInterface',
            'App\Http\Repositories\Web\AboutRepository'
        );
        
        $this->app->bind(
            'App\Http\Interfaces\Web\AppointmentInterface',
            'App\Http\Repositories\Web\AppointmentRepository'
        );
        
        $this->app->bind(
            'App\Http\Interfaces\Web\BookingInterface',
            'App\Http\Repositories\Web\BookingRepository'
        );
        
        $this->app->bind(
            'App\Http\Interfaces\Web\ContactInterface',
            'App\Http\Repositories\Web\ContactRepository'
        );
        
        $this->app->bind(
            'App\Http\Interfaces\Web\FeedbackInterface',
            'App\Http\Repositories\Web\FeedbackRepository'
        );
        
        $this->app->bind(
            'App\Http\Interfaces\Web\GalleryInterface',
            'App\Http\Repositories\Web\GalleryRepository'
        );
        
        $this->app->bind(
            'App\Http\Interfaces\Web\ServiceInterface',
            'App\Http\Repositories\Web\ServiceRepository'
        );
        
        //Api
        $this->app->bind(
            'App\Http\Interfaces\Api\AuthInterface',
            'App\Http\Repositories\Api\AuthRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
