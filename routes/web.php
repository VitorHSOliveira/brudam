<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\CreatePedidoController;
use App\Http\Controllers\RotasController;


//listar view para criar pedidos
Route::get('/', [CreatePedidoController::class, 'index'])->name('createPedido.index');

//rota para listar todos os pedidos
Route::resource('/pedidos', PedidoController::class);

//rota para remover pedidos
Route::post('/remover', [PedidoController::class, 'remove'])->name('pedidos.remove');

//rota para criar pedidos
Route::post('/create', [CreatePedidoController::class, 'create'])->name('createPedido.create');

//mostra as rotas em api
Route::get('/rotas', [RotasController::class, 'index'])->name('rotas.index');