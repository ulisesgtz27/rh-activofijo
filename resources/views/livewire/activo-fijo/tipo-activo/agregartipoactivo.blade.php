<div class="my-5">
    <!-- Main container for the form -->
    <div class="container mx-auto max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl shadow-md dark:shadow-white py-4 px-6 sm:px-10 bg-white dark:bg-gray-800 border-emerald-500 rounded-md relative">

        <!-- Back button -->
        {{-- <a href="#" class="absolute top-3 right-3 px-2 py-1 bg-red-500 rounded-md text-white text-xs sm:text-sm shadow-md">Regresar</a> --}}

        <div class="my-3">
            <!-- Form title -->
            <h1 class="text-center text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white">Crear un nuevo Activo</h1>
            <form wire:submit.prevent="agregarTipoActivo">
            
                <!-- Input field for 'Name' -->
                <div class="my-2">
                    <label for="nombretipo" class="text-sm sm:text-md font-bold text-gray-700 dark:text-gray-300">Nombre del Activo</label>
                    <input type="text" wire:model="nombretipo" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-sm sm:text-md rounded-md my-2 bg-white dark:bg-gray-700 text-gray-900 dark:text-white" id="nombretipo" placeholder="Ingresa el nombre del activo">
                    @error('nombretipo') 
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Save button -->
                <div class="flex justify-center my-4">
                    <button type="submit" class="px-6 py-2 bg-green-500 hover:bg-green-600 text-white rounded-md text-sm sm:text-lg shadow-md">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
