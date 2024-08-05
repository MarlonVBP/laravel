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

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.principal');

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

// Route::get('/contato/{nome}', function(string $nome_contato){
//     echo 'Contato com o nome: ' . $nome_contato;
// });

// Route::get('/contato/{nome}/{sobrenome}', function(string $nome, string $sobrenome_contato){
//     echo 'Contato com o nome: ' . $nome . ' ' . $sobrenome_contato;
// });

// Route::get('/contato/{nome}/{assunto}/{mensagem?}', function(string $nome, string $assunto, string $mensagem = 'Mensagem não informada'){
//     echo 'Contato com o nome: ' . $nome . ' - ' . $assunto . ' - '. $mensagem;
// });

Route::get('/contato/{nome}/{categoria_id}', function(string $nome, int $categoria_id){
    echo "Estamos aqui: $nome - $categoria_id";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('site.login');

Route::prefix('app')->group(function(){
    Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'clientes'])->name('app.clientes');
    Route::get('/fornecedores', [App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'produtos'])->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');

Route::fallback(function(){
 echo 'A rota acessada não existe, <a href="' . route('site.principal') .'"> ir para a página inicial</a>';
});

Route::get('/rota1', function(){
    return redirect()->route('site.rota2');
})->name('site.rota1');
Route::get('/rota2', function(){
    echo 'Estamos na Rota 2';
})->name('site.rota2');