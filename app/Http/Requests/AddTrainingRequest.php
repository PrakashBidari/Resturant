<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AddTrainingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'title' => ['required', 'max:200'],
            'category' => ['required', 'max:200'],

            'description' => ['required'],
            'image' => ['nullable', 'mimes:jpg,jpeg,png', 'max:2048'],
            'alt_text' => ['nullable'],

            'meta_title' => ['nullable', 'max:60'],
            'meta_description' => ['nullable', 'max:160']
        ];

        if ($this->isMethod('put')) {
            $rules['slug'] = ['required', Rule::unique('trainings')->ignore($this->training)];
        } else {
            $rules['slug'] = ['required', 'max:200', 'unique:trainings'];
        }
        return $rules;
    }
}
