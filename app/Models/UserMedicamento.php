<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMedicamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_usuario',
        'id_medicamento',
        'tipo_dosagem',
        'qtd_dosagem',
        'horario',
    ];
}
