<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $arrayRepository = [
            'Settings/Icons/Icons',
        ];

        foreach ($arrayRepository as $key => $repository) {
            $this->app->bind(
                'App/Repositories/' . $repository . 'RepositoryInterface',
                'App/Repositories/' . $repository . 'EloquentRepository');
        }
    }
}
