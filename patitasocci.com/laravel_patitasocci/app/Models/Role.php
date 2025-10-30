<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
        // Especifica la tabla si no sigue la convención de nombres
        protected $table = 'roles';

        // Define los campos que se pueden llenar de manera masiva
        protected $fillable = [
            'name',
        ];
}
