<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DocController;
use App\Http\Controllers\SolController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PlantillaController;
use App\Http\Controllers\PresupuestoController;
use App\Http\Controllers\CpController;
use App\Http\Controllers\NumeroController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\FactibilidadController;
use App\Http\Controllers\MedicionController;

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
Route::get('solicitud/registrar',[SolController::class, 'actRegistrar']);
Route::get('solicitud/show',[SolController::class, 'actShow']);
Route::get('solicitud/geFactibilidad',[SolController::class, 'actGeFactibilidad']);
Route::get('solicitud/showFactibilidad',[SolController::class, 'actShowFactibilidad']);
Route::get('solicitud/listar',[SolController::class, 'actListar']);
// geFactibilidad
Route::get('factibilidad/factibilidad',[FactibilidadController::class, 'actFactibilidad']);
Route::get('factibilidad/listar',[FactibilidadController::class, 'actListar']);
Route::get('factibilidad/showLastFactibilidad',[FactibilidadController::class, 'actShowLastFactibilidad']);
Route::get('factibilidad/saveFacRep',[FactibilidadController::class, 'actSaveFacRep']);
Route::get('factibilidad/listarHistorial',[FactibilidadController::class, 'actListarHistorial']);
Route::get('factibilidad/saveDataFac',[FactibilidadController::class, 'actSaveDataFac']);
Route::get('factibilidad/show',[FactibilidadController::class, 'actShow']);
Route::get('factibilidad/guardarSegunSeaCaso',[FactibilidadController::class, 'actGuardarSegunSeaCaso']);
Route::get('factibilidad/download/{solnro}',[FactibilidadController::class, 'actDownload']);

// medicion
Route::get('medicion/medicion',[MedicionController::class, 'actMedicion']);
Route::get('medicion/listar',[MedicionController::class, 'actListar']);
Route::get('medicion/saveProMed',[MedicionController::class, 'actSaveProMed']);
Route::get('medicion/showLastMedicion',[MedicionController::class, 'actShowLastMedicion']);
Route::get('medicion/saveDataMed',[MedicionController::class, 'actSaveDataMed']);
Route::get('medicion/show',[MedicionController::class, 'actShow']);
Route::get('medicion/download/{solnro}',[MedicionController::class, 'actDownload']);

// crud de persona
Route::get('persona/persona',[PersonaController::class, 'actPersona']);
Route::get('persona/listar',[PersonaController::class, 'actListar']);
Route::get('persona/registrar',[PersonaController::class, 'actRegistrar']);
Route::get('persona/eliminar',[PersonaController::class, 'actEliminar']);
Route::get('persona/editar',[PersonaController::class, 'actEditar']);
Route::get('persona/guardarCambios',[PersonaController::class, 'actGuardarCambios']);
Route::get('persona/cambiarFirmador',[PersonaController::class, 'actCambiarFirmador']);
Route::get('persona/listarTecnicos',[PersonaController::class, 'actListarTecnicos']);

// plantilla : agrupacion de items
Route::get('plantilla/plantilla',[PlantillaController::class, 'actPlantilla']);
Route::get('plantilla/registrar',[PlantillaController::class, 'actRegistrar']);
Route::get('plantilla/listar',[PlantillaController::class, 'actListar']);
Route::get('plantilla/eliminar',[PlantillaController::class, 'actEliminar']);
Route::get('plantilla/show',[PlantillaController::class, 'actShow']);
Route::get('plantilla/editar',[PlantillaController::class, 'actEditar']);
Route::get('plantilla/guardarCambios',[PlantillaController::class, 'actGuardarCambios']);

// presupuesto para un usuario
Route::get('presupuesto/cuadroPresupuestal',[PresupuestoController::class, 'actCuadroPresupuestal']);
Route::get('presupuesto/registrar',[PresupuestoController::class, 'actRegistrar']);
Route::get('presupuesto/presupuesto',[PresupuestoController::class, 'actPresupuesto']);
Route::get('presupuesto/listar',[PresupuestoController::class, 'actListar']);
Route::get('presupuesto/eliminar',[PresupuestoController::class, 'actEliminar']);
Route::get('presupuesto/editCuadroPresupuestal',[PresupuestoController::class, 'actEditCuadroPresupuestal']);
Route::get('presupuesto/editCp',[PresupuestoController::class, 'actEditCp']);
Route::get('presupuesto/guardarCambios',[PresupuestoController::class, 'actGuardarCambios']);
Route::post('presupuesto/imprimir',[PresupuestoController::class, 'actImprimir']);
Route::get('presupuesto/print/{id}',[PresupuestoController::class, 'actPrint']);
Route::get('presupuesto/listoPresupuesto',[PresupuestoController::class, 'actListoPresupuesto']);
Route::get('presupuesto/listarListos',[PresupuestoController::class, 'actListarListos']);
Route::get('presupuesto/getDatos',[PresupuestoController::class, 'actGetDatos']);
//actividad o rendimiento
Route::get('cp/listar',[CpController::class, 'actListar']);
Route::get('cp/cp',[CpController::class, 'actCp']);
Route::get('cp/saveEditTarifa',[CpController::class, 'actSaveEditTarifa']);

//numero de documentos para autogenerar
Route::get('numero/numero',[NumeroController::class, 'actNumero']);
Route::get('numero/listar',[NumeroController::class, 'actListar']);
Route::get('numero/registrar',[NumeroController::class, 'actRegistrar']);
// cargos de personas
Route::get('cargo/listar',[CargoController::class, 'actListar']);





