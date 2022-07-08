<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puerto extends Model
{
    // id_puerto / id_cliente / categoria / creado_por / fecha_creacion
    protected $fillable = ['id_puerto', 'id_cliente', "categoria", "creado_por"];
    use HasFactory;
}
