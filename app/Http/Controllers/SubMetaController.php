<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubMetaValidator;
use App\Models\Project;
use App\Models\Submeta;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SubMetaController extends Controller
{
    public function create($projetoId)
    {
        $user = Auth::user(); // Obtém o usuário autenticado
        $usuario = User::find($user->id);
        $projeto = Project::find($projetoId);
        $submetas = Submeta::where('projeto_id',$projetoId)->get()  ;
        return view('site.submeta.create', compact('projetoId', 'usuario', 'projeto','submetas'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'percentual' => 'required|numeric|min:0|max:100',
            'projeto_id' => 'required|exists:projects,id',
        ]);
        Submeta::create($validatedData);
        return redirect()->route('sub_meta.create', $request->projeto_id)
            ->with('success2', 'Meta extra adicionada com sucesso!');
    }
}
