<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    
    // public function index(){
    //     return view('index');
    // }

    // public function login(){
    //     return view('login');
    // }

    // public function store(Request $request){

    //     Session::flush();
        
    //     $credentials = [
    //         'email' => $request->usuario,
    //         'password' => $request->senha
    //     ];
            
    //     if(Auth::attempt($credentials))
    //     {

    //         $user = Auth::user();

    //         $usuario_logado = [
    //             'id'            => $user->id,
    //             'nome'          => $user->name,
    //             'email'         => $user->email,
    //         ];
            
    //         Session::put(['usuario' => $usuario_logado]);
            
    //         return redirect()->route('home_site.index');
    //     }

    //     return redirect()->back()->withInput()->withErrors(["Usuário ou Senha Incorretos."]);

    // }

    // public function logout(Request $request){
    //     Auth::guard('web')->logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect('/');
    // }

    // public function home(){
    //     return view('home');
    // }
}
