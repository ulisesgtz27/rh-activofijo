<?php

namespace App\Livewire\ActivoFijo\TipoActivo;

use App\Models\ActivoFijo\Tipoactivo;
use Livewire\Component;

class Mostrartipoactivo extends Component
{
    // public function deleteTipoActivo($id)
    // {
    //     Tipoactivo::findOrFail($id)->delete();
    //     $this->emit('notification', 'El registro ha sido eliminado con éxito.');
    // }

    public function render()
    {
        return view('livewire.activo-fijo.tipo-activo.mostrartipoactivo')->layout('layouts.navactivos');
    }
}
