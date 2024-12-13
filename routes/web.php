<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\FornecedoresController;


Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::get('/sobrenos', [SobreNosController::class, 'sobrenos'])->name('site.sobrenos');

Route::get('/contato/{nome?}/{idade?}', function (string $nome = "DESCONHECIDO", int $idade = 23) {

    echo "estamos aqui $nome voce tem $idade anos";
});

Route::get('/login', [LoginController::class, 'login'])->name('site.login');

Route::prefix('/app')->group(function () {

    Route::get('/clientes', [ClientesController::class, 'clientes'])->name('app.clientes');

    Route::get('/fornecedores', [FornecedoresController::class, 'fornecedores'])->name('app.fornecedores');

    Route::get('/produtos', [ProdutosController::class, 'produtos'])->name('app.produtos');
});
