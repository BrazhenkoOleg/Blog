<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'role' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'name.string' => 'Данные этого поля должны быть строкой',
            'email.required' => 'Это поле необходимо для заполнения',
            'email.string' => 'Данные этого поля должны быть строкой',
            'email.email' => 'Необходимо ввести email',
            'email.unique' => 'Пользователь с таким email уже существует',
            'role.required' => 'Это поле необходимо для заполнения',
            'role.integer' => 'ID выбранных прав пользователя не существует',
        ];
    }
}
