@extends('layouts.home')

@section('content')
    <!-- Contenedor principal -->
    <div class="grid grid-cols-3 gap-8 items-center max-w-7xl mx-auto px-4">
        <!-- Botón 1 -->
        <div class="relative group">
            <button 
                onclick=""
                class="bg-blue-500 text-white rounded-full h-32 w-32 flex items-center justify-center shadow-lg hover:bg-blue-600 transition">
                <i class="fas fa-laptop text-3xl"></i>
            </button>
            <div class="absolute left-1/2 -translate-x-1/2 mt-4 bg-gray-800 text-white text-sm px-4 py-2 rounded opacity-0 group-hover:opacity-100 transition">
                Activo Mobiliario
            </div>
        </div>

        <!-- Botón 2 -->
        <div class="relative group">
            <button 
                onclick=""
                class="bg-green-500 text-white rounded-full h-32 w-32 flex items-center justify-center shadow-lg hover:bg-green-600 transition">
                <i class="fas fa-chair text-3xl"></i>
            </button>
            <div class="absolute left-1/2 -translate-x-1/2 mt-4 bg-gray-800 text-white text-sm px-4 py-2 rounded opacity-0 group-hover:opacity-100 transition">
                Activo Oficina
            </div>
        </div>

        <!-- Botón 3 -->
        <div class="relative group">
            <button 
                onclick=""
                class="bg-red-500 text-white rounded-full h-32 w-32 flex items-center justify-center shadow-lg hover:bg-red-600 transition">
                <i class="fas fa-car text-3xl"></i>
            </button>
            <div class="absolute left-1/2 -translate-x-1/2 mt-4 bg-gray-800 text-white text-sm px-4 py-2 rounded opacity-0 group-hover:opacity-100 transition">
                Activo Papeleria
            </div>
        </div>

        <!-- Botón 4 -->
        <div class="relative group">
            <button 
                onclick=""
                class="bg-yellow-500 text-white rounded-full h-32 w-32 flex items-center justify-center shadow-lg hover:bg-yellow-600 transition">
                <i class="fas fa-building text-3xl"></i>
            </button>
            <div class="absolute left-1/2 -translate-x-1/2 mt-4 bg-gray-800 text-white text-sm px-4 py-2 rounded opacity-0 group-hover:opacity-100 transition">
                Activo Souvenirs
            </div>
        </div>

        <!-- Botón 5 -->
        <div class="relative group">
            <button 
                onclick=""
                class="bg-purple-500 text-white rounded-full h-32 w-32 flex items-center justify-center shadow-lg hover:bg-purple-600 transition">
                <i class="fas fa-tools text-3xl"></i>
            </button>
            <div class="absolute left-1/2 -translate-x-1/2 mt-4 bg-gray-800 text-white text-sm px-4 py-2 rounded opacity-0 group-hover:opacity-100 transition">
                Activo Tecnologias
            </div>
        </div>

        <!-- Botón 6 -->
        <div class="relative group">
            <button 
                onclick=""
                class="bg-gray-500 text-white rounded-full h-32 w-32 flex items-center justify-center shadow-lg hover:bg-gray-600 transition">
                <i class="fas fa-box text-3xl"></i>
            </button>
            <div class="absolute left-1/2 -translate-x-1/2 mt-4 bg-gray-800 text-white text-sm px-4 py-2 rounded opacity-0 group-hover:opacity-100 transition">
                Activo Uniformes
            </div>
        </div>

        <!-- Botón 7 -->
        <div class="relative group">
            <a href="{{ route('agregartipoactivo') }}">
            <button 
                onclick=""
                class="bg-yellow-500 text-white rounded-full h-32 w-32 flex items-center justify-center shadow-lg hover:bg-red-600 transition">
                <i class="fas fa-heart text-3xl"></i>
            </button>
            </a>
            <div class="absolute left-1/2 -translate-x-1/2 mt-4 bg-gray-800 text-white text-sm px-4 py-2 rounded opacity-0 group-hover:opacity-100 transition">
                Agregar Activo
            </div>
        </div>
        
    </div>
@endsection
