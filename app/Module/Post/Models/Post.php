<?php

namespace App\Module\Post\Models;

use App\Module\Comment\Models\Comment;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $likes
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property-read Comment $comments
 */
class Post extends Model
{
    use HasFactory;

    public function comments(): HasOne
    {
        return $this->hasOne(Comment::class, 'post_id');
    }
}
