<?php

namespace App\Models\ActivoFijo;

use App\Models\ActivoFijo\Activos\ActivoMobiliario;
use App\Models\ActivoFijo\Activos\ActivoTecnologia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $table = 'fotos';

    //Define la clave primaria
    protected $primaryKey = 'id';

    //especifica las columnas
    protected $fillable = [
        'id',
        'urlfoto',
        'tipo_activo'
    ];

    //Relaciones muchos a muchos
    public function activosmobiliarios()
    {
        return $this->belongsToMany(ActivoMobiliario::class);
    }
    public function activostecnologias()
    {
        return $this->belongsToMany(ActivoTecnologia::class);
    }
}
