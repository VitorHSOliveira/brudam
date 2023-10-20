<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\CreatePedidoController;


Route::get('/', [CreatePedidoController::class, 'index'])->name('createPedido.index');

//rota para listar todos os pedidos
Route::resource('/pedidos', PedidoController::class);


//rota para remover pedidos
Route::post('/remover', [PedidoController::class, 'remove'])->name('pedidos.remove');
//rota para criar pedidos
Route::post('/create', [PedidoController::class, 'create'])->name('pedidos.create');