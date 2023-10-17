<?php

declare(strict_types=1);

namespace App\Module\Post\Providers;

use App\Module\Post\Commands\CreatePostCommand;
use App\Module\Post\Handlers\CreatePostHandler;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\ServiceProvider;

final class CommandBusServiceProvider extends ServiceProvider
{
    private array $maps = [
        CreatePostCommand::class => CreatePostHandler::class
    ];

    public function boot(): void
    {
        $this->registerHandlers();
    }

    public function registerHandlers(): void
    {
        Bus::map($this->maps);
    }
}
