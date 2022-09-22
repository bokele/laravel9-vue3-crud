<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title' => 'required',
            'content' => 'required',
            'category_id' => ['required', 'exists:categories,id']
        ];
    }

    public function attributes()
    {
        return ['category_id' => 'category'];
    }
}
