<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trabajador extends Model
{
    use HasFactory;
    public $table='trabajador';
    public $timestamps=false;
    protected $fillable =[
        'tnum', 'contrasenia','tnombre','tapellido','rol_id'
    ];

    protected $primaryKey = 'tnum';
}
