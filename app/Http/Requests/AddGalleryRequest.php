<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AddGalleryRequest extends FormRequest
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
        // dd($this);
        $rules = [
            'title' => ['required', 'max:200'],
            'images.*' => ['image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'meta_title' => ['nullable', 'max:60'],
            'meta_description' => ['nullable', 'max:160']
        ];

        if ($this->isMethod('PUT')) {
            $rules['slug'] = ['required', Rule::unique('galleries')->ignore($this->gallery)];
            $rules['images'] = ['array', 'nullable'];
        } else {
            $rules['slug'] = ['required', 'max:200', 'unique:galleries'];
            $rules['images'] = ['array', 'required'];
        }
        return $rules;
    }

    protected function failedValidation(Validator $validator)
    {
        foreach ($validator->errors()->all() as $message) {
            toastify()->error($message);
        }
        throw new ValidationException($validator);
    }
}
