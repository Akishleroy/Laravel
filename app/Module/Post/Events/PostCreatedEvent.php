<?php

declare(strict_types=1);

namespace App\Module\Post\Events;

use App\Module\Post\Models\Post;

final class PostCreatedEvent
{
    public function __construct(
        public readonly Post $post
    ) {
    }
}
