<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubMetaValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'nome' => 'required|string|max:255',
            'projeto_id' => 'required|exists:projects,id', // Verifica se o ID do projeto existe
        ];
    }
}
