<?php

namespace App\Http\Controllers;

use App\Models\Investimentos;
use App\Models\Projetos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreUserRequest;
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\Hash;


class SiteController extends Controller
{
    public function index()
    {
        return view('site.home');
    }

    public function home()
    {
        return view('site.home');
    }

    public function login()
    {
        return view('site.login');
    }

    public function logar(Request $request)
    {
        // Mensagens de validação em português
        $messages = [
            'usuario.required' => 'O campo E-mail é obrigatório.',
            'usuario.email' => 'O campo usuário deve ser um endereço de e-mail válido.',
            'senha.required' => 'O campo senha é obrigatório.',
            'senha.min' => 'A senha deve ter pelo menos 4 caracteres.',
        ];

        // Validação de entrada
        $validator = Validator::make($request->all(), [
            'usuario' => 'required|email',
            'senha' => 'required|min:4',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Verificar se o usuário existe no banco de dados
        $user = User::where('email', $request->input('usuario'))->first();

        if (!$user) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['usuario' => 'Usuário não encontrado.']);
        }

        // Credenciais de autenticação
        $credentials = [
            'email' => $request->input('usuario'),
            'password' => $request->input('senha')
        ];

        // Tentativa de autenticação
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Dados do usuário logado
            $usuario_logado = [
                'id' => $user->id,
                'nome' => $user->name,
                'email' => $user->email,
                'perfil' => $user->perfil,
                'carteira' => $user->carteira,
                'carteira_id' => $user->carteira_id,
                'projeto_id' => $user->projeto_id,
                'telefone' => $user->telefone,
                'photo' => $user->photo ? $user->photo : url('img/logo.png'), // Atualiza a foto na sessão
            ];

            // Armazenar dados do usuário na sessão
            Session::put('usuario', $usuario_logado);

            return redirect()->route('site.home');
        }

        // Redirecionar com mensagem de erro se a autenticação falhar
        return redirect()->back()
            ->withInput()
            ->withErrors(['senha' => 'Senha incorreta.']);
    }

    public function cadastro()
    {
        return view('site.cadastro');
    }

    public function updateCadastro(Request $request)
    {

        $usuario = Session::get('usuario');
        $user = User::find($usuario['id']);
        if ($usuario) {
            $dados = [

                'name'          => $request->usuario,
                'telefone'      => $request->telefone,
                'senha'         => bcrypt($request->senha),
            ];

            $user->update($dados);
        }
        return view('site.usuario.index');
    }

    public function cadastroStore(StoreUserRequest  $request)
    {
        try {
            // Criar uma nova carteira usando o ApiLumxController
            $lumx = new ApiLumxController;
            $nova_carteira = $lumx->criarCarteira();

            // Criar o novo usuário com os dados validados
            User::create([
                'name'          => $request->usuario,
                'perfil'        => 2,
                // 'carteira'      => $nova_carteira['address'],
                // 'carteira_id'   => $nova_carteira['id'],
                // 'projeto_id'    => $nova_carteira['projectId'],
                'email'         => $request->email,
                'password'      => Hash::make($request->senha),

            ]);

            // Armazenar mensagem de sucesso na sessão
            return redirect()->route('site.login')->with('success', 'Usuário cadastrado com sucesso!');
        } catch (\Exception $e) {
            // Armazenar mensagem de erro na sessão
            return redirect()->back()->with('error', 'Ocorreu um erro ao cadastrar o usuário. Por favor, tente novamente.');
        }
    }

    public function projetoIndex($id)
    {

        $projeto = Projetos::find($id);
        $apoiadores = Investimentos::where('projeto_id', $id)->get();
        $valoresArrecadado = Investimentos::where('projeto_id', $id)->get();
        $valorTotal = 0;
        foreach ($valoresArrecadado as $valorArrecadado) {

            $valorTotal = $valorTotal + $valorArrecadado->valor;
        }

        return view('site.projeto.index', compact('projeto', 'apoiadores', 'valorTotal'));
    }

    public function projetoCriar()
    {
        $categorias = ProjectCategory::all();
        return view('site.projeto.criar', compact('categorias'));
    }

    public function projetoStore(Request $request)
    {
        $lumx = new ApiLumxController;
        $nova_carteira = $lumx->criarCarteira();

        if ($request->file('imagem')->isValid()) {
            $path = $request->file('imagem')->store('public/imagemProjetos');
            $path = explode('public/', $path);
            $imagem_1 =  'storage/' . $path[1];
        }

        $usuario = Session::get('usuario');
        Projetos::create([
            'autor_id'      => $usuario['id'],
            'nome'          => $request->nome,
            'valor'         => $request->valor,
            'carteira'      => $nova_carteira['address'],
            'carteira_id'   => $nova_carteira['id'],
            'projeto_id'    => $nova_carteira['projectId'],
            'descricao'     => $request->descricao,
            'meta_1'        => $request->meta_1,
            'meta_2'        => $request->meta_2,
            'meta_3'        => $request->meta_3,
            'meta_4'        => $request->meta_4,
            'meta_5'        => $request->meta_5,
            'imagem'        => $imagem_1,
        ]);

        return redirect()->route('projeto.explorar');
    }

    public function projetos()
    {

        $projetos = Projetos::all();

        return view('site.projeto.explorar', compact('projetos'));
    }

    public function apoiar($id)
    {
        $projeto = Projetos::find($id);
        return view('site.projeto.apoiar', compact('projeto'));
    }

    public function investir(Request $request, $id)
    {

        $usuario = Session::get('usuario');

        $lumx = new ApiLumxController;
        $mint = $lumx->mintToken($usuario['carteira_id'], $request->valor);

        Investimentos::create([
            'investidor_id'     => $usuario['id'],
            'projeto_id'        => $id,
            'valor'             => $request->valor,
            'hash_transacao'    => $mint['id']
        ]);

        return redirect()->route('apoio.sucess');
    }

    public function meus_projetos($id)
    {

        $projetos = Projetos::where('autor_id', $id)->get();

        return view('site.usuario.meus_projetos', compact('projetos'));
    }

    public function meus_investimentos($id)
    {

        $investimentos = Investimentos::where('investidor_id', $id)->get();

        return view('site.meus_investimentos', compact('investimentos'));
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


    public function projeto_usuario($id)
    {
        $projetos = Projetos::where('autor_id', $id)->get();


        return view('site.projeto.projeto_usuario', compact('projetos'));
    }
}
