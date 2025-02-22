<?php

namespace App\Providers;

use App\Models\Category;
use App\Services\ApiService;
use Exception;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ApiService::class, function ($app) {
            return new ApiService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try{
            $categories = Category::select('id', 'c_name', 'c_slug')->get();
        } catch (Exception $e){
            $categories = [];
            dump($e->getMessage());
        }
        
        view() -> share('categories', $categories);
    }
}
