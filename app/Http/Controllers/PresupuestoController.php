<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TPresupuesto;
use App\Models\TDetalle;

class PresupuestoController extends Controller
{
	public function actCuadroPresupuestal(Request $req)
    {
    	return view('presupuesto.cuadroPresupuestal');
    }
    public function actPresupuesto(Request $req)
    {
    	return view('presupuesto.presupuesto');
    }
	public function agregarCampAdi($model,$act,$req)
    {
        if($act)
        {$model->fr=now();}
        else
        {$model->fa=now();}
        return $model->save();
    }
    public function saveEditDetalle($req,$idPre)
    {
        $detalles=TDetalle::where('idPre',$idPre)->get();
        if($detalles!=null)
        {
            foreach ($detalles as $detalle) 
            {
                if(!$detalle->delete())
                {
                    return false;
                }
            }
        }
        return $this->saveDetalle($req,$idPre);
        // return true;
    }
    public function saveDetalle($req,$idPre)
    {
        // dd($req->all());
        if($req->ids!=null)
        {
            for ($i=0; $i < count($req->ids); $i++) 
            { 
            	$d=new TDetalle();
                $d->idPre=$idPre;
                $d->idCp=$req->ids[$i];
                $d->codigoCp=$req->cods[$i];
                $d->cantidad=$req->cantidades[$i];
                if(!$d->save())
                {
                    return false;
                }
            }
        }
        return true;
    }
    public function actRegistrar(Request $req)
    {
    	$tPre=TPresupuesto::create($req->all());
        if($this->agregarCampAdi($tPre,1,$req))
        {
            if($this->saveDetalle($req,$tPre->idPre))
            {
                return response()->json([
                    "msg"=>"Operacion exitosa.",
                    "estado"=>true
                ]);
            }
        }
        return response()->json([
            "msg"=>"No fue posible registrar la empresa.",
            "estado"=>false
        ]);
    }
    public function actListar()
    {
    	$list=TPresupuesto::all();
    	return response()->json([
            "data"=>$list,
        ]);
    }
    public function actEliminar(Request $req)
    {
        $tPre = TPresupuesto::find($req->id);
        if($tPre->delete())
        {return response()->json(["msg"=>"Operacion exitosa.","estado"=>true]);}
        else
        {return response()->json(["msg"=>"No se pudo proceder.","estado"=>false]);}
    }
    public function actEditCuadroPresupuestal(Request $req)
    {
    	return view('presupuesto.editCuadroPresupuestal');
    }
    public function actEditCp(Request $req)
    {
        $tPre = TPresupuesto::find($req->id);
        // $listDetalle = TDetalle::where('idPre',$req->id)->get();
        $listDetalle = TDetalle::select('*')
            ->join('cuadro_presupuestal', 'cuadro_presupuestal.idCp', '=', 'detalle.idCp')
            ->where('detalle.idPre',$req->id)
            ->orderby('detalle.idDetalle','desc')
            ->get();
        // dd($req->id);
        return response()->json([
            "reg"=>$tPre,
            'listDetalle'=>$listDetalle,
        ]);
        // dd($req->id);
    }
    public function actGuardarCambios(Request $req)
    {
        // dd($req->all());
        $tPre = TPresupuesto::find($req->idPresupuesto);
        // dd($tPre);
        $tPre->fill($req->all());
        if($tPre->save() && $this->agregarCampAdi($tPre,0,$req))
        {
            if($this->saveEditDetalle($req,$tPre->idPre))
            {
                return response()->json([
                    "msg"=>"Operacion exitosa.",
                    "estado"=>true
                ]);
            }
        }
        // dd($req->all());
    }

}
