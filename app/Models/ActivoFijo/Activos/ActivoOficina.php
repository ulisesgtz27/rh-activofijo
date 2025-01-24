<?php

namespace App\Models\ActivoFijo\Activos;

use App\Models\ActivoFijo\Anioestimado;
use App\Models\ActivoFijo\Tipoactivo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivoOficina extends Model
{
    use HasFactory;
    protected $table = 'activos_oficinas';

    //Define la clave primaria
    protected $primaryKey = 'id';

    //especifica las columnas
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'numero_activo',
        'ubicacion_fisica',
        'tipo_activo_id',
        'fecha_adquisicion',
        'fecha_baja',
        'precio_adquisicion',
        'aniosestimado_id'
    ];

    public function tipoactivo()
    {
        return $this->belongsTo(Tipoactivo::class);
    }

    public function anioestimado()
    {
        return $this->belongsTo(Anioestimado::class);
    }

    public function usuarios()
    {
        return $this->belongsToMany(User::class);
    }
}
