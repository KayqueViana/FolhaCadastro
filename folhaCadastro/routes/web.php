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

use App\Http\Controllers\CadastroController;

Route::get('/criarUsuario', [CadastroController::class, 'registro']);
Route::get('/', [CadastroController::class, 'lista']);
Route::post('/criarUsuario', [CadastroController::class, 'store']);
Route::get('/{id}', [CadastroController::class, 'show']);
Route::delete('/{id}', [CadastroController::class, 'destroy']);
Route::get('/clientes/edit/{id}', [CadastroController::class, 'edit']);
Route::put('/update/{id}', [CadastroController::class, 'update']);
