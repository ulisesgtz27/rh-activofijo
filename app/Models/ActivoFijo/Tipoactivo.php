<?php

namespace App\Models\ActivoFijo;

use App\Models\ActivoFijo\Activos\ActivoMobiliario;
use App\Models\ActivoFijo\Activos\ActivoOficina;
use App\Models\ActivoFijo\Activos\ActivoPapeleria;
use App\Models\ActivoFijo\Activos\ActivoTecnologia;
use App\Models\ActivoFijo\Activos\ActivoUniforme;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipoactivo extends Model
{
    use HasFactory;
    protected $table = 'tipo_activos';

    //Define la clave primaria
    protected $primaryKey = 'id';

    //especifica las columnas
    protected $fillable = [
        'id',
        'nombre_activo'
    ];

    public function anioestimado()
    {
        return $this->hasMany(Anioestimado::class); // Una venta pertenece a un cliente
    }
    public function activouniforme()
    {
        return $this->hasMany(ActivoUniforme::class); // Una venta pertenece a un cliente
    }
    public function activopapeleria()
    {
        return $this->hasMany(ActivoPapeleria::class);
    }
    public function activooficina()
    {
        return $this->hasMany(ActivoOficina::class);
    }
    public function activotecnologia()
    {
        return $this->hasMany(ActivoTecnologia::class);
    }
    public function activomobiliario()
    {
        return $this->hasMany(ActivoMobiliario::class);
    }
}
