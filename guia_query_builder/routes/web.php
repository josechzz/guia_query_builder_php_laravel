<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::get('/insertar-datos', [PedidoController::class, 'insertarDatos']);
Route::get('/pedidos-usuario-2', [PedidoController::class, 'pedidosUsuario2']);
Route::get('/pedidos-con-usuarios', [PedidoController::class, 'pedidosConUsuarios']);
Route::get('/pedidos-rango-100-250', [PedidoController::class, 'pedidosRango100a250']);
Route::get('/usuarios-nombre-r', [PedidoController::class, 'usuariosNombreR']);
Route::get('/total-pedidos-usuario-5', [PedidoController::class, 'totalPedidosUsuario5']);
Route::get('/pedidos-con-usuarios-ordenados', [PedidoController::class, 'pedidosConUsuariosOrdenados']);
Route::get('/suma-total-pedidos', [PedidoController::class, 'sumaTotalPedidos']);
Route::get('/pedido-mas-economico', [PedidoController::class, 'pedidoMasEconomico']);
Route::get('/pedidos-agrupados-por-usuario', [PedidoController::class, 'pedidosAgrupadosPorUsuario']);
