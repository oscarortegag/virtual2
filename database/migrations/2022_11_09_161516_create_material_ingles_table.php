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
        Schema::create('material_ingles', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 60);
            $table->string('nivel', 10);
            $table->string('editorial');
            $table->string('autor');
            $table->integer('isbn');
            $table->string('categoria', 100);
            $table->string('idioma', 20);
            $table->integer('cantidad');
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
        Schema::dropIfExists('material_ingles');
    }
};
