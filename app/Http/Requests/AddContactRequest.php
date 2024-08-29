<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AddContactRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required_without:phone', 'string', 'lowercase', 'email', 'max:255'],
            'phone' => ['required_without:email','numeric','min:10'],
            'class' => ['required_without:message', 'max:255'],
            'message' => ['required_without:class', 'max:255'],
        ];

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
