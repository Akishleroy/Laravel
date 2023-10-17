<?php

declare(strict_types=1);

namespace App\Module\Post\Commands;

use App\Module\Post\DTO\StorePostDTO;

final class CreatePostCommand
{
    public function __construct(
        public readonly StorePostDTO $DTO
    ) {
    }
}
