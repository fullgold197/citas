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
        Schema::create('especialidades', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('especialidades_id');
            $table->string('nombre',80);
            $table->text('descripcion');
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
        Schema::dropIfExists('especialidades');
        Schema::enableForeignKeyConstraints();
    }
};
