<?php

declare(strict_types=1);

namespace App\Module\Post\Providers;

use Illuminate\Support\ServiceProvider;

final class RegisterServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(CommandBusServiceProvider::class);
        $this->app->register(RepositoryServiceProvider::class);
        $this->app->register(EventServiceProviders::class);
    }
}
