<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAddressController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Obtém o usuário autenticado
        $usuario = User::find($user->id);
        $enderecos = UserAddress::where('user_id', $usuario->id)->get();
        $estados = State::all();
        $cidades = City::all();
        return view('site.usuario.address', compact('usuario', 'enderecos', 'estados', 'cidades'));
    }

    public function update(Request $request)
    {
        $usuario = User::findOrFail($request->id);

            // Validação do formulário de endereço
            $request->validate([
                'estado_id' => 'required|exists:states,id',
                'cidade_id' => 'required|exists:cities,id',
                'logradouro' => 'required|string|max:255',
                'numero' => 'required|string|max:10',
                'complemento' => 'nullable|string|max:255',
                'bairro' => 'required|string|max:255',
                'cep' => 'required|string|size:9|regex:/^\d{5}-\d{3}$/',
            ], [
                'estado_id.required' => 'Você deve escolher um estado!',
                'estado_id.exists' => 'O estado selecionado é inválido!',
                'cidade_id.required' => 'Você deve escolher uma cidade!',
                'cidade_id.exists' => 'A cidade selecionada é inválida!',
                'logradouro.required' => 'O campo logradouro é obrigatório!',
                'logradouro.max' => 'O campo logradouro não pode ter mais de 255 caracteres!',
                'numero.required' => 'O campo número é obrigatório!',
                'numero.max' => 'O campo número não pode ter mais de 10 caracteres!',
                'complemento.max' => 'O campo complemento não pode ter mais de 255 caracteres!',
                'bairro.required' => 'O campo bairro é obrigatório!',
                'bairro.max' => 'O campo bairro não pode ter mais de 255 caracteres!',
                'cep.required' => 'O campo CEP é obrigatório!',
                'cep.size' => 'O campo CEP deve ter exatamente 9 caracteres!',
                'cep.regex' => 'O formato do CEP é inválido!',
            ]);
        // Verifica se o usuário já possui um endereço
        $endereco = $usuario->address;

        if ($endereco) {
            // Atualiza as informações de endereço do usuário
            $endereco->estado_id = $request->estado_id;
            $endereco->cidade_id = $request->cidade_id;
            $endereco->logradouro = $request->logradouro;
            $endereco->numero = $request->numero;
            $endereco->complemento = $request->complemento;
            $endereco->bairro = $request->bairro;
            $endereco->cep = $request->cep;
            $endereco->save();
            return redirect()->route('usuario_endereco.index')->with('status', 'Endereço atualizado com sucesso!');
        } else {
            // Cria um novo endereço para o usuário
            UserAddress::create([
                'user_id' => $usuario->id, // Certifique-se de passar o user_id
                'estado_id' => $request->estado_id,
                'cidade_id' => $request->cidade_id,
                'logradouro' => $request->logradouro,
                'numero' => $request->numero,
                'complemento' => $request->complemento,
                'bairro' => $request->bairro,
                'cep' => $request->cep,
            ]);
            return redirect()->route('usuario_endereco.index')->with('status', 'Endereço cadastrado com sucesso!');
        }

      
    }
}
