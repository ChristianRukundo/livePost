<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationListRequest extends FormRequest
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
            'firstname' => 'required|string',
            'phone_number' => 'required|string',
            'availability' => 'required|string',
            'status' => 'required|in:In Progress, Not Done, Completed',
            'role_to_apply' => 'required|string',
            'marks' => 'required|integer|min:0|max:100',
        ];
    }
}
