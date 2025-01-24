<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('activos_tecnologias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('num_serie');
            $table->string('num_activo');
            $table->string('ubicacion_fisica');
            $table->date('fecha_adquisicion');
            $table->date('fecha_baja');
            $table->unsignedBigInteger('tipo_activo_id');
            $table->foreign('tipo_activo_id')
                    //Indica que esta columna hace referencia a la columna id
                    ->references('id')
                    // Define que la relación es con la tabla clients
                    ->on( 'tipo_activos')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->decimal('precio_adquisicion');
            $table->unsignedBigInteger('aniosestimado_id');
            $table->foreign('aniosestimado_id')
                    //Indica que esta columna hace referencia a la columna id
                    ->references('id')
                    // Define que la relación es con la tabla clients
                    ->on( 'aniosestimados')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tipo_activos', function (Blueprint $table) {
            //Elimina la relación foránea entre cliente_id y la tabla clients.
            $table->dropForeign(['tipo_activo_id']);
        });
        Schema::table('aniosestimados', function (Blueprint $table) {
            //Elimina la relación foránea entre cliente_id y la tabla clients.
            $table->dropForeign(['aniosestimado_id']);
        });
        Schema::dropIfExists('activos_tecnologias');
    }
};
