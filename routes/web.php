<?php

use App\Http\Controllers\ClienteController;
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


Route::get('/read/cliente',  [ClienteController::class, 'index'])->name('index')->middleware('auth');;//Ruta para la vista de camion




/* Routes de Compras */







/* Routes de Mecanico */







/* Routes de Notificaciones */







/* Routes de Recibo */







/* Routes de Repuesto */







/* Routes de Servicio */







/* Routes de Servicio_Mecanico */







/* Routes de Trabajador */







/* Routes de Vehiculo */






