<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('teste');
});


//pagina inicial
Route::get('/home', function () {
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