<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\EventController;

//utiliza o controller para fazer toda a logica


Route::get('/cadastro/novoCadastro', [CadastroController::class, 'criarCadastro']);


Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);

Route::post('/events', [EventController::class, 'store']);




//rota sem utilizar o controller
Route::get('/exemplo', function () {

    return view('exemplo');
});
