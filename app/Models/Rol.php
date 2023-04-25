<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    public $table='rol';
    public $timestamps=false;
    protected $fillable =[
        'id_rol', 'descripcion'
    ];

    protected $primaryKey = 'id_rol';

    public function users()
    {
        return $this->hasMany(User::class);
    }

}
