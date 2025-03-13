<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentrosCivicos extends Model {
    use HasFactory;
    protected $fillable = ['nombre', 'direccion', 'telefono', 'email', 'horario'];
}
