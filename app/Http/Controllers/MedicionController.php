<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\TFactibilidad;
use App\Models\TDatafac;
use App\Models\TMedicion;

class MedicionController extends Controller
{
    public function actMedicion(Request $req)
    {
    	return view('medicion.medicion');
    }
    public function actListar()
    {
        // $registros = TFactibilidad::select('factibilidad.*','solicitud.*','persona.*','data_fac.*')
        //     ->leftjoin('solicitud','solicitud.solnro','=','factibilidad.solnro')
        //     ->join('persona','persona.idPersona','=','factibilidad.idPersona')
        //     ->leftjoin('data_fac','data_fac.solnrof','=','factibilidad.solnro')
        //     ->where('factibilidad.estado','=','1')
        //     ->orderBy('factibilidad.idFac', 'DESC')
        //     ->get();
        $registros = TDatafac::select('data_fac.*','solicitud.*','factibilidad.*','persona.*')
        	->leftjoin('solicitud','solicitud.solnro','=','data_fac.solnrof')
        	->leftjoin('factibilidad','factibilidad.solnro','=','data_fac.solnrof')
        	->join('persona','persona.idPersona','=','factibilidad.idPersona')
        	// ->leftjoin('medicion','medicion.solnrom','=','solicitud.solnro')
            ->where('data_fac.resultado','=','1')
            ->where('factibilidad.estado','=','1')
            ->orderBy('data_fac.idDf', 'DESC')
            ->get();
        return response()->json([
            "data"=>$registros,
        ]);
    }
    // actSaveMedicion
    public function actSaveMedicion(Request $req)
    {
        $tm = TMedicion::where('solnrom',$req->solnrom)->first();
        if($tm==null)
        {
        	$req['estado'] = 1;
        	$tm=TMedicion::create($req->all());
            if($tm!=null)
            {   return response()->json(["msg"=>"Operacion exitosa.","estado"=>true]);}
            else
            {   return response()->json(["msg"=>"Ocurrio un problema.","estado"=>false]);}
        }
        else
        {
        	$tmOld = TMedicion::where('solnrom',$req->solnrom)->orderBy('idMedicion','desc')->first();
        	$tmOld->estado = '0';
        	if($tmOld->save())
        	{
        		$req['estado'] = 1;
	        	$tm=TMedicion::create($req->all());
	            if($tm!=null)
	            {   return response()->json(["msg"=>"Operacion exitosa.","estado"=>true]);}
	            else
	            {   return response()->json(["msg"=>"Ocurrio un problema.","estado"=>false]);}
        	}
        }
    }
    public function actShowLastMedicion(Request $req)
    {
        // dd($req->all());
        $tm = TMedicion::where('solnrom',$req->solnro)->orderBy('idMedicion','desc')->first();
        // dd($tm);
        if($tm!=null)
            return response()->json(["data"=>$tm,"estado"=>true]);
        else
            return response()->json(["data"=>"","estado"=>false]);
    }
}
