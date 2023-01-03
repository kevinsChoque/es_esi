<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use DB;
use App\Models\TCliente;
use App\Models\TPersona;

class DocController extends Controller
{
    public function actDoc(Request $req)
    {
    	return view('doc.doc');
    }
    public function actListar(Request $req)
    {
        // $serverName = 'localhost';

        // $connectionInfo = array("Database"=>"Amigos","UID"=>"kevins","PWD"=>"@emusap1@","CharacterSet"=>"UTF-8");
        // $conn_sis = sqlsrv_connect($serverName,$connectionInfo);
        // if($conn_sis)
        // {
        //     echo("con exitosa");
        //     echo "<br>";
        //     $tsql = "select * from dbo.cliente";  
        //     $stmt = sqlsrv_query($conn_sis, $tsql);  
        //     while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        //         echo $row['nombre'].", ".$row['apellido']."<br />";
        //     }
        // }
        // else
        // {
        //     echo("fallo");
        //     die(print_r(sqlsrv_errors(),true));
        // }
        // exit();
        // -------------------
        // $query = DB::table('dbo.cliente')->get();
        // dd($query);
        // -------------------
    	$sql = "select * from cliente";

        $data=DB::select($sql);

        // return view('doc.doc',['data'=>$data]);

        return response()->json(["data"=>$data]);

    }
    public function actDownload(Request $req)
    {
    	// dd($req->all());
    	$firmador = TPersona::where('firma','1')->first();
    	// echo($tCliente);exit();

        setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
        $tp = new TemplateProcessor('plantillas/contrato.docx');
        // dd($tp);
        // $tp = new TemplateProcessor('word-template/informe.docx');
        // $tInforme = TInforme::find($idInforme);
        // $dia = $tInforme->fechaRegistro;
        // $fecha = strftime("%d de %B de %Y", strtotime($dia));
        // $anio = strftime("%Y", strtotime($dia));
        // if($tCliente!=null)
        // {
        $tp->setValue('inscrinro',$req->inscrinro);
        $tp->setValue('firmador',$firmador->nombre.' '.$firmador->apellido);
        $tp->setValue('nombre',$req->docNombre);
        $tp->setValue('dni',$req->docDni);
        $tp->setValue('hora',$req->docHora);

        $tp->setValue('caldes',$req->caldes);
        $tp->setValue('caltip',$req->caltip);
        $tp->setValue('prenro',$req->prenro);
        $tp->setValue('nomfircon',$req->nomfircon);
        $tp->setValue('urbdes',$req->urbdes);
        $tp->setValue('urbtip',$req->urbtip);
        // ---------------------------------
        $serverName = 'informatica2-pc\sicem_bd';
        $connectionInfo = array(
            "Database"=>"SICEM_AB",
            "UID"=>"comercial",
            "PWD"=>"1",
            "CharacterSet"=>"UTF-8"
        );
        $conn_sis = sqlsrv_connect($serverName,$connectionInfo);
        if($conn_sis)
        {
            $ppp='00012628';
            dd($req->inscrinro);
            $tsql = "select * from CREDITOS where InscriNrc='$req->inscrinro'";
            $stmt = sqlsrv_query($conn_sis, $tsql); 
            $arreglo = array(); 
            $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
            dd($row);
            
            // while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
            // {
            //     $arreglo[] = $row;
            //     dd($row["CredNro"]);
            // }
        }
        // dd($arreglo[0]);
        // ---------------------------------
            


        // $fileName='contrato.docx';
        // $tp->saveAs($fileName);
        // return response()->download($fileName)->deleteFileAfterSend(true);
    }
}
