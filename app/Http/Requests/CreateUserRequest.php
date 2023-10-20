<?php

namespace App\Http\Requests;

use App\Rules\PhoneRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
        return[
            'name' => ['bail', 'required', 'string', 'between:2,20'],
            'lastname' => ['bail', 'required', 'string', 'min:2'],
            'birthday' => ['required', 'date'],
            'email' => ['required'],
            'phoneNumber' => ['required',new PhoneRule],
            'gender' => ['required','in:male,female'],
        ];
    }
}
