<?php

namespace App\Http\Controllers;

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
        return view('painel.home_gestao.projeto_gestao');
    }



}
