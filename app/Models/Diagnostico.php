<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    use HasFactory;
    public function Doctor()
    {
        return $this->belongsTo('App\Models\Doctor');
    }
    public function Paciente()
    {
        return $this->belongsTo('App\Models\Paciente');
    }
    public function Enfermera()
    {
        return $this->belongsTo('App\Models\Enfermera');
    }
    public function Medicamentos()
    {
   return $this->belongsToMany('App\Models\Medicamentos', 'medicamentosxdiagnosticos');
}
}
