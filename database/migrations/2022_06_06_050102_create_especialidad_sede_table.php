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
        Schema::create('especialidad_sede', function (Blueprint $table) {
            $table->id('especialidad_sede_id');
            $table->unsignedBigInteger('especialidades_id');
            $table->unsignedBigInteger('sedes_id');

            $table->foreign('especialidades_id')->references('especialidades_id')->on('especialidades')->onDelete('cascade');
            $table->foreign('sedes_id')->references('sedes_id')->on('sedes')->onDelete('cascade');
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
        Schema::dropIfExists('especialidad_sedes');
        Schema::enableForeignKeyConstraints();
    }
};
