<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public $table = "roles"; // hace referencia a la tabla cliente de la bd
    public $primaryKey = "roles_id";
    public $filiable = [
        'nombre', 'created_at', 'updated_at'
    ];
    public $timestamps = false;
}
