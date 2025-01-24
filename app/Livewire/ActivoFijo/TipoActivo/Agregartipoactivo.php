<?php

namespace App\Livewire\ActivoFijo\TipoActivo;

use Livewire\Component;
use App\Models\ActivoFijo\Tipoactivo;

class Agregartipoactivo extends Component
{
    public $nombretipo;
    public $consulta;

    public function mount()
    {
        $this->consulta = Tipoactivo::all(); // Obtener todos los tipos de activo
    }

    // Reglas de validación para el campo 'nombretipo'
    protected $rules = [
        'nombretipo' => 'required|string|max:255',
    ];

    protected $validationAttributes = [
        'nombretipo' => 'Name'
    ];

    public function agregarTipoActivo()
    {
        $this->validate();
        $tipo = Tipoactivo::create([
            'nombre_activo' => $this->nombretipo
        ]);
        return redirect()->to('/mostrartipoactivo');
    }

    public function render()
    {
        return view('livewire.activo-fijo.tipo-activo.agregartipoactivo')->layout('layouts.navactivos');
    }
}
