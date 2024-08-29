<?php

namespace App\Providers;

use App\Models\Blog;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $blogs = Blog::latest()->take(4)->get();
        View::share('blogs', $blogs);
    }
}
