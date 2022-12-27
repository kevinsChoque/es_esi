<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TFactibilidad extends Model
{
    protected $table='factibilidad';
	protected $primaryKey='idFac';
	public $incrementing=true;
	public $timestamps=false;

    protected $fillable = [
        'solnro', 
        'idPersona',
        'fecha', 
        'motivo', 
        'estado', 
    ];
}
