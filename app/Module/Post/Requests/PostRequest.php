<?php

namespace App\Module\Post\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules(): array
    {
       return [
            'limit' => 'nullable',
            'page' => 'nullable',
            'like' => 'nullable',
            'description' => 'nullable'
       ];
    }
}
