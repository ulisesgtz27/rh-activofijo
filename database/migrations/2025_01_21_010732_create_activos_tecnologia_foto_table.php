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
        Schema::create('activos_tecnologia_foto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('activos_tecnologias_id');
            $table->foreign('activos_tecnologias_id')
                //Indica que esta columna hace referencia a la columna id
                ->references('id')
                // Define que la relación es con la tabla clients
                ->on('activos_tecnologias')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('fotos_id');
            $table->foreign('fotos_id')
                //Indica que esta columna hace referencia a la columna id
                ->references('id')
                // Define que la relación es con la tabla clients
                ->on('fotos')
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
        Schema::table('activos_tecnologias', function (Blueprint $table) {
            //Elimina la relación foránea entre cliente_id y la tabla clients.
            $table->dropForeign(['activos_tecnologias_id']);
        });
        Schema::table('fotos', function (Blueprint $table) {
            //Elimina la relación foránea entre cliente_id y la tabla clients.
            $table->dropForeign(['fotos_id']);
        });
        Schema::dropIfExists('activos_tecnologia_foto');
    }
};
