<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    protected $table='Carrera';
    public $primaryKey='idCarrera';
    public $fillable=['nombre'];

    public function estudiantes() {
        //                                   id_carrera(fk),id (local)
        return $this->hasMany(Estudiante::class,'idCarrera','idCarrera');
    }
}
