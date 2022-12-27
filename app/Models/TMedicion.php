<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TMedicion extends Model
{
    protected $table='medicion';
	protected $primaryKey='idMedicion';
	public $incrementing=true;
	public $timestamps=false;

    protected $fillable = [
        'solnrom', 
        'idPersona',
        'fecha', 
        'motivo', 
        'estado', 
    ];
}
