<?php

use App\Livewire\ActivoFijo\Activos\ActivoTecnologias\Agregaracttec;
use App\Livewire\ActivoFijo\Activos\ActivoTecnologias\Mostraracttec;
use App\Livewire\ActivoFijo\TipoActivo\Agregartipoactivo;
use App\Livewire\ActivoFijo\TipoActivo\Mostrartipoactivo;
use Illuminate\Support\Facades\Route;

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/agregartipoactivo', Agregartipoactivo::class)->name('agregartipoactivo');
Route::get('/mostrartipoactivo', Mostrartipoactivo::class)->name('mostrartipoactivo');

Route::get('/mostraractivotec', Mostraracttec::class)->name('mostraracttec');
Route::get('/agregaractivotec', Agregaracttec::class)->name('agregaracttec');


