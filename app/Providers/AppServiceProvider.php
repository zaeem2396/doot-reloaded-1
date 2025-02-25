<?php

namespace App\Providers;

use App\Models\AppSettings;
use App\Models\Category;
use App\Repositories\AppSettingsRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryRepository::class, function ($app) {
            return new CategoryRepository(new Category());
        });
        $this->app->bind(AppSettingsRepository::class, function ($app) {
            return new AppSettingsRepository(new AppSettings());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
