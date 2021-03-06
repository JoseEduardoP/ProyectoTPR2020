<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
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
}
