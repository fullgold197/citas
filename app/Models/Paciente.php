<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public $table = "pacientes"; // hace referencia a la tabla cliente de la bd
    public $primaryKey = "pacientes_id";
    public $fillable = [
        'nro_historia',
    ];
    public $timestamps = true;
    //use HasFactory;
}
