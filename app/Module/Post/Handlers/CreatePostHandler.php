<?php

declare(strict_types=1);

namespace App\Module\Post\Handlers;

use App\Module\Post\Commands\CreatePostCommand;
use App\Module\Post\Contracts\Repositories\CreatePostRepository;
use App\Module\Post\Events\PostCreatedEvent;
use App\Module\Post\Models\Post;

final class CreatePostHandler
{
    public function __construct(
        private readonly CreatePostRepository $repository
    ) {
    }

    public function handle(CreatePostCommand $command): void
    {
        $post              = new Post();
        $post->title       = $command->DTO->title;
        $post->description = $command->DTO->description;

        $this->repository->create($post);

        event(new PostCreatedEvent($post));
    }
}
