<?php

declare(strict_types=1);

namespace App\Module\Comment\Resources;

use App\Http\Resources\BaseJsonResource;
use App\Module\Comment\Models\Comment;

/**
 * @property Comment $resource
 */
final class CommentResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'description' => $this->resource->description,
            'likes' => $this->resource->likes,
        ];
    }
}
