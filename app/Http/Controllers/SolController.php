<?php

namespace App\Http\Controllers;

use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Http\Request;
use App\Models\TSolicitud;
use App\Models\TNumero;

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
        $tp->setValue('solnro',$req->solnroSend);
		$tp->setValue('solnombre',$req->solnombre);
		$tp->setValue('soltipcal',$req->soltipcal);
		$tp->setValue('soldirec',$req->soldirec);
		$tp->setValue('soldirnro',$req->soldirnro);
		$tp->setValue('soldircom',$req->soldircom);
		$tp->setValue('solurban',$req->solurban);
		$tp->setValue('solelect',$req->solelect);
		$tp->setValue('solfex',$req->solfex);
		$tp->setValue('soltelef',$req->soltelef);
		// $tp->setValue('dateVencimiento',str_replace('-','/',date("d-m-Y",strtotime($dateActual."+ 1 month"))));
		$tp->setValue('hora',$req->docHora);
        // ------------------------
        $tNumero = TNumero::where('documento','Solicitud')->first();
        if($tNumero->estado=='1')
        {
            if($tNumero->numeroActual=='0')
            {
                $numeroSolicitud=(int)$tNumero->numero+1;
            }
            else
            {
                $numeroSolicitud=(int)$tNumero->numeroActual+1;
            }
            $tp->setValue('numeroSolicitud',date("Y").'-'.$numeroSolicitud);
            $tNumero->numeroActual = $numeroSolicitud;
            $tNumero->save();
        }
        else
        {
            $tp->setValue('numeroSolicitud','');
        }

        $ts = TSolicitud::find($req->solnroSend);
        if($ts!=null)
        {
            // 'solnro',
            // $tp->setValue('dateVencimiento',$ts->fechaVencimiento);
            $tp->setValue('repnombre',$ts->nombreRep=='' || $ts->nombreRep==null?'':$ts->nombreRep);
            $tp->setValue('repdni',$ts->dniRep=='' || $ts->dniRep==null?'':$ts->dniRep);
            $tp->setValue('repcorreo',$ts->correoRep=='' || $ts->correoRep==null?'':$ts->correoRep);
            $tp->setValue('repdireccion',$ts->domicilioRep=='' || $ts->domicilioRep==null?'':$ts->domicilioRep);
            $tp->setValue('repnumero',$ts->numeroRep=='' || $ts->numeroRep==null?'':$ts->numeroRep);
            $tp->setValue('repmanzana',$ts->manzanaRep=='' || $ts->manzanaRep==null?'':$ts->manzanaRep);
            $tp->setValue('replote',$ts->loteRep=='' || $ts->loteRep==null?'':$ts->loteRep);
            $tp->setValue('repurban',$ts->urbanizacionRep=='' || $ts->urbanizacionRep==null?'':$ts->urbanizacionRep);
            // 'tipoPredio',
            $tp->setValue('preo1',$ts->tipoPredio=='En construccion' ? 'X': '');
            $tp->setValue('preo2',$ts->tipoPredio=='Habilitado' ? 'X': '');
            $tp->setValue('preo3',$ts->tipoPredio=='Otros' ? 'X': '');

            $tp->setValue('preubicacion',$ts->ubicacionPre=='' || $ts->ubicacionPre==null?'':$ts->ubicacionPre);
            $tp->setValue('prenumero',$ts->numeroPre=='' || $ts->numeroPre==null?'':$ts->numeroPre);
            $tp->setValue('premanzana',$ts->manzanaPre=='' || $ts->manzanaPre==null?'':$ts->manzanaPre);
            $tp->setValue('prelote',$ts->lotePre=='' || $ts->lotePre==null?'':$ts->lotePre);
            $tp->setValue('prereferencia',$ts->referenciaPre=='' || $ts->referenciaPre==null?'':$ts->referenciaPre);

            $tp->setValue('pban1',$ts->ts1=='true' ? 'X': '');
            $tp->setValue('pban2',$ts->ts2=='true' ? 'X': '');
            // 'categoria',
            $tp->setValue('pcat1',$ts->categoria=='Domestico' ? 'X': '');
            $tp->setValue('pcat2',$ts->categoria=='Social' ? 'X': '');
            $tp->setValue('pcat3',$ts->categoria=='Comercial y Otros' ? 'X': '');
            $tp->setValue('pcat4',$ts->categoria=='Industrial' ? 'X': '');
            $tp->setValue('pcat5',$ts->categoria=='Estatal' ? 'X': '');
            // 'usoServicio',
            $tp->setValue('puso1',$ts->usoServicio=='Permanente' ? 'X': '');
            $tp->setValue('puso2',$ts->usoServicio=='Temporal' ? 'X': '');
            $tp->setValue('pmeses',$ts->numeroMeses=='' || $ts->numeroMeses==null?'':$ts->numeroMeses);
            
            $tp->setValue('item1',$ts->item1=='true' ? 'X': '');
            $tp->setValue('item2',$ts->item2=='true' ? 'X': '');
            $tp->setValue('item3',$ts->item3=='true' ? 'X': '');
            $tp->setValue('item4',$ts->item4=='true' ? 'X': '');
            $tp->setValue('item5',$ts->item5=='true' ? 'X': '');
            $tp->setValue('item6',$ts->item6=='true' ? 'X': '');

            $tp->setValue('otros',$ts->otros=='' || $ts->otros==null?'':$ts->otros);

        }
        else
        {
            // $tp->setValue('dateVencimiento',str_replace('-','/',date("d-m-Y",strtotime($dateActual."+ 1 month"))));
            $tp->setValue('repnombre','');
            $tp->setValue('repdni','');
            $tp->setValue('repcorreo','');
            $tp->setValue('repdireccion','');
            $tp->setValue('repnumero','');
            $tp->setValue('repmanzana','');
            $tp->setValue('replote','');
            $tp->setValue('repurban','');
            // 'tipoPredio',
            $tp->setValue('preo1','');
            $tp->setValue('preo2','');
            $tp->setValue('preo3','');

            $tp->setValue('preubicacion','');
            $tp->setValue('prenumero','');
            $tp->setValue('premanzana','');
            $tp->setValue('prelote','');
            $tp->setValue('prereferencia','');

            $tp->setValue('pban1','');
            $tp->setValue('pban2','');
            // 'categoria',
            $tp->setValue('pcat1','');
            $tp->setValue('pcat2','');
            $tp->setValue('pcat3','');
            $tp->setValue('pcat4','');
            $tp->setValue('pcat5','');
            // 'usoServicio',
            $tp->setValue('puso1','');
            $tp->setValue('puso2','');
            $tp->setValue('pmeses','');

            $tp->setValue('item1','');
            $tp->setValue('item2','');
            $tp->setValue('item3','');
            $tp->setValue('item4','');
            $tp->setValue('item5','');
            $tp->setValue('item6','');

            $tp->setValue('otros','');
        }
        // $newFecha=explode("-", $ts->fechaVencimiento);
        // $fecha1=$newFecha[2].'/'.$newFecha[1].'/'.$newFecha[0];
        $fechaDefecto=str_replace('-','/',date("d-m-Y",strtotime($dateActual."+ 1 month")));
        $tp->setValue('dateVencimiento',$ts!=null && $ts->fechaVencimiento!='' && $ts->fechaVencimiento!=null ? explode("-", $ts->fechaVencimiento)[2].'/'.explode("-", $ts->fechaVencimiento)[1].'/'.explode("-", $ts->fechaVencimiento)[0]:$fechaDefecto);

        $tp->setValue('solfirmador',$ts!=null && $ts->nombreRep!='' && $ts->nombreRep!=null && $ts->dniRep!='' && $ts->dniRep!=null?$ts->nombreRep:$req->solnombre);
        $tp->setValue('solfirmadni',$ts!=null && $ts->nombreRep!='' && $ts->nombreRep!=null && $ts->dniRep!='' && $ts->dniRep!=null?$ts->dniRep:$req->solelect);
        // $tp->setValue('solnombre','$req->solnombre');
        // ---------------------

        $fileName='solicitud.docx';
        $tp->saveAs($fileName);
        return response()->download($fileName)->deleteFileAfterSend(true);
    }
    public function actRegistrar(Request $req)
    {
        // dd($req->all());
        $ts = TSolicitud::find($req->solnro);
        if($ts==null)
        {
            $ts=TSolicitud::create($req->all());
            return response()->json([
                "msg"=>"Operacion exitosa.",
                "estado"=>true
            ]);
        }
        else
        {
            $ts->fill($req->all());
            if($ts->save())
            {
                return response()->json([
                    "msg"=>"Operacion exitosa.",
                    "estado"=>true
                ]);
            }
        }
    }
    public function actShow(Request $req)
    {
        $ts = TSolicitud::find($req->solnro);
        if($ts!=null)
            return response()->json(["data"=>$ts,"estado"=>true]);
        else
            return response()->json(["data"=>"","estado"=>false]);
    }
    
}
