<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'lastname' => 'required|string',
            'address' => 'required|string',
            'biceps' => 'nullable|integer',
            'triceps' => 'nullable|integer',
            'arm_5' => 'nullable|integer',
            'mobilenumber' => 'required|string',
            'jerks' => 'nullable|integer',
            'bout' => 'nullable|integer',
            'leg_5' => 'nullable|integer',
            'date_of_birth' => 'required|date',
            'weight' => 'required|numeric',
            'image' => 'required|image',
            'start_date_of_program' => 'required|date',
            'fat_content' => 'required|numeric',
            'oxydation_type' => 'nullable|string',
            'fat_content_kg' => 'required|numeric',
            'starting_weight' => 'required|numeric',
            'major_mass' => 'required|numeric',

        ];
    }
}
