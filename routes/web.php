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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobrenos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
// Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('site.login');

// app
Route::prefix('/app')->group(function () {
    Route::get('/clientes', [\App\Http\Controllers\ContatoController::class, 'clientes']);
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', [\App\Http\Controllers\ContatoController::class, 'produtos']);
});

Route::fallback(function () {
    echo 'A rota acessada não existe, <a href="' . route('site.index') . '">clique aqui</a> para voltar a página principal.';
});
