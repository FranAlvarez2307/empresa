<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TicketController;

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

//tickets
Route::get('tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('tickets/ticket', [TicketController::class, 'create'])->name('tickets.create');
Route::post('tickets', [TicketController::class, 'store'])->name('tickets.store');
Route::get('tickets/{ticket}', [TicketController::class, 'show'])->name('tickets.show');
Route::get('tickets/{ticket}/edit', [TicketController::class, 'edit'])->name('tickets.edit');
Route::put('tickets/{ticket}', [TicketController::class, 'update'])->name('tickets.update');
Route::delete('tickets/{ticket}', [TicketController::class, 'destroy'])->name('tickets.destroy');

//login y registro
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
