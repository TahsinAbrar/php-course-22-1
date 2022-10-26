<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255|alpha_dash',
            'image' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Name is required",
            "name.min" => "Name value should be greater than 3 chars"
        ];
    }
}
