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

Route::get('/login', [\App\Http\Controllers\loginController::Class,'Login'])
    ->name('login');

Route::post('/login', [\App\Http\Controllers\loginController::Class,'Logar'])
    ->name('logar');

Route::get('/logout', [\App\Http\Controllers\loginController::Class,'Logout'])
    ->name('logout');

Route::get('/clientes', [\App\Http\Controllers\clientesController::Class,'listar'])
    ->name('clientes');

Route::get('/financiamento', function () {
    return view('financiamento');
})->name('financiamento');

Route::get('/veiculos', [\App\Http\Controllers\veiculosController::Class,'Listar'])
    ->name('veiculos');

Route::get('/', [\App\Http\Controllers\indexController::Class,'index'])
    ->name('home');

Route::get('/mudarCompetencia', [\App\Http\Controllers\indexController::Class,'mudarCompetencia'])
    ->name('competencia');

Route::get('/cadastro-cliente', [\App\Http\Controllers\clientesController::Class,'Cadastro'])
->name('cadastro');

Route::get('/relatorio{mes}', [\App\Http\Controllers\indexController::Class,'BaixarRelatorio'])
->name('relatorio');
    