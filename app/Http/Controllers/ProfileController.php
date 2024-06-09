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

        return view('site.usuario.profile', compact('usuario')); // Retorna a view com o usuário
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        return view('site.usuario.edit', compact('usuario'));
    }

    public function update(Request $request)
    {
        try {
            $usuario = User::find($request->id);

            $mensagens = [
                'required' => 'O :attribute é obrigatório!',
                'nome.min' => 'É necessário no mínimo 5 caracteres no nome!',
                'email.email' => 'Digite um email válido!',
                'cpf.required' => 'CPF obrigatorio!'
            ];

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $usuario->id,
                'password' => 'nullable|string|min:4|confirmed',
                'photo' => 'nullable|image|max:2048',
                'cpf' => ['required', 'string', 'size:14', 'regex:/^\d{3}\.\d{3}\.\d{3}-\d{2}$/', 'unique:users,cpf,' . $usuario->id],
                'phone' => ['required', 'string', 'size:15', 'regex:/^\(\d{2}\) \d{5}-\d{4}$/', 'unique:users,telefone,' . $usuario->id],

            ]);

            $usuario->name = $request->name;
            $usuario->email = $request->email;
            $usuario->telefone = $request->phone;
            $usuario->cpf = $request->cpf;

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
        } catch (\Exception $e) {
            // Armazenar mensagem de erro na sessão
            return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar o usuário. Por favor, tente novamente.');
        }
    }
}
