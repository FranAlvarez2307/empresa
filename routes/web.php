<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepaController;
use App\Http\Controllers\LoginController;

Route::get('/menu', function () {
    return view('menu');
});

//usuarios
Route::get('clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('clientes/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');


//departamentos
Route::get('depas', [DepaController::class, 'index'])->name('depas.index');
Route::get('depas/depa', [DepaController::class, 'create'])->name('depas.create');
Route::post('depas', [DepaController::class, 'store'])->name('depas.store');
Route::get('depas/{depa}', [DepaController::class, 'show'])->name('depas.show');
Route::get('depas/{depa}/edit', [DepaController::class, 'edit'])->name('depas.edit');
Route::put('depas/{depa}', [DepaController::class, 'update'])->name('depas.update');
Route::delete('depas/{depa}', [DepaController::class, 'destroy'])->name('depas.destroy');

//login y registro
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
