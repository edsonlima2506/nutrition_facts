<?php

namespace App\Providers;

use App\Http\Controllers\Admin\AdminController as AdminAdminController;
use Backpack\CRUD\app\Http\Controllers\AdminController;
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
        $this->app->bind(AdminController::class, AdminAdminController::class);
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
