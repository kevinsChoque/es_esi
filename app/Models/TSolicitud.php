<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TSolicitud extends Model
{
    protected $table='solicitud';
	protected $primaryKey='solnro';
	public $incrementing=true;
	public $timestamps=false;

    protected $fillable = [
    	'solnro',
        'fechaVencimiento',
		'nombreRep',
		'dniRep',
		'correoRep',
		'domicilioRep',
		'numeroRep',
		'manzanaRep',
		'loteRep',
		'urbanizacionRep',
		'tipoPredio',
		'ubicacionPre',
		'numeroPre',
		'manzanaPre',
		'lotePre',
		'referenciaPre',
		'ts1',
		'ts2',
		'categoria',
		'usoServicio',
		'numeroMeses',
		'item1',
		'item2',
		'item3',
		'item4',
		'item5',
		'item6',
		'otros',
    ];
}