<?php

namespace App\Providers;

use App\Http\Repositories\CityRepo;
use App\Http\Repositories\CityRepoInterface;
use App\Http\Repositories\CustomerRepository;
use App\Http\Repositories\CustomerRepositoryInterface;
use App\Http\Services\CityService;
use App\Http\Services\CityServiceInterface;
use App\Http\Services\CustomerService;
use App\Http\Services\CustomerServiceInterface;
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
        $this->app->singleton(CustomerServiceInterface::class,CustomerService::class);
        $this->app->singleton(CustomerRepositoryInterface::class,CustomerRepository::class);
        $this->app->singleton(CityRepoInterface::class,CityRepo::class);
        $this->app->singleton(CityServiceInterface::class,CityService::class);
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
