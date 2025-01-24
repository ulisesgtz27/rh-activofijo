<?php

namespace App\Models\ActivoFijo\Activos;

use App\Models\ActivoFijo\Tipoactivo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivoPapeleria extends Model
{
    use HasFactory;
    protected $table = 'activos_papelerias';

    //Define la clave primaria
    protected $primaryKey = 'id';

    //especifica las columnas
    protected $fillable = [
        'id',
        'codigo_producto',
        'nombre',
        'marca',
        'tipo',
        'cantidad',
        'estado',
        'disponible',
        'fecha_adquisicion',
        'tipo_activo_id',
        'color',
        'precio_unitario',
        'foto'
    ];

    public function tipoactivo()
    {
        return $this->belongsTo(Tipoactivo::class);
    }
    public function usuarios()
    {
        return $this->belongsToMany(User::class);
    }
}
