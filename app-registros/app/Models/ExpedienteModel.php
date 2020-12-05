<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpedienteModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'idexpediente','numero_expediente','asunto','numero_documento','folios','remitente','prioridad','uo_destino','estado','observacion'
    ];
}
