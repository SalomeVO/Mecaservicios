<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    public $table='cliente';
    public $timestamps=true;
    protected $fillable =[
        'nit', 'cnombre','capellido','ctelefono','cemail','cdireccion','num_servicios'
    ];

    protected $primaryKey = 'nit';

}
