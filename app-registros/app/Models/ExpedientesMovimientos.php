<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpedientesMovimientos extends Model
{
    use HasFactory;
  
    protected $fillable = ["area","responsable"];

    

}
