<?php

namespace App\Providers;

use App\Interfaces\Admin\BrandInterface;
use App\Repositories\Admin\BrandRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BrandInterface::class,BrandRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
