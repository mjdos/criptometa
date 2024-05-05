<?php

namespace App\Http\Controllers;

use App\Models\Projetos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session ;

class SiteController extends Controller
{
    public function index(){
        return view('site.home');
    }

    public function login(){
        return view('site.login');
    }

    public function logar(Request $request)
    {

        Session::flush();

        $credentials = [
            'email' => $request->usuario,
            'password' => $request->senha
        ];

        if(Auth::attempt($credentials))
        {

            $user = Auth::user();

            $usuario_logado = [
                'id'            => $user->id,
                'nome'          => $user->name,
                'email'          => $user->email,
                'tipo_id'       => $user->tipo_id,
            ];
            
            Session::put(['usuario' => $usuario_logado]);

            return redirect()->route('site.index');

        }

        return redirect()->back()->withInput()->withErrors(["Usuário ou Senha Incorretos."]);
    }

    public function cadastro(){
        return view('site.cadastro');
    }
    
    public function cadastroStore(Request $request){

        User::create([
            'name'      => $request->usuario,
            'email'     => $request->email,
            'password'  => $request->senha,
            'perfil'    => 2,
        ]);

        return view('site.login');
    }

    public function projetoIndex(){
        return view('site.projeto.index');
    }

    public function projetoCriar(){
        return view('site.projeto.criar');
    }

    public function projetoStore(Request $request){
        
        if($request->file('imagem')->isValid()) {
            $path = $request->file('imagem')->store('public/imagemProjetos');
            $imagem_1 =  $path;
            
        }

        Projetos::create([
            'nome'      => $request->nome,
            'descricao' => $request->descricao,
            'meta_1'    => $request->meta_1,
            'meta_2'    => $request->meta_2,
            'meta_3'    => $request->meta_3,
            'meta_4'    => $request->meta_4,
            'meta_5'    => $request->meta_5,
            'imagem'    => $imagem_1,
        ]);

        return view('site.projeto.explorar');
    }
}
