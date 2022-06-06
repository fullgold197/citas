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
            $table->string('nro_colegiatura',45)->unique();
            $table->integer('tel_consultorio')->nullable();
            $table->unsignedBigInteger('pacientes_id')->nullable();//un paciente tendra solo una citay una cita estara presente en 1 solo paciente(relacion uno a uno)
            $table->unsignedBigInteger('especialidades_id');

            $table->foreign('pacientes_id')->references('pacientes_id')->on('pacientes')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('especialidades_id')->references('especialidades_id')->on('especialidades')->onDelete('cascade')->onUpdate('cascade');
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
