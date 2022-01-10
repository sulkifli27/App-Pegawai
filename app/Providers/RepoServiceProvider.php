<?php

namespace App\Providers;

use App\Repository\PegawaiImplement;
use App\Repository\Repository;
use App\Service\PegawaiInterfaceService;
use App\Service\PegawaiServiceImplement;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Repository::class, PegawaiImplement::class);
        $this->app->bind(PegawaiInterfaceService::class, PegawaiServiceImplement::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
