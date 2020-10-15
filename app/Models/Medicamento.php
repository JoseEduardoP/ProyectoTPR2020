<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;
    public function Diagnosticos()
    {
   return $this->belongsToMany('App\Models\Diagnostico', 'medicamentosxdiagnosticos');
}
}
