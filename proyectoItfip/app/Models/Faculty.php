<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $table = 'facultades';

    protected $fillable = [
        'id_facultades',
        'nombre_facultad',
        'siglas_nomb_facu',
        'estado',
        'fecha_sistema'
    ];
}
