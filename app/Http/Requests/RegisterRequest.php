<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'password' => 'required|string|min:5|max:255',
            'password_confirmation' => 'required|same:password',
            'gender' => 'required|string|max:50',
            'birth_time' => 'required|date',
            'fullname' => '',
        ];
    }

    public function messages(): array {
        return [
            'email.required' => 'Email é de preenchimento obrigatório',
            'email.email' => 'Insira um email válido',

            'firstname.required' => 'Nome é um campo obrigatório',
            'firstname.string' => 'Insira um nome válido',

            'surname.required' => 'Nome é um campo obrigatório',
            'surname.string' => 'Insira um nome válido',

            'password.required' => 'Senha é de preenchimento obrigatório',
            'password.min' => 'A senha deve possuir no mínimo 5 caracteres',

            'password_confirmation.required' => 'Senha é de preenchimento obrigatório',
            'password_confirmation.same' => 'As senhas fornecidas não coincidem',

            'gender.required' => 'Gênero é um campo obrigatório',
            'gender.string' => 'Selecione um gênero válido',

            'birth_time.required' => 'Data de nascimento é um campo válido',
            'birth_time.date' => 'Insira uma data válida' ,

        ];
    }
}