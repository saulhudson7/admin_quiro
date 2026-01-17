<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrucelModel extends Model
{
    protected $table = 'carrucel'; // tu tabla en la base de datos
    protected $fillable = ['titulo', 'descripcion', 'imagen'];
}



