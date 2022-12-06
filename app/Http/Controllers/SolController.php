<?php

namespace App\Http\Controllers;

use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Http\Request;

class SolController extends Controller
{
    public function actSol(Request $req)
    {
    	return view('solicitud.solicitud');
    }
    public function actDownload(Request $req)
    {
    	$dateActual = date("d-m-Y");
    	// dd($req->all());
        setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
        $tp = new TemplateProcessor('plantillas/solicitud.docx');
        // ----------------------
        $tp->setValue('solnro',$req->solnro);
		$tp->setValue('solnombre',$req->solnombre);
		$tp->setValue('soltipcal',$req->soltipcal);
		$tp->setValue('soldirec',$req->soldirec);
		$tp->setValue('soldirnro',$req->soldirnro);
		$tp->setValue('soldircom',$req->soldircom);
		$tp->setValue('solurban',$req->solurban);
		$tp->setValue('solelect',$req->solelect);
		$tp->setValue('solfex',$req->solfex);
		$tp->setValue('soltelef',$req->soltelef);
		$tp->setValue('dateVencimiento',str_replace('-','/',date("d-m-Y",strtotime($dateActual."+ 1 month"))));

		$tp->setValue('hora',$req->docHora);

        $fileName='solicitud.docx';
        $tp->saveAs($fileName);
        return response()->download($fileName)->deleteFileAfterSend(true);
    }
    
}
