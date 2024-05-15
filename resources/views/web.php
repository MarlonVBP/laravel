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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('site.index');

Route::get('/redirect', [App\Http\Controllers\IndexController::class, 'redirect'])->name('site.redirect');

Route::get('/contato', [App\Http\Controllers\IndexController::class, 'contato'])->name('site.contato');

Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->name('site.login');

Route::get('/login', [App\Http\Controllers\UserController::class, 'logout'])->name('site.logout');

Route::get('/generate', [App\Http\Controllers\LinkController::class, 'generate'])->name('site.generate');

Route::get('/list_', [App\Http\Controllers\List_Controller::class, 'list_'])->name('site.list_');


Route::get('/recover', [App\Http\Controllers\UserController::class, 'recover'])->name('site.recover');

Route::get('/register', [App\Http\Controllers\UserController::class, 'register'])->name('site.register');

Route::get('/remove', [App\Http\Controllers\LinkController::class, 'remove'])->name('site.remove');


Route::prefix('app')->group(function(){
    Route::get('/fornecedores', [App\Http\Controllers\FornecedoresController::class, 'fornecedores'])->name('app.fornecedores');
    Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'clientes'])->name('app.clientes');
    Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'produtos'])->name('app.produtos');
});

