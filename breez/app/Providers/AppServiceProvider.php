<?php

namespace App\Providers;

use App\Models\User;
use App\Mail\AddPrduct;
use App\Models\Products;
use App\Mail\WelcomeUser;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*User::created(function($user){
            Mail::to($user)->send(new WelcomeUser($user));
        });*/
    }
}

