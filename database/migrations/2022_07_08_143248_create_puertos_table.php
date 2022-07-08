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
        Schema::create('puertos', function (Blueprint $table) {
            // id_puerto / id_cliente / categoria / creado_por / fecha_creacion
            $table->id();
            $table->integer("id_puerto");
            $table->integer("id_cliente");
            $table->string("categoria");
            $table->string("creado_por");
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
        Schema::dropIfExists('puertos');
    }
};
