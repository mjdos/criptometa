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

    //pagina Campanha
    Route::get('/campanha-tipo', function () {return view('site.campanha');})->name('site.campanha');

    //pagina cadastro
    Route::get('/cadastro', [SiteController::class,'cadastro'])->name('site.cadastro');
    Route::post('/cadastro', [SiteController::class,'cadastroStore'])->name('cadastro.store');

    // projeto
    Route::get('/projeto-index-{id}', [SiteController::class, 'projetoIndex'])->name('projeto.index');
    //criar
    Route::get('/projeto-criar', [SiteController::class, 'projetoCriar'])->name('projeto.criar');
    Route::post('/projeto-criar', [SiteController::class, 'projetoStore'])->name('projeto.store');

    //adicionar explorar
    Route::get('/projeto-explorar', [SiteController::class, 'projetos'])->name('projeto.explorar');



    //adicionar meta 
    Route::get('/projeto-meta', function () {return view('site.projeto.meta');})->name('projeto.meta');
    //adicionar recompensa
    Route::get('/projeto-reconpensa', function () {return view('site.projeto.reconpensa');})->name('projeto.recompensa');

    //adicionar novidade
    Route::get('/projeto-novidade', function () {return view('site.projeto.novidade');})->name('projeto.novidade');


    //apoiar o projeto
    Route::get('/projeto-apoiar/{id?}', function () {return view('site.projeto.apoiar');})->name('projeto.apoiar');

    //apoiar o projeto
    Route::get('/usuario-index/{id?}', function () {return view('site.usuario.index');})->name('usuario.index');

    //meus projetos
    Route::get('/meus-projetos', [SiteController::class, 'meus_projetos'])->name('meus_projetos');

    ///// TELAS DO USUÁRIO
    // Tela Perfil do Usuário
    Route::get('/usuario-index', function () {return view('site.usuario.index');})->name('usuario.index');

    //Tela Carteira do Usuário
    Route::get('/usuario-carteira', function () {return view('site.usuario.carteira');})->name('usuario.carteira');

    //Tela projetos do Usuário
    Route::get('/usuario-meus-projeto',[SiteController::class, 'showProjetos'])->name('usuario.projetos');
    //Tela projetos do Usuário editar
    Route::get('/usuario-meus-projeto/{id}',[SiteController::class, 'editarProjetos'])->name('usuario.projetosEditar');

    
    //Quem Somos
    Route::get('/quem-somos', function () {return view('site.quem-somos');})->name('quemsomos');
    Route::get('/contato', function () {return view('site.contato');})->name('contato');