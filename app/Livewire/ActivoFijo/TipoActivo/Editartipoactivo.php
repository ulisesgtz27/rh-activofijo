<?php

namespace App\Livewire\ActivoFijo\TipoActivo;

use App\Models\ActivoFijo\Tipoactivo;
use Livewire\Component;

class Editartipoactivo extends Component
{
    public $nombreactivo,$tipoactivo_id;

    public function mount($id)
    {
        $item = Tipoactivo::findOrFail($id);
        $this->tipoactivo_id= $id;
        $this->nombreactivo = $item->nombre_activo;
    }

    public function editar(){
        $this->validate([
            'nombre_activo' =>'required',
        ]);

        Tipoactivo::find($this->tipoactivo_id)->update([
            'nombre_activo' => $this->nombre_activo,
        ]);

        return redirect()->to('/mostrartipoactivo');
    }



    public function render()
    {
        return view('livewire.activo-fijo.tipo-activo.editartipoactivo')->layout('layouts.navactivos');
    }
}
