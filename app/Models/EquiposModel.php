<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquiposModel extends Model
{
    use HasFactory;
    protected $table= "equipos";
    protected $fillable = [
        "nombre",
        "descripcion",
        "precio"
    ];

}
