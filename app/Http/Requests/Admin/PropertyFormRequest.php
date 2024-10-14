<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>['required','min:4'],
            'description'=>['required','min:4'],
            'surface'=>['required','integer','min:10'],
            'rooms'=>['required','integer','min:1'],
            'bedrooms'=>['required','integer','min:1'],
            'floor'=>['required','integer','min:0'],
            'price'=>['required','integer','min:0'],
            'address'=>['required','min:4'],
            'sold'=>['required','boolean'],
        ];
    }
}
