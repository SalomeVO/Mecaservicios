<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ComprasController;
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

Route::get('/', function () {
    return view('/auth.login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Routes de Cliente */
Route::get('/formCliente', [ClienteController::class, 'createCliente'])->name('createCliente')->middleware('auth');//Formulario de Registro
Route::post('/saveCliente', [ClienteController::class, 'saveCliente'])->name('cliente.saveCliente')->middleware('auth');//Guardar el formulario
Route::get('/readcliente',  [ClienteController::class, 'index'])->name('index')->middleware('auth');;//Lista de cliente
Route::get('/clientedit/{nit}',  [ClienteController::class, 'editCliente'])->name('editCliente')->middleware('auth'); //Formulario de edicion
Route::patch('/actualizarC/{nit}',[ClienteController::class, 'updateCliente'])->name('updateCliente')->middleware('auth');//Guardar la edicion
Route::delete('delatecliente/{nit}', [ClienteController::class,'deleteCliente'])->name('deleteCliente')->middleware('auth'); //Eliminar un Cliente

/* Routes de Compras */
Route::get('/readcompras',  [ComprasController::class, 'index'])->name('index')->middleware('auth');;//Lista de Compras

/* Routes de Mecanico */







/* Routes de Notificaciones */







/* Routes de Recibo */







/* Routes de Repuesto */







/* Routes de Servicio */







/* Routes de Servicio_Mecanico */







/* Routes de Trabajador */







/* Routes de Vehiculo */






