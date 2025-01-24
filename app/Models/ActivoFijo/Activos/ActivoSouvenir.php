<?php

namespace App\Models\ActivoFijo\Activos;

use App\Models\ActivoFijo\Anioestimado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivoSouvenir extends Model
{
    use HasFactory;
    protected $table = 'activos_souvenirs';

    //Define la clave primaria
    protected $primaryKey = 'id';

    //especifica las columnas
    protected $fillable = [
        'id',
        'codigo',
        'productos',
        'descripcion',
        'color',
        'medida',
        'marca',
        'precio',
        'estado',
        'disponible',
        'fecha_adquisicion',
        'aniosestimado_id',
        'foto'
    ];

    public function anioestimado()
    {
        return $this->belongsTo(Anioestimado::class);
    }
}
