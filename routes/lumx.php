<?php

use App\Http\Controllers\
{   
    ApiLumxController
};
use Illuminate\Support\Facades\Route;

Route::get('/criar_carteira', [ApiLumxController::class, 'criarCarteira'])->name('criarCarteira');
