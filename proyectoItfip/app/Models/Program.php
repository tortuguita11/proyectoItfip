<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $table = 'programa_academico';

    protected $fillable = [
        'id_prog_acad',
        'nombre_prog_acad',
        'codigo_prog_acad',
        'estado',
        'fecha_sistema',
    ];
}
