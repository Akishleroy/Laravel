<?php

declare(strict_types=1);

namespace App\Module\Post\DTO;

use App\Module\Post\Requests\StorePostRequest;

final class StorePostDTO
{
    public string $title;
    public string $description;

    public static function fromRequest(StorePostRequest $request): self
    {
        $self = new self();

        $self->title       = $request->input('title');
        $self->description = $request->input('description');

        return $self;
    }
}
