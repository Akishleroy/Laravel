<?php

declare(strict_types=1);

namespace App\Module\Comment\Listeners;

use App\Module\Comment\Models\Comment;
use App\Module\Post\Events\PostCreatedEvent;

final class CreateFirstCommentListener
{
    public function handle(PostCreatedEvent $event): void
    {
        $comment = new Comment();

        $comment->description = 'Пост был создан!';
        $comment->post_id = $event->post->id;

        $comment->saveOrFail();
    }
}
