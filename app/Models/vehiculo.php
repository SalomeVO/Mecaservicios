<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    use HasFactory;
    public $table='vehiculo';
    public $timestamps=true;
    protected $fillable =[
        'placa', 'marca','linea','modelo','nit_cliente'
    ];

    protected $primaryKey = 'placa';
}
