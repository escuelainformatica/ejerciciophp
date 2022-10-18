<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $table='Estudiante';
    public $primaryKey='idEstudiante';
    public $fillable=['rut','nombre','idCarrera'];

    public function carrera() {
        //                                   id_carrera(fk),id (local)
        return $this->hasOne(Carrera::class,'idCarrera','idCarrera');
    }

}
