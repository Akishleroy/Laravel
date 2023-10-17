<?php

namespace App\Module\Post\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\MessageResource;
use App\Module\Post\Commands\CreatePostCommand;
use App\Module\Post\Models\Post;
use App\Module\Post\Requests\PostRequest;
use App\Module\Post\Requests\StorePostRequest;
use App\Module\Post\Requests\UpdatePostRequest;
use App\Module\Post\Resources\ShowPostResource;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Throwable;

class PostController extends Controller
{
    public function store(StorePostRequest $request): MessageResource
    {
        dispatch(new CreatePostCommand(
            $request->getDTO()
        ));

        return (new MessageResource(null))
            ->setMessage('Пост успешно создан!')
            ->setCode(200);
    }

    /**
     * @throws Throwable
     */
    public function show(int $id): ShowPostResource
    {
        return new ShowPostResource(
            Post::query()
                ->with(['comments'])
                ->where('id', $id)
                ->first()
        );
    }

    /**
     * @throws Throwable
     */
    public function index(PostRequest $request)
    {
        $limit = $request->input('limit', 5);
        $page = $request->input('page', 1);
        $likes =$request->input('likes');
        $title =$request->input('title');

        $post = Post::query()
            ->when(
                $likes,
                fn(Builder $builder) => $builder->where('likes', '>=', $likes)
            )
            ->when(
                $title,
                fn(Builder $builder) => $builder->where('title', 'like', "%$title%")
            )
            ->paginate($limit, ['*'], 'page', $page);

        return $post;
    }

    public function update(int $id,UpdatePostRequest $request)
    {
        /** @var Post $post */
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->description = $request->input('description');

        $post->saveOrFail();

        return 'Успешно изменено';
    }
}
