<?php

namespace App\Providers;

use App\Service\Interfaces\ValidateUsersRequestsServiceInterface;
use App\Service\ValidateUsersRequestsService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            ValidateUsersRequestsServiceInterface::class,
            ValidateUsersRequestsService::class,
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
