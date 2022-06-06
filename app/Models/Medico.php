<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    public $table = "medicos"; // hace referencia a la tabla cliente de la bd
    public $primaryKey = "medicos_id";
    public $fillable = [
        'nro_colegiatura',
    ];
    public $timestamps = true;
    //use HasFactory;
}
