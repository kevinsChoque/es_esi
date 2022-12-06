<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DocController;
use App\Http\Controllers\SolController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PlantillaController;
use App\Http\Controllers\PresupuestoController;
use App\Http\Controllers\CpController;


Route::get('/', function () {
    return view('login.login');
});

Route::post('dashboard',[HomeController::class, 'actHome']);
// genera contratos
Route::get('doc/doc',[DocController::class, 'actDoc']);
Route::get('doc/listar',[DocController::class, 'actListar']);
Route::get('doc/download/{id}',[DocController::class, 'actDownload']);//depreced
Route::post('doc/download',[DocController::class, 'actDownload']);
// generar solicitud de instalacion
Route::get('solicitud/solicitud',[SolController::class, 'actSol']);
Route::post('solicitud/download',[SolController::class, 'actDownload']);
// crud de persona
Route::get('persona/persona',[PersonaController::class, 'actPersona']);
Route::get('persona/listar',[PersonaController::class, 'actListar']);
Route::get('persona/registrar',[PersonaController::class, 'actRegistrar']);
Route::get('persona/eliminar',[PersonaController::class, 'actEliminar']);
Route::get('persona/editar',[PersonaController::class, 'actEditar']);
Route::get('persona/guardarCambios',[PersonaController::class, 'actGuardarCambios']);
Route::get('persona/cambiarFirmador',[PersonaController::class, 'actCambiarFirmador']);
// plantilla : agrupacion de items
Route::get('plantilla/plantilla',[PlantillaController::class, 'actPlantilla']);
Route::get('plantilla/registrar',[PlantillaController::class, 'actRegistrar']);
Route::get('plantilla/listar',[PlantillaController::class, 'actListar']);
Route::get('plantilla/eliminar',[PlantillaController::class, 'actEliminar']);
Route::get('plantilla/show',[PlantillaController::class, 'actShow']);

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






