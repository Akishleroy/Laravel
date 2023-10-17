<?php

namespace App\Module\Post\Requests;

use App\Module\Post\DTO\StorePostDTO;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
              'title'       => ['required', 'string'],
              'description' => ['required', 'string']
        ];
    }

    public function messages(): array
    {
        return [
              'title.required'       => 'Нет тайтла',
              'description.required' => 'нет description'
        ];
    }

    public function getDTO(): StorePostDTO
    {
        return StorePostDTO::fromRequest($this);
    }
}
