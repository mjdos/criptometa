<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('painel.login_gestao');
    }

    public function store(Request $request)
    {

        Session::flush();
        
        $credentials = [
            'email' => $request->usuario,
            'password' => $request->senha,
            
        ];
            
        if(Auth::attempt($credentials))
       
        {

            $user = Auth::user();
            if ($user->photo == null ){
                $teste =  'img/content/previews/project-thumb-37.png';
            }
            $usuario_logado = [
                'id'            => $user->id,
                'nome'          => $user->name,
                'email'         => $user->email,
                'photo'         => $teste,
            ];
            
            Session::put(['usuario' => $usuario_logado]);
            
            return redirect()->route('home.index');

        }

        return redirect()->back()->withInput()->withErrors(["Usuário ou Senha Incorretos."]);

    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('site.home');
    }
}
