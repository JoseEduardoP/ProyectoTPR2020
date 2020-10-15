<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermera extends Model
{
    use HasFactory;

    public function Diagnostico()
    {
        return $this->hasOne('App\Models\Diagnostico');
    }}
