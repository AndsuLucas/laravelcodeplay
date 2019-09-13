<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Repository\Post\{PostRepository, ElouquentPost};
use App\Repository\Profile\{ProfileRepository, ElouquentProfile};

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PostRepository::class, ElouquentPost::class);
        $this->app->singleton(ProfileRepository::class, ElouquentProfile::class);
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
