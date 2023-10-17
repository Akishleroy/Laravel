<?php

declare(strict_types=1);

namespace App\Module\Post\Providers;

use App\Module\Post\Contracts\Repositories\CreatePostRepository;
use App\Module\Post\Repositories\PostRepository;
use Illuminate\Support\ServiceProvider;

final class RepositoryServiceProvider extends ServiceProvider
{
    public $bindings = [
        CreatePostRepository::class => PostRepository::class
    ];
}
