<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TiendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class ,'index'])->middleware(['auth', 'verified'])->name('dashboard.index');
Route::get('dashboard/pedidos/crear', [PedidosController::class ,'crear'])->middleware(['auth', 'verified'])->name('pedido.crear');
Route::get('dashboard/pedidos/detalles', [PedidosController::class ,'detalles'])->middleware(['auth', 'verified'])->name('pedido.detalles');
Route::get('dashboard/pedidos', [PedidosController::class ,'index'])->middleware(['auth', 'verified'])->name('pedido.index');
Route::get('dashboard/productos', [ProductosController::class ,'index'])->middleware(['auth', 'verified'])->name('producto.index');
Route::get('dashboard/tiendas', [TiendaController::class ,'index'])->middleware(['auth', 'verified'])->name('tienda.index');
Route::get('dashboard/categorias', [CategoriaController::class ,'index'])->middleware(['auth', 'verified'])->name('categoria.index');
Route::get('dashboard/profile/resetpass', [DashboardController::class ,'resetpass'])->middleware(['auth', 'verified'])->name('profile.resetpass');

Route::middleware('auth')->group(function () {
    Route::get('dashboard/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
