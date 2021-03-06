<?php

namespace App\Providers;

use App\Repositories\AdminUserRepositoryInterface;
use App\Repositories\Eloquent\AdminUserRepository;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(AdminUserRepositoryInterface::class, AdminUserRepository::class);
    }
}
