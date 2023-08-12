<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|max:150',
            'password' => 'required|string|min:5|max:200',        
        ];
    }

    public function messages(): array{
        return [
            'email.required' => 'Email é de preenchimento obrigatório',
            'email.email' => 'Insira um email válido',
            'password.required' => 'Senha é de preenchimento obrigatório',
            'password.min' => 'A senha deve possuir no mínimo 5 caracteres',
        ];
    }
}