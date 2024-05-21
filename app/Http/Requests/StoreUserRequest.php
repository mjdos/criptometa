<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'usuario' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|string|min:4',
        ];
    }

    public function messages()
    {
        return [
            'usuario.required' => 'O nome de usuário é obrigatório.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'O e-mail deve ser um endereço de e-mail válido.',
            'email.unique' => 'Este e-mail já está registrado.',
            'senha.required' => 'A senha é obrigatória.',
            'senha.min' => 'A senha deve ter pelo menos 4 caracteres.',
        ];
    }
}

