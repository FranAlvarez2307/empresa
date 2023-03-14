<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketAuxController;
use App\Http\Controllers\TicketJsController;
use App\Http\Controllers\UserSettingsController;



Route::get('depas', [DepaController::class, 'index'])->name('depas.index');

//usuarios
Route::get('clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('clientes/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

//perfil
Route::get('/NewPassword',  [UserSettingsController::class,'NewPassword'])->name('NewPassword')->middleware('auth');
Route::post('/change/password',  [UserSettingsController::class,'changePassword'])->name('changePassword');

//departamentos
Route::get('depas', [DepaController::class, 'index'])->name('depas.index');
Route::get('depas/depa', [DepaController::class, 'create'])->name('depas.create');
Route::post('depas', [DepaController::class, 'store'])->name('depas.store');
Route::get('depas/{depa}', [DepaController::class, 'show'])->name('depas.show');
Route::get('depas/{depa}/edit', [DepaController::class, 'edit'])->name('depas.edit');
Route::put('depas/{depa}', [DepaController::class, 'update'])->name('depas.update');
Route::delete('depas/{depa}', [DepaController::class, 'destroy'])->name('depas.destroy');

//ticketsJs
Route::get('ticketsJs', [TicketJsController::class, 'index'])->name('ticketsJs.index');
Route::get('ticketsJs/{ticket}', [TicketJsController::class, 'show'])->name('ticketsJs.show');
Route::get('ticketsJs/{ticket}/edit', [TicketJsController::class, 'edit'])->name('ticketsJs.edit');
Route::put('ticketsJs/{ticket}', [TicketJsController::class, 'update'])->name('ticketsJs.update');
Route::delete('ticketsJs/{ticket}', [TicketJsController::class, 'destroy'])->name('ticketsJs.destroy');



//tickets
Route::get('tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('tickets/ticket', [TicketController::class, 'create'])->name('tickets.create');
Route::post('tickets', [TicketController::class, 'store'])->name('tickets.store');
Route::get('tickets/{ticket}', [TicketController::class, 'show'])->name('tickets.show');
Route::get('tickets/{ticket}/edit', [TicketController::class, 'edit'])->name('tickets.edit');
Route::put('tickets/{ticket}', [TicketController::class, 'update'])->name('tickets.update');
Route::post('tickets/{ticket}', [TicketController::class, 'cancelar'])->name('tickets.cancelar');
Route::delete('tickets/{ticket}', [TicketController::class, 'destroy'])->name('tickets.destroy');

//ticketsAux
Route::get('ticketsAux', [TicketAuxController::class, 'index'])->name('ticketsAux.index');
Route::get('ticketsAux/{ticket}', [TicketAuxController::class, 'show'])->name('ticketsAux.show');
Route::get('ticketsAux/{ticket}/edit', [TicketAuxController::class, 'edit'])->name('ticketsAux.edit');
Route::put('ticketsAux/{ticket}', [TicketAuxController::class, 'update'])->name('ticketsAux.update');
Route::delete('ticketsAux/{ticket}', [TicketAuxController::class, 'destroy'])->name('ticketsAux.destroy');
Route::get('ticketsAux/{ticket}/reporte', [TicketAuxController::class, 'reporte'])->name('ticketsAux.reporte');


//login, registro y menus
Auth::routes();
Route::get('/menu', [HomeController::class, 'index'])->name('index');
Route::get('/menuJS', [HomeController::class, 'jefe'])->name('jefe');
Route::get('ticketsAuxIndex', [HomeController::class, 'auxiliar'])->name('auxiliar');
Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
Route::get('/',function () {
    return redirect('/menu');
});