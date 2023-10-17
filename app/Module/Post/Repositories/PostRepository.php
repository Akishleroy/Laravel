<?php

declare(strict_types=1);

namespace App\Module\Post\Repositories;

use App\Module\Post\Contracts\Repositories\CreatePostRepository;
use App\Module\Post\Models\Post;
use Throwable;

final class PostRepository implements CreatePostRepository
{
    /**
     * @throws Throwable
     */
    public function create(Post $post): void
    {
        $post->saveOrFail();
    }
}
