<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAddressController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Obtém o usuário autenticado
        $usuario = User::find($user->id);
        $enderecos = UserAddress::where('user_id', $usuario->id)->get();
        return view('site.endereco.index', compact('usuario', 'enderecos'));
    }

    public function create($id)
    {
        $usuario = User::find($id);
        $enderecos = UserAddress::where('user_id', $usuario->id)->get();
        return view('site.endereco.create', compact('usuario', 'enderecos'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'logradouro' => 'required|string',
            'numero' => 'required|string',
            'bairro' => 'required|string',
            'cidade' => 'required|string',
            'estado_id' => 'required|exists:states,id',
            'cep' => 'required|string',
        ]);

        $user = auth()->user();

        $user->addresses()->create($request->all());

        return redirect()->route('usuario.index')->with('status', 'Endereço adicionado com sucesso!');
    }

    public function edit(UserAddress $address)
    {
        return view('user_address.edit', compact('address'));
    }

    public function update(Request $request, UserAddress $address)
    {
        $request->validate([
            'logradouro' => 'required|string',
            'numero' => 'required|string',
            'bairro' => 'required|string',
            'cidade' => 'required|string',
            'estado_id' => 'required|exists:states,id',
            'cep' => 'required|string',
        ]);

        $address->update($request->all());

        return redirect()->route('usuario.index')->with('status', 'Endereço atualizado com sucesso!');
    }

    public function destroy(UserAddress $address)
    {
        $address->delete();

        return redirect()->route('usuario.index')->with('status', 'Endereço excluído com sucesso!');
    }
}
