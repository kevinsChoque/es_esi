<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TFactibilidad;
use App\Models\TDatafac;

class FactibilidadController extends Controller
{
    public function actFactibilidad(Request $req)
    {
    	return view('factibilidad.factibilidad');
    }
    public function actListar()
    {
        $registros = TFactibilidad::select('factibilidad.*','solicitud.*','persona.*','data_fac.*')
            ->leftjoin('solicitud','solicitud.solnro','=','factibilidad.solnro')
            ->join('persona','persona.idPersona','=','factibilidad.idPersona')
            ->leftjoin('data_fac','data_fac.solnrof','=','factibilidad.solnro')
            ->where('factibilidad.estado','=','1')
            ->orderBy('factibilidad.idFac', 'DESC')
            ->get();
        return response()->json([
            "data"=>$registros,
        ]);
    }
    public function actShowLastFactibilidad(Request $req)
    {
        // dd($req->all());
        $tf = TFactibilidad::where('solnro',$req->solnro)->orderBy('idFac','desc')->first();
        // dd($tf);
        if($tf!=null)
            return response()->json(["data"=>$tf,"estado"=>true]);
        else
            return response()->json(["data"=>"","estado"=>false]);
    }
    public function actSaveFacRep(Request $req)
    {
        $tfOld = TFactibilidad::where('solnro',$req->solnro)->orderBy('idFac','desc')->first();
        $tfOld->estado = '0';
        if($tfOld->save())
        {
            $req['estado'] = 1;
            $tf=TFactibilidad::create($req->all());
            if($tf!=null)
            {   return response()->json(["msg"=>"Operacion exitosa.","estado"=>true]);}
            else
            {   return response()->json(["msg"=>"Ocurrio un problema.","estado"=>false]);}
        }
    }
    public function actListarHistorial(Request $req)
    {
        $registros = TFactibilidad::select('factibilidad.*','solicitud.*','persona.*')
            ->leftjoin('solicitud','solicitud.solnro','=','factibilidad.solnro')
            ->join('persona','persona.idPersona','=','factibilidad.idPersona')
            // ->where('factibilidad.estado','=','1')
            ->where('factibilidad.solnro','=',$req->solnro)
            ->orderBy('factibilidad.idFac', 'DESC')
            ->get();
        return response()->json([
            "data"=>$registros,
        ]);
    }
    // actSaveDataFac
    public function actSaveDataFac(Request $req)
    {
        // dd($req->all());
        $td = TDatafac::where('solnrof',$req->solnrof)->first();
        $ban='';
        if($td==null)
        {
            $td = TDatafac::create($req->all());
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
        if($td->resultado=='1' && $ban==true)
        {

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
                $sql = "EXECUTE testEsi '$req->solnrof', '3';";
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
    public function actShow(Request $req)
    {
        $td = TDatafac::where('solnrof',$req->solnro)->first();
        if($td!=null)
            return response()->json(["data"=>$td,"estado"=>true]);
        else
            return response()->json(["data"=>"","estado"=>false]);
    }
    
}
