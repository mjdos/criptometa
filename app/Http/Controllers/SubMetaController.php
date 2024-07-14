<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubMetaValidator;
use App\Models\Project;
use App\Models\Submeta;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;

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

    public function store(SubMetaValidator $request)
    {
        $validatedData = $request->validated();
        Submeta::create($validatedData);
        return redirect()->route('sub_meta.create', $request->projeto_id)
            ->with('success2', 'Meta extra adicionada com sucesso!');
    }
    public function destroy($id, Request $request)
    {
        try {
            $submeta = Submeta::find($id);

            if ($submeta) {
                $submeta->delete();
                return response()->json([
                    'success' => true,
                    'message' => 'Meta extra deletada com sucesso!'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Meta extra não encontrada.'
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocorreu um erro ao tentar deletar a meta extra.'
            ]);
        }
    }
}
