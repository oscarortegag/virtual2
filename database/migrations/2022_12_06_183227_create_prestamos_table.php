<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->unsignedBiginteger('libros_frances_id');
            $table->foreign('libros_frances_id')->references('id')->on('libros_frances');
            $table->string('comentario');
            $table->tinyInteger('finalizado')->default(0);
            $table->timestamp('fecha_prestamo')->useCurrent();
            $table->timestamp('fecha_devolucion')->nullable();
            $table->tinyInteger('urgencia')->nullable()->comment('0: no es urgente, 1: Urgencia normal, 2: Muy urgente');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
};
