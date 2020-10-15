<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sintoma extends Model
{
    use HasFactory;
    public function Pacientes()
    {
   return $this->belongsToMany('App\Models\Paciente', 'pacientesxsintomas');
}
}
