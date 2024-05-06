<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/lumx.php';
require __DIR__.'/painel.php';

    //pagina inicial
    Route::get('/', [SiteController::class,'index'])->name('site.index');

    //pagina login
    Route::get('/login', [SiteController::class,'login'])->name('site.login');
    Route::post('/login', [SiteController::class,'logar'])->name('site.logar');

    //pagina cadastro
    Route::get('/cadastro', [SiteController::class,'cadastro'])->name('site.cadastro');
    Route::post('/cadastro', [SiteController::class,'cadastroStore'])->name('cadastro.store');
    Route::post('/cadastroEditar', [SiteController::class,'updateCadastro'])->name('cadastro.update');

    // projeto
    Route::get('/projeto-index-{id}', [SiteController::class, 'projetoIndex'])->name('projeto.index');
    //criar
    Route::get('/projeto-criar', [SiteController::class, 'projetoCriar'])->name('projeto.criar');
    Route::post('/projeto-criar', [SiteController::class, 'projetoStore'])->name('projeto.store');

    //adicionar explorar
    Route::get('/projeto-explorar', [SiteController::class, 'projetos'])->name('projeto.explorar');
    //apoiar o projeto
    Route::get('/projeto-apoiar-{id}', [SiteController::class, 'apoiar'])->name('projeto.apoiar');
    Route::get('/projeto-investir-{id}', [SiteController::class, 'investir'])->name('projeto.investir');



    //pagina Campanha
    Route::get('/campanha-tipo', function () {return view('site.campanha');})->name('site.campanha');
    //adicionar meta 
    Route::get('/projeto-meta', function () {return view('site.projeto.meta');})->name('projeto.meta');
    //adicionar recompensa
    Route::get('/projeto-reconpensa', function () {return view('site.projeto.reconpensa');})->name('projeto.recompensa');

    //adicionar novidade
    Route::get('/projeto-novidade', function () {return view('site.projeto.novidade');})->name('projeto.novidade');

    
    //meus projetos
    Route::get('/meus-projetos-{id}', [SiteController::class, 'meus_projetos'])->name('meus_projetos');

    //projetos usuario
    Route::get('/projeto_usuario-{id}', [SiteController::class, 'projeto_usuario'])->name('projeto_usuario');

    ///// TELAS DO USUÁRIO
    // Tela Perfil do Usuário
    Route::get('/usuario-index', function () {return view('site.usuario.index');})->name('usuario.index');

    //Tela Carteira do Usuário
    Route::get('/usuario-carteira', function () {return view('site.usuario.carteira');})->name('usuario.carteira');

    //Tela projetos do Usuário
    Route::get('/usuario-meus-projeto',[SiteController::class, 'showProjetos'])->name('usuario.projetos');
    //Tela projetos do Usuário editar
    Route::get('/usuario-meus-projeto/{id}/editar',[SiteController::class, 'editarProjetos'])->name('usuario.projetosEditar');

    //apoiar o projeto
    // Route::get('/projeto-apoiar-{id}', [SiteController::class, 'apoiarProjeto'])->name('projeto.apoiar');
    //Quem Somos
    Route::get('/quem-somos', function () {return view('site.quem-somos');})->name('quemsomos');
    Route::get('/contato', function () {return view('site.contato');})->name('contato');

      //Tela sucesso apoio
      Route::get('/apoio-sucess', function () {return view('site.projeto.sucessoApoio');})->name('apoio.sucess');