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
        Schema::create('activos_mobiliario_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('activos_mobiliarios_id');
            $table->foreign('activos_mobiliarios_id')
                //Indica que esta columna hace referencia a la columna id
                ->references('id')
                // Define que la relación es con la tabla clients
                ->on('activos_mobiliarios')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                //Indica que esta columna hace referencia a la columna id
                ->references('id')
                // Define que la relación es con la tabla clients
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->date('fecha_asignacion');
            $table->date('fecha_devolucion');
            $table->string('observaciones');
            $table->tinyInteger('status');
            $table->string('foto1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('activos_mobiliarios', function (Blueprint $table) {
            //Elimina la relación foránea entre cliente_id y la tabla clients.
            $table->dropForeign(['activos_mobiliarios_id']);
        });
        Schema::table('users', function (Blueprint $table) {
            //Elimina la relación foránea entre cliente_id y la tabla clients.
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('activos_mobiliario_user');
    }
};
