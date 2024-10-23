<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
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
            'email' => [
                'required',
                'email',
                // 'unique:users,email,
                Rule::unique('users', 'email')->ignore($this->user, 'id')
            ],
            'password' => [
                'required',
                'min:6',
                'max:12'
            ],
            'permission' => 'string|required',
            'birthday' => 'string|required|max:8',
            'phonecel' => 'string|required|max:11',
            'whatsapp' => 'string|required|max:11',
            'telegram' => 'string|required|max:11',
            'cpf' => 'string|required|max:11',
            'rg' => 'string|required|max:12',
            'cep' => 'string|required|max:8',
            'logradouro' => 'string|required|max:180',
            'numero' => 'string|max:5',
            'complemento' => 'string|max:100',
            'unidade' => 'string|max:5',
            'bairro' => 'string|max:250',
            'localidade' => 'string|max:50',
            'uf' => 'string|max:2',
            'estado' => 'string|max:25',
            'regiao' => 'string|max:15',
            'ibge' => 'string|max:8',
            'gia' => 'string|max:8',
            'ddd' => 'string|max:2',
            'siafi' => 'string|max:8'

        ];
    }
}
