<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Submeta;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProjetoController extends Controller
{

    public function index()
    {
        $user = Auth::user(); // Obtém o usuário autenticado
        $usuario = User::find($user->id);
        $projetos = Project::where('user_id', $usuario->id)->with('submetas')->orderBy('id','desc')->get();
        
        return view('site.usuario.projeto', compact('usuario', 'projetos'));
    }


    public function create()
    {
        $user = Auth::user(); // Obtém o usuário autenticado
        $usuario = User::find($user->id);

        return view('site.usuario.projeto_create', compact('usuario'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'meta' => 'required|numeric|min:0',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'submetas' => 'required|array',
            'submetas.*.nome' => 'required|string|max:255',
            'submetas.*.percentual' => 'required|numeric|min:0|max:100',
            'submetas.*.valor' => 'required|numeric|min:0',
        ]);

        $projetoData = [
            'titulo' => $request->input('titulo'),
            'descricao' => $request->input('descricao'),
            'meta' => $request->input('meta'),
            'user_id' => Auth::id(),
        ];

        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $nomeImagem = time().'_'.$imagem->getClientOriginalName();
            $imagem->storeAs('public/imagens', $nomeImagem);
            $projetoData['imagem'] = $nomeImagem;
        }

        $projeto = Project::create($projetoData);

        $submetas = $request->input('submetas', []);

        foreach ($submetas as $submetaData) {
            $submetaData['projeto_id'] = $projeto->id;
            Submeta::create($submetaData);
        }

        return redirect()->route('projeto.criar')->with('success', 'Projeto criado com sucesso!');
    }
}
