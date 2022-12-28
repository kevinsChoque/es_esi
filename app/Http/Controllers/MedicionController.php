<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\TFactibilidad;
use App\Models\TDatafac;
use App\Models\TMedicion;
use App\Models\TDatamed;

class MedicionController extends Controller
{
    public function actMedicion(Request $req)
    {
    	return view('medicion.medicion');
    }
    public function actListar()
    {
        $registros = TDatafac::select('data_fac.*','solicitud.*','factibilidad.*','persona.*','data_med.estado as estadoMedicion')
        	->leftjoin('solicitud','solicitud.solnro','=','data_fac.solnrof')
        	->leftjoin('factibilidad','factibilidad.solnro','=','data_fac.solnrof')
        	->join('persona','persona.idPersona','=','factibilidad.idPersona')
            ->leftjoin('data_med','data_med.solnromedicion','=','data_fac.solnrof')
            ->where('data_fac.resultado','=','1')
            ->where('factibilidad.estado','=','1')
            // ->where('data_med.estado','=','1')
            ->orderBy('data_fac.idDf', 'DESC')
            ->get();
        // $registros = TDatafac::select('data_fac.*','solicitud.*')
        // 	->leftjoin('solicitud','solicitud.solnro','=','data_fac.solnrof')
        // 	->leftjoin('medicion','medicion.solnrom','=','data_fac.solnrof')
        //     ->where('data_fac.resultado','=','1')
        //     ->where('medicion.estado','=','1')
        //     ->orderBy('data_fac.idDf', 'DESC')
        //     ->get();
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
    public function actSaveDataMed(Request $req)
    {
        // dd($req->all());
        $td = TDatamed::where('solnromedicion',$req->solnromedicion)->first();
        $ban='';
        if($td==null)
        {
            $td = TDatamed::create($req->all());
            $ban = true;
            // return response()->json(["msg"=>"Operacion exitosa.","estado"=>true]);
        }
        else
        {
            $td->fill($req->all());
            if($td->save())
            {   $ban = true;}
            else
            {   $ban = false;}
        }
        if($td->estado=='1' && $ban==true)
        {
            // dd('llegohasta aki');
            $serverName = 'informatica2-pc\sicem_bd';
            $connectionInfo = array(
                "Database"=>"SICEM_AB",
                "UID"=>"es_esi",
                "PWD"=>"@emusap1@",
                "CharacterSet"=>"UTF-8"
            );
            $conn_sis = sqlsrv_connect($serverName,$connectionInfo);
            if($conn_sis)
            {
                // dd('entro');
                $sql = "EXECUTE testEsi '$req->solnromedicion', '4';";
                if($stmt = sqlsrv_query($conn_sis, $sql))
                {   return response()->json(["msg"=>"Operacion exitosa.","estado"=>true]);}
                else
                {   return response()->json(["msg"=>"Paso algo al momento de ejecutar procedimiento.","estado"=>true]);}
            }
            else
            {   return response()->json(["msg"=>"Error en la conexion a la BD principal.","estado"=>true]);}
        }
        if($ban)
        {   return response()->json(["msg"=>"Operacion exitosa.","estado"=>true]);}
    }
}
