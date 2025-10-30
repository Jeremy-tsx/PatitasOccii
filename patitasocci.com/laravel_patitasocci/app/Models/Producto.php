<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'productos';

    // Campos que pueden ser llenados de forma masiva
    protected $fillable = ['nombre', 'descripcion', 'precio', 'imagen'];
}
