<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\TPersona;

class PersonaController extends Controller
{
    public function agregarCampAdi($model,$act)
    {
        if($act)
        {
            $model->estado='1';
            $model->fechaRegistro=now();
        }
        else
        {
            $model->fechaActualizacion=now();
        }
        return $model->save();
    }
    public function actPersona(Request $req)
    {
    	return view('persona/persona');
    }
    public function actListar()
    {
        $registros = TPersona::select('persona.*')
            ->where('persona.estado','!=','-')
            ->orderBy('persona.idPersona', 'DESC')
            ->get();
        return response()->json([
                "data"=>$registros,
            ]);
    }
    public function actRegistrar(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'doc' => 'required|unique:persona,doc',
            'nombre' => 'required',
            'apellido' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                "validator"=>true,
                "msg"=>$validator->errors()->toJson(),
                "estado"=>false
            ]);
        }
        $tPersona=TPersona::create($req->all());
        if($this->agregarCampAdi($tPersona,1))
        {
            return response()->json([
                "msg"=>"Operacion exitosa.",
                "estado"=>true,
                "persona"=>$tPersona,
            ]);
        }
        return response()->json([
            "msg"=>"No fue posible registrar al conductor",
            "estado"=>false
        ]);
    }
    public function actEliminar(Request $req)
    {
        $tPersona = TPersona::find($req->id);
        if($tPersona->delete())
        {
            return response()->json([
                "msg"=>"Operacion exitosa.",
                "estado"=>true
            ]);
        }
        else
        {
            return response()->json([
                "msg"=>"No se pudo proceder.",
                "estado"=>false
            ]);
        }
    }
    public function actEditar(Request $req)
    {
        $registro = TPersona::find($req->id);
        return response()->json([
                "data"=>$registro,
            ]);
    }
    public function actGuardarCambios(Request $req)
    {
        $tPersona = TPersona::where('doc',$req->doc)->where('idPersona','!=',$req->idPersona)->first();
        if($tPersona!=null)
        {
            return response()->json([
                "msg"=>"El registro con ".$req->tipoDoc.": ".$req->doc." ya existe.",
                "estado"=>false
            ]);
        }
        $tPersona = TPersona::find($req->idPersona);
        $validator = Validator::make($req->all(), [
            'doc' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                "validator"=>true,
                "msg"=>$validator->errors()->toJson(),
                "estado"=>false
            ]);
        }
        // dd($tPersona);
        $tPersona->fill($req->all());
        if($tPersona->save() && $this->agregarCampAdi($tPersona,0))
        {
            return response()->json([
                "msg"=>"Operacion exitosa.",
                "estado"=>true
            ]);
        }
    }
    public function actCambiarFirmador(Request $req)
    {
        $tPersonaOld = TPersona::where('firma','1')->first();
        $tPersonaOld->firma='0';
        if($tPersonaOld->save())
        {
            $tPersona = TPersona::find($req->id);
            $tPersona->firma='1';
            if($tPersona->save())
            {
                return response()->json([
                    "msg"=>"Operacion exitosa.",
                    "estado"=>true
                ]);
            }
        }
        return response()->json([
            "msg"=>"No se pudo cambiar de personal.",
            "estado"=>false
        ]);
    }

}
