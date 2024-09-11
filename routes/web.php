<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaControler;

Route::get('/home', function () {
    return view('home');
});


Route::get('/pessoa', [PessoaControler::class, 'index']); //chama o controller não uma view, por isso usa [], depois de class tem que chamar o nome da função dentro do controller



Route::get('/financeiro', function () {
    return view('financeiro');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/compras', function () {
    return view('compras');
});

Route::get('/configuracoes', function () {
    return view('configuracoes');
});
