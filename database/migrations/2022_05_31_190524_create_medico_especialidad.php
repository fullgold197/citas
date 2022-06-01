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
        Schema::create('medico_especialidad', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('medico_especialidad_id');
            /* $table->integer('medico_id')->unsigned();
            $table->integer('especialidad_id')->unsigned(); */
            $table->unsignedBigInteger('medicos_id');
            $table->UnsignedBigInteger('especialidades_id');

            $table->foreign('medicos_id')->references('medicos_id')->on('medicos')->onDelete('cascade');
            $table->foreign('especialidades_id')->references('especialidades_id')->on('especialidades')->onDelete('cascade');
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
        Schema::dropIfExists('medico_especialidad');
        Schema::enableForeignKeyConstraints();
    }
};
