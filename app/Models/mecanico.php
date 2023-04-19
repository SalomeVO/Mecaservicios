<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mecanico extends Model
{
    use HasFactory;
    public $table='mecanico';
    public $timestamps=true;
    protected $fillable =[
        'id_mec', 'mnombre','disponibilidad'
    ];

    protected $primaryKey = 'id_mec';
}
