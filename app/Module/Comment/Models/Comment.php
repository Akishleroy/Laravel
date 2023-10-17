<?php

declare(strict_types=1);

namespace App\Module\Comment\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $description
 * @property int $likes
 * @property int $post_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
final class Comment extends Model
{

}
