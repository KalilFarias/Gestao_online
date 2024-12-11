<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\FornecedoresController;


Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/contato', [ContatoController::class, 'contato']);

Route::get('/sobrenos', [SobreNosController::class, 'sobrenos']);

Route::get('/contato/{nome?}/{idade?}', function (string $nome = "DESCONHECIDO", int $idade = 23) {

    echo "estamos aqui $nome voce tem $idade anos";
});

Route::get('/login', [LoginController::class, 'login']);

Route::prefix('/app')->group(function () {

    Route::get('/clientes', [ClientesController::class, 'clientes']);

    Route::get('/fornecedores', [FornecedoresController::class, 'fornecedores']);

    Route::get('/produtos', [ProdutosController::class, 'produtos']);
});
