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
        Schema::create('administradores', function (Blueprint $table) {
            $table->id('administradores_id');
            $table->string('cod_administradores',45)->unique();
            $table->unsignedBigInteger('medicos_id')->nullable();
            $table->unsignedBigInteger('pacientes_id')->nullable();

            $table->foreign('medicos_id')->references('medicos_id')->on('medicos')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('pacientes_id')->references('pacientes_id')->on('pacientes')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('administradores');
        Schema::enableForeignKeyConstraints();
    }
};
