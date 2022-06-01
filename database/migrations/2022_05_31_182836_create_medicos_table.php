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
        Schema::create('medicos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('medicos_id');
            $table->string('nombres',45);
            $table->string('apellidos',45);
            $table->char('dni',8)->unique()->nullable();
            $table->string('direccion',250);
            $table->integer('telefono');
            $table->string('contrasena',50);
            $table->enum('estado', ['Habilitado', 'Deshabilitado']);
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('medicos');

        Schema::enableForeignKeyConstraints();
    }
};
