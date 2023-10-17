<?php

declare(strict_types=1);

namespace App\Module\Post\Resources;

use App\Http\Resources\BaseJsonResource;
use App\Module\Comment\Resources\CommentResource;
use App\Module\Post\Models\Post;

/**
 * @property Post $resource
 */
final class ShowPostResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'title' => $this->resource->title,
            'description' => $this->resource->description,
            'likes' => $this->resource->likes,
            'comments' => new CommentResource($this->resource->comments),
        ];
    }
}
