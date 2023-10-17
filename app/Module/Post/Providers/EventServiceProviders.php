<?php

declare(strict_types=1);

namespace App\Module\Post\Providers;

use App\Module\Comment\Listeners\CreateFirstCommentListener;
use App\Module\Post\Events\PostCreatedEvent;
use App\Providers\EventServiceProvider;

final class EventServiceProviders extends EventServiceProvider
{
    protected $listen = [
        PostCreatedEvent::class => [
            CreateFirstCommentListener::class,
        ]
    ];
}
