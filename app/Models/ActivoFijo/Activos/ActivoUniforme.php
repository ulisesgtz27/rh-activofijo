<?php

namespace App\Models\ActivoFijo\Activos;

use App\Models\ActivoFijo\Tipoactivo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivoUniforme extends Model
{
    use HasFactory;
    protected $table = 'activos_uniformes';

    //Define la clave primaria
    protected $primaryKey = 'id';

    //especifica las columnas
    protected $fillable = [
        'id',
        'descripcion',
        'talla',
        'cantidad',
        'estado',
        'disponible',
        'fecha_adquisicion',
        'observaciones',
        'tipo_activo_id',
        'color',
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
