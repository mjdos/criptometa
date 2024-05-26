<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user(); // Obtém o usuário autenticado
        $usuario = User::find($user->id);
       
        return view('site.usuario.index', compact('usuario')); // Retorna a view com o usuário
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        return view('site.usuario.edit', compact('usuario'));
    }

    public function update(Request $request)
    {
        $usuario = User::find($request->id);
    
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $usuario->id,
            'password' => 'nullable|string|min:8|confirmed',
            'photo' => 'nullable|image|max:2048', 
        ]);
    
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->telefone = $request->phone;
    
        if ($request->filled('password')) {
            $usuario->password = Hash::make($request->password);
        }
    
        // Verifica se foi feito o upload de uma nova foto
        if ($request->hasFile('photo')) {
            // Armazena a foto no armazenamento do Laravel
            $photoPath = $request->file('photo')->store('user_photos', 'public');
    
            // Atualiza o caminho da foto do usuário no banco de dados
            $usuario->photo = $photoPath;
        }
    
        $usuario->save();
    
        return redirect()->route('usuario.index')->with('status', 'Perfil atualizado com sucesso!');
    }
}
