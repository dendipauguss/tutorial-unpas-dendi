<?php

namespace App\Providers;

// use Illuminate\Contracts\Pagination\Paginator;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
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
        Paginator::useBootstrap();

        // Fitur Gates ini bisa dipakai dimana saja tidak hanya di routes web.php seperti Middleware
        Gate::define('admin', function (User $user) {
            return $user->user_role === 'admin';
        });
    }
}