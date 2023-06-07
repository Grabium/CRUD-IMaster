<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use PhpParser\Node\Name;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/novo', [ProdutosController::class, 'create'])->name('rota1');

Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');

Route::get('/produtos/ver/{id}', [ProdutosController::class, 'show']);

Route::get('/produtos/editar/{id}', [ProdutosController::class, 'edit']);

Route::post('/produtos/editar/{id}', [ProdutosController::class, 'update'])->name('alterar_produto');
