<?php

namespace Inicia\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Inicia\Propierty;
use Inicia\User;
use Inicia\Gallery;
use Inicia\Social;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->view_composer_all();
    }

    /**
     * view_composer_all
     *
     * @return extienda data a las vistas
     */
    public function view_composer_all()
    {
        view()->composer('*', function ($view) {
            $view->with('users', User::count());
            $view->with('propiertys', Propierty::count());
            $view->with('gallery', Gallery::orderBy('id', 'DESC')->limit(10)->get());
            $view->with('socials', Social::all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
