<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/painel.php';

//pagina inicial
Route::get('/', function () {
    return view('site.home');
})->name('site.index');

//pagina Campanha
Route::get('/campanha-tipo', function () {
    return view('site.campanha');
})->name('site.campanha');

//pagina login
Route::get('/login', function () {
    return view('site.login');
})->name('site.login');

//pagina cadastro
Route::get('/cadastro', function () {
    return view('site.cadastro');
})->name('site.cadastro');

// projeto
//criar
Route::get('/projeto-criar', function () {
    return view('site.projeto.criar');
})->name('projeto.criar');

//ver
Route::get('/projeto-index', function () {
    return view('site.projeto.index');
})->name('projeto.index');

//adicionar meta
Route::get('/projeto-meta', function () {
    return view('site.projeto.meta');
})->name('projeto.meta');
//adicionar recompensa
Route::get('/projeto-reconpensa', function () {
    return view('site.projeto.reconpensa');
})->name('projeto.recompensa');

//adicionar novidade
Route::get('/projeto-novidade', function () {
    return view('site.projeto.novidade');
})->name('projeto.novidade');

//adicionar explorar
Route::get('/projeto-explorar', function () {
    return view('site.projeto.explorar');
})->name('projeto.explorar');

//apoiar o projeto
Route::get('/projeto-apoiar', function () {
    return view('site.projeto.apoiar');
})->name('projeto.apoiar');



