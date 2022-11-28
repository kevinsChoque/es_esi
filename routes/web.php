<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DocController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PresupuestoController;
use App\Http\Controllers\CpController;

Route::get('/', function () {
    return view('login.login');
});

Route::post('dashboard',[HomeController::class, 'actHome']);
Route::get('doc/doc',[DocController::class, 'actDoc']);
Route::get('doc/listar',[DocController::class, 'actListar']);

Route::get('doc/download/{id}',[DocController::class, 'actDownload']);//depreced

Route::post('doc/download',[DocController::class, 'actDownload']);

Route::get('persona/persona',[PersonaController::class, 'actPersona']);
Route::get('persona/listar',[PersonaController::class, 'actListar']);
Route::get('persona/registrar',[PersonaController::class, 'actRegistrar']);
Route::get('persona/eliminar',[PersonaController::class, 'actEliminar']);
Route::get('persona/editar',[PersonaController::class, 'actEditar']);
Route::get('persona/guardarCambios',[PersonaController::class, 'actGuardarCambios']);
Route::get('persona/cambiarFirmador',[PersonaController::class, 'actCambiarFirmador']);

// presupuesto para un usuario
Route::get('presupuesto/cuadroPresupuestal',[PresupuestoController::class, 'actCuadroPresupuestal']);
Route::get('presupuesto/registrar',[PresupuestoController::class, 'actRegistrar']);
Route::get('presupuesto/presupuesto',[PresupuestoController::class, 'actPresupuesto']);
Route::get('presupuesto/listar',[PresupuestoController::class, 'actListar']);
Route::get('presupuesto/eliminar',[PresupuestoController::class, 'actEliminar']);
Route::get('presupuesto/editCuadroPresupuestal',[PresupuestoController::class, 'actEditCuadroPresupuestal']);
Route::get('presupuesto/editCp',[PresupuestoController::class, 'actEditCp']);
Route::get('presupuesto/guardarCambios',[PresupuestoController::class, 'actGuardarCambios']);


//actividad o rendimiento
Route::get('cp/listar',[CpController::class, 'actListar']);
Route::get('cp/cp',[CpController::class, 'actCp']);
Route::get('cp/saveEditTarifa',[CpController::class, 'actSaveEditTarifa']);






