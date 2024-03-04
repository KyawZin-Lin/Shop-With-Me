<?php

namespace App\Providers;

use App\Interfaces\Admin\BrandInterface;
use App\Interfaces\Admin\CategoryInterface;
use App\Interfaces\Admin\ProductInterface;
use App\Interfaces\Admin\SubCategoryInterface;
use App\Repositories\Admin\BrandRepository;
use App\Repositories\Admin\CategoryRepository;
use App\Repositories\Admin\ProductRepository;
use App\Repositories\Admin\SubCategoryRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BrandInterface::class,BrandRepository::class);
        $this->app->bind(CategoryInterface::class,CategoryRepository::class);
        $this->app->bind(SubCategoryInterface::class,SubCategoryRepository::class);
        $this->app->bind(ProductInterface::class,ProductRepository::class);



    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
