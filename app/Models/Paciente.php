<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    public function Historial()
    {
        return $this->belongsTo('App\Models\Historial');
    }
    public function Sintomas()
     {
    return $this->belongsToMany('App\Models\Sintoma', 'pacientesxsintomas');
}
public function Consulta()
{
    return $this->hasOne('App\Models\Consulta');
}
public function Diagnostico()
{
    return $this->hasOne('App\Models\Diagnostico');
}
}

