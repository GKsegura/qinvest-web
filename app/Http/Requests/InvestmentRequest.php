<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvestmentRequest extends FormRequest
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
            'cod_investment' => 'required|string|min:5|max:5',
            'name_investment' => 'required|string|max:255',
        ];
    }

    public function messages(): array {
        return [
            'cod_investment.required' => 'Preencha o código do investimento',
            //'email.email' => 'Insira um email válido',

            'name_investment.required' => 'Nome é um campo obrigatório',
            //'firstname.string' => 'Insira um nome válido',
        ];
    }
}