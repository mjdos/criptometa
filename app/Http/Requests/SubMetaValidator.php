<?php

namespace App\Http\Requests;

use Illuminate\Validation\Validator;
use App\Models\Submeta;

use Illuminate\Foundation\Http\FormRequest;

class SubMetaValidator extends FormRequest
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
    public function rules()
    {
        return [
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'percentual' => 'required|numeric|min:0|max:100',
            'projeto_id' => 'required|exists:projects,id',
        ];

        
    }
    
    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome não pode ter mais que 255 caracteres.',
            'descricao.required' => 'O campo descrição é obrigatório.',
            'descricao.string' => 'O campo descrição deve ser uma string.',
            'percentual.required' => 'O campo percentual é obrigatório.',
            'percentual.numeric' => 'O campo percentual deve ser um número.',
            'percentual.min' => 'O campo percentual deve ser no mínimo 0.',
            'percentual.max' => 'O campo percentual não pode ser maior que 100.',
            'projeto_id.required' => 'O campo ID do projeto é obrigatório.',
            'projeto_id.exists' => 'O campo ID do projeto deve existir na tabela correspondente.',
            'percentual.custom_exceed' => 'A soma dos percentuais no projeto não pode exceder 100.',

        ];
    }

    public function attributes()
    {
        return [
            'nome' => 'nome',
            'descricao' => 'descrição',
            'percentual' => 'percentual',
            'projeto_id' => 'ID do projeto',
        ];
    }

    protected function withValidator(Validator $validator)
    {
        $validator->after(function ($validator) {
            $projetoId = $this->input('projeto_id');
            $percentual = $this->input('percentual');

            $totalPercentual = Submeta::where('projeto_id', $projetoId)->sum('percentual');

            if (($totalPercentual + $percentual) >= 100) {
                $validator->errors()->add('percentual', 'A soma dos percentuais no projeto não pode exceder 100.');
            }
        });
    }
}