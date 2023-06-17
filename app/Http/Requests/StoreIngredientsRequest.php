<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIngredientsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'description' => 'string',
            'title' => 'string',
            'quantity' => 'numeric',
            'name' => 'string',
            'link' => 'string',
            'id' => 'numeric',
            'imgUrl' => 'string',

        ];
    }
}
