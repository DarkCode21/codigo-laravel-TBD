<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'persona';
    protected $primaryKey = 'nPerCodigo'; 
    public $incrementing = true;
    protected $fillable = [
        'cPerApellido', 'cPerNombre', 'cPerDireccion', 'dPerFechaNac', 'nPerEdad', 'nPerSueldo',
    ];
}
