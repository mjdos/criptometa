<?php

namespace App\Http\Controllers;

use App\Models\Investimentos;
use App\Models\Projetos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.home');
    }

    public function login()
    {
        return view('site.login');
    }

    public function logar(Request $request)
    {

        Session::flush();

        $credentials = [
            'email' => $request->usuario,
            'password' => $request->senha
        ];

        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            $usuario_logado = [
                'id'            => $user->id,
                'nome'          => $user->name,
                'email'         => $user->email,
                'perfil'        => $user->perfil,
                'carteira'      => $user->carteira,
                'carteira_id'   => $user->carteira_id,
                'projeto_id'    => $user->projeto_id
            ];

            Session::put(['usuario' => $usuario_logado]);

            return redirect()->route('site.index');
        }

        return redirect()->back()->withInput()->withErrors(["Usuário ou Senha Incorretos."]);
    }

    public function cadastro()
    {
        return view('site.cadastro');
    }

    public function cadastroStore(Request $request)
    {

        $lumx = new ApiLumxController;
        $nova_carteira = $lumx->criarCarteira();

        User::create([
            'name'          => $request->usuario,
            'perfil'        => 2,
            'carteira'      => $nova_carteira['address'],
            'carteira_id'   => $nova_carteira['id'],
            'projeto_id'    => $nova_carteira['projectId'],
            'email'         => $request->email,
            'password'      => $request->senha,

        ]);

        return view('site.login');
    }

    public function projetoIndex($id)
    {

        $projeto = Projetos::find($id);
        $apoiadores = Investimentos::where('projeto_id', $id)->get();

        return view('site.projeto.index', compact('projeto', 'apoiadores'));
    }

    public function projetoCriar()
    {
        return view('site.projeto.criar');
    }

    public function projetoStore(Request $request)
    {

        if ($request->file('imagem')->isValid()) {
            $path = $request->file('imagem')->store('storage/imagemProjetos');
            $imagem_1 =  $path;
        }
        $usuario = Session::get('usuario');
        Projetos::create([
            'autor_id'  => $usuario['id'],
            'nome'      => $request->nome,
            'valor'      => $request->valor,
            'descricao' => $request->descricao,
            'meta_1'    => $request->meta_1,
            'meta_2'    => $request->meta_2,
            'meta_3'    => $request->meta_3,
            'meta_4'    => $request->meta_4,
            'meta_5'    => $request->meta_5,
            'imagem'    => $imagem_1,
        ]);

        return redirect()->route('projeto.explorar');
    }

    public function projetos()
    {

        $projetos = Projetos::all();

        return view('site.projeto.explorar', compact('projetos'));
    }

    public function apoiar($id){
        $projeto = Projetos::find($id);
        return view('site.projeto.apoiar', compact('projeto'));
    }

    public function investir(Request $request, $id){
        
        $usuario = Session::get('usuario');
        Investimentos::create([
            'investidor_id'     => $usuario['id'],
            'projeto_id'        => $id,
            'valor'             => $request->valor,
        ]);

        return redirect()->route('projeto.explorar');
    }

    public function meus_projetos($id){
        
        $projetos = Projetos::where('autor_id', $id)->get();

        return view('site.usuario.meus_projetos', compact('projetos'));
    }    

    public function showProjetos(Request $request)
    {

        $user = $request->user(); 

        $projetos = Projetos::where('autor_id', $user->id)->get();

        return view('site.usuario.projeto', compact('projetos'));
    }

    function editarProjetos($id)
    {
        $projeto = Projetos::find($id);
        return view('site.projeto.editar');
    }
    function apoiarProjeto(Request $request)
    {
        $id = $request->id;
        return view('site.projeto.apoiar');
    }
    


}
