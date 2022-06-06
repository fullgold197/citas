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
        Schema::create('citas', function (Blueprint $table) {
            $table->id('citas_id');
            $table->text('descripcion')->nullable();
            $table->string('tipo');
            $table->string('nro_orden');
            $table->enum('estado',['Habilitado','Deshabilitado']);
            $table->unsignedBigInteger('especialidades_id');
            $table->unsignedBigInteger('horarios_id');
            $table->unsignedBigInteger('administradores_id');
            $table->unsignedBigInteger('medicos_id');
            $table->unsignedBigInteger('pacientes_id')->unique();//un paciente tendra solo una citay una cita estara presente en 1 solo paciente(relacion uno a uno)

            $table->foreign('especialidades_id')->references('especialidades_id')->on('especialidades')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('horarios_id')->references('horarios_id')->on('horarios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('administradores_id')->references('administradores_id')->on('administradores')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('medicos_id')->references('medicos_id')->on('medicos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pacientes_id')->references('pacientes_id')->on('pacientes')->onDelete('cascade')->onUpdate('cascade')->unique();
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
        Schema::dropIfExists('citas');
        Schema::enableForeignKeyConstraints();
    }
};
