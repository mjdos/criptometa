<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Projetos;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cadastro = Session::get('usuario');
        
        return view('painel.home_gestao.index', compact('cadastro'));
    }

    public function projeto_gestao()
    {   
        $projetos = Projetos::all();
        return view('painel.home_gestao.projeto_gestao', compact('projetos'));
    }

    public function usuario_gestao()
    {
        $users = User::all();

        return view('painel.home_gestao.usuario_gestao', compact('users'));
    
    }

    public function auditoria_gestao()
    {

        return view('painel.home_gestao.auditoria_gestao');
    
    }


}
