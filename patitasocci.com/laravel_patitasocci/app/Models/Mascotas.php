<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    use HasFactory;

    protected $table = 'mascotas';
    protected $prymarykey = '0';

    protected $fillable = [
        'nombre',
        'edad',
        'edad_',
        'raza',
        'color',
        'tamano',
        'historia',
        'estado',
        'tipo',
        'foto',
        'fecha_ingreso',
        'id_refugio',
        'updated_at',
        'sexo',
    ];
}

