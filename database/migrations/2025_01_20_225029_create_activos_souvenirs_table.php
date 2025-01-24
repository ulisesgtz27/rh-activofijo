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
        Schema::create('activos_souvenirs', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('productos');
            $table->string('descripcion');
            $table->string('color');
            $table->string('medida');
            $table->string('marca');
            $table->decimal('precio');
            $table->string('estado');
            $table->tinyInteger('disponible');
            $table->date('fecha_adquisicion');
            $table->unsignedBigInteger('aniosestimado_id');
            $table->foreign('aniosestimado_id')
                    //Indica que esta columna hace referencia a la columna id
                    ->references('id')
                    // Define que la relación es con la tabla clients
                    ->on( 'aniosestimados')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aniosestimados', function (Blueprint $table) {
            //Elimina la relación foránea entre cliente_id y la tabla clients.
            $table->dropForeign(['aniosestimado_id']);
        });
        Schema::dropIfExists('activos_souvenirs');
    }
};
