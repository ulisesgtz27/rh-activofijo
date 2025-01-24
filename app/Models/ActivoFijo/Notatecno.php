<?php

namespace App\Models\ActivoFijo;

use App\Models\ActivoFijo\Activos\ActivoTecnologia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notatecno extends Model
{
    use HasFactory;
    protected $table = 'notastecnologias';

    //Define la clave primaria
    protected $primaryKey = 'id';

    //especifica las columnas
    protected $fillable = [
        'id',
        'descripcion'
    ];

    //Relacion muchos a muchos
    public function activotecnologias()
    {
        return $this->belongsToMany(ActivoTecnologia::class);
    }
}
