<?php

namespace App\Livewire\ActivoFijo\Activos\ActivoTecnologias;

use Livewire\Component;
use App\Models\ActivoFijo\Activos\ActivoTecnologia;
use App\Models\ActivoFijo\Tipoactivo;
use App\Models\ActivoFijo\Anioestimado;

class Agregaracttec extends Component
{
    public $consulta;
    public $activo=[],$tipos=[],$anios=[];

    protected $rules = [
        'activo.nombre'=>'required',
        'activo.descripcion'=>'required',
        'activo.num_serie'=>'required',
        'activo.num_activo'=>'required',
        'activo.ubicacion_fisica'=>'required',
        'activo.fecha_adquisicion'=>'required',
        'activo.fecha_baja'=>'required',
        'activo.tipo'=>'required',
        'activo.precio_adquisicion'=>'required',
        'activo.anio'=>'required',
    ];

    protected $messages = [
        'activo.nombre.required'=>'Nombre es requerido',
        'activo.descripcion.required'=>'Descripcion es requerido',
        'activo.num_serie.required'=>'Numero de serie es requerido',
        'activo.num_activo.required'=>'Numero activo es requerido',
        'activo.ubicacion_fisica.required'=>'Ubicacion es requerido',
        'activo.fecha_adquisicion.required'=>'fecha es requerido',
        'activo.fecha_baja.required'=>'fecha es requerido',
        'activo.tipo.required'=>'Tipo es requerido',
        'activo.precio_adquisicion.required'=>'Precio es requerido',
        'activo.anio.required'=>'Año es requerido',
    ];

    public function mount()
    {
        //ejemplo de consulta
        $this->consulta = ActivoTecnologia::get();
        $this->tipos = Tipoactivo::pluck('nombre_activo', 'id')->toArray();
        $this->anios = Anioestimado::pluck('vida_util_año', 'id')->toArray();
    }

    public function saveActivoTec()
    {
        $this->validate();
    
        // Crear una nueva instancia de Sale y asignar los valores
        $AgregarActivo = new ActivoTecnologia();
        $AgregarActivo->nombre = $this->activo['nombre'];
        $AgregarActivo->descripcion = $this->activo['descripcion'];
        $AgregarActivo->num_serie = $this->activo['num_serie'];
        $AgregarActivo->num_activo = $this->activo['num_activo'];
        $AgregarActivo->ubicacion_fisica = $this->activo['ubicacion_fisica']; 
        $AgregarActivo->fecha_adquisicion = $this->activo['fecha_adquisicion']; 
        $AgregarActivo->fecha_baja = $this->activo['fecha_baja']; 
        $AgregarActivo->tipo_activo_id = $this->activo['tipo'];
        $AgregarActivo->precio_adquisicion = $this->activo['precio_adquisicion'];
        $AgregarActivo->aniosestimado_id = $this->activo['anio'];  
        $AgregarActivo->save();
    
        // Limpiar los datos de la venta después de guardar
        $this->activo = []; 
        
        return redirect()->to('/mostraractivotec');
    }




    public function render()
    {
        return view('livewire.activo-fijo.activos.activo-tecnologias.agregaracttec')->layout('layouts.navactivos');
    }
}
