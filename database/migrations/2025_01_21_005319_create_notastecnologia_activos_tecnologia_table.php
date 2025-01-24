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
        Schema::create('notastecnologia_activos_tecnologia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notast_id');
            $table->foreign('notast_id')
                //Indica que esta columna hace referencia a la columna id
                ->references('id')
                // Define que la relación es con la tabla clients
                ->on('notastecnologias')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('activos_t_id');
            $table->foreign('activos_t_id')
                //Indica que esta columna hace referencia a la columna id
                ->references('id')
                // Define que la relación es con la tabla clients
                ->on('activos_tecnologias')
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
        Schema::table('notastecnologias', function (Blueprint $table) {
            //Elimina la relación foránea entre cliente_id y la tabla clients.
            $table->dropForeign(['notast_id']);
        });
        Schema::table('activos_tecnologias', function (Blueprint $table) {
            //Elimina la relación foránea entre cliente_id y la tabla clients.
            $table->dropForeign(['activos_t_id']);
        });
        Schema::dropIfExists('notastecnologia_activos_tecnologia');
    }
};
