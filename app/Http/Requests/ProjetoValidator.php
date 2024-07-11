<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetoValidator extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'meta' => 'required|numeric|min:0',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O campo Título do Projeto é obrigatório.',
            'descricao.required' => 'O campo Descrição é obrigatório.',
            'meta.required' => 'O campo Meta é obrigatório.',
            'imagem.required' => 'O campo Imagem é obrigatório',
            
            
        ];
    }
}
