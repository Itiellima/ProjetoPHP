<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;

//utiliza o controller para fazer toda a logica
Route::get('/', [CadastroController::class, 'index']);

Route::get('/cadastro/novoCadastro', [CadastroController::class, 'criarCadastro']);







Route::get('/contatos', function () {

    $busca = request('search');


    return view('contatos', ['busca' => $busca]);
});

Route::get('/contatos_teste/{id?}', function ($id = null) {
    return view('contato', ['id' => $id]);
});


Route::get('/cadastro', function () {

    return view('cadastro');
});