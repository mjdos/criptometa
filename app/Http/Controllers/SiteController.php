<?php

namespace App\Http\Controllers;

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
}
