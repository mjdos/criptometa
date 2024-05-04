<?php

use App\Http\Controllers\
{   
    LoginController,
    PainelController,
    ProductController,
};
use Illuminate\Support\Facades\Route;


Route::get('/login_gestao', [LoginController::class, 'index'])->name('login_gestao');
Route::post('/login_gestao', [LoginController::class, 'store']);


///Rotas Autenticadas
Route::middleware('auth')->group(function () {

    Route::get('/home', [PainelController::class, 'index'])->name('home.index');
    Route::get('/gestao_logout', [LoginController::class, 'logout'])->name('gestao_logout');

    Route::get('/projeto_gestao', [PainelController::class, 'projeto_gestao'])->name('projeto_gestao.index');




    // // Tela Referência
    // Route::get('/referencia', [PainelController::class, 'referencia'])->name('referencia.index');

    // //Tela de Demandas
    // Route::get('/demanda', [PainelController::class, 'demandas'])->name('demandas.index');
    // Route::post('/criar_nova_demandas', [PainelController::class, 'storeDemandas'])->name('criar_nova_demandas.store');
   
    // Route::get('/entrega_demanda', [PainelController::class, 'entrega_demanda'])->name('entrega_demanda.index');
    // Route::get('/home_demandas_entregues/{id}', [PainelController::class, 'home_demandas_entregues'])->name('home_demandas_entregues.index');
    // Route::get('/analisar_demandas', [PainelController::class, 'analisar_demandas'])->name('analisar_demandas.index');
    // Route::get('/colocacao', [PainelController::class, 'colocacao'])->name('colocacao.index');
    
    // Route::get('/marcadores', [PainelController::class, 'marcadores'])->name('marcadores.index');
    
    // Route::get('/visualizar_entregas', [PainelController::class, 'visualizar_entregas'])->name('visualizar_entregas.index');



});