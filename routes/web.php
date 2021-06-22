<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobre_nos'])->name('site.sobre-nos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'Login'])->name('site.login');

//agrupamento de rotas definindo como  "/app"
Route::prefix('/app')->group(function(){
    Route::get('/cliente', [\App\Http\Controllers\ClienteController::class, 'Cliente'])->name('app.cliente');
    Route::get('/fornecedor', [\App\Http\Controllers\FornecedorController::class, 'Fornecedor'])->name('app.fornecedor');
    Route::get('/produto', [\App\Http\Controllers\ProdutoController::class, 'Produto'])->name('app.produto');
});


Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('site.teste');


//rota de contingencia
Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui </a>para ir para a página inicial';
});

//Route::redirect('/rota2' ,'rota1');


/* verbos http
get
post
put
patch
delete
options
*/