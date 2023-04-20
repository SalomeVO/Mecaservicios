<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class repuesto extends Model
{
    use HasFactory;
    public $table='repuesto';
    public $timestamps=false;
    protected $fillable =[
        'id_repuesto', 'rnombre','rcantidad','rprecio','stock_min'
    ];

    protected $primaryKey = 'id_repuesto';
}
