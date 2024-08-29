<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AddBlogRequest extends FormRequest
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
            'author' => ['required', 'max:200'],

            'description' => ['required'],
            'image' => ['nullable', 'mimes:jpg,jpeg,png', 'max:2048'],
            'alt_text' => ['nullable'],

            'meta_title' => ['nullable', 'max:60'],
            'meta_description' => ['nullable', 'max:160']
        ];

        if ($this->isMethod('put')) {
            $rules['slug'] = ['required', Rule::unique('blogs')->ignore($this->blog)];
        } else {
            $rules['slug'] = ['required', 'max:200', 'unique:blogs'];
        }
        return $rules;
    }
}
