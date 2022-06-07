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
        Schema::create('datospersonales', function (Blueprint $table) {
            $table->id('datospersonales_id');
            $table->string('nombres',45);
            $table->string('apellido_paterno',45);
            $table->string('apellido_materno',45);
            $table->enum('genero',['Masculino','Femenino']);
            $table->char('dni',8)->unique();
            $table->string('direccion',250);
            $table->integer('tel_fijo')->nullable();
            $table->integer('tel_movil');
            $table->date('fecha_nacimiento');
            $table->enum('estado',['Habilitado','Deshabilitado']);
            $table->unsignedBigInteger('pacientes_id')->unique();
            $table->unsignedBigInteger('medicos_id')->unique();
            $table->unsignedBigInteger('administradores_id')->unique();
            $table->unsignedBigInteger('user_id')->unique(); //para la tabla users
            $table->unsignedBigInteger('roles_id')->unique();
            $table->unsignedBigInteger('departamentos_id')->nullable();//(agregar nullable porque la restriccion es set null)
            $table->unsignedBigInteger('provincias_id')->nullable();//(agregar nullable porque la restriccion es set null)
            $table->unsignedBigInteger('distritos_id')->nullable();//(agregar nullable porque la restriccion es set null)


            $table->foreign('pacientes_id')->references('pacientes_id')->on('pacientes')->onDelete('cascade')->onUpdate('cascade')->unique();
            $table->foreign('medicos_id')->references('medicos_id')->on('medicos')->onDelete('cascade')->onUpdate('cascade')->unique();
            $table->foreign('administradores_id')->references('administradores_id')->on('administradores')->onDelete('cascade')->onUpdate('cascade')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade')->unique();
            $table->foreign('roles_id')->references('roles_id')->on('roles')->onDelete('cascade')->onUpdate('cascade')->unique();
            $table->foreign('departamentos_id')->references('departamentos_id')->on('departamentos')->onDelete('set null')->onUpdate('cascade')->unique();
            $table->foreign('provincias_id')->references('provincias_id')->on('provincias')->onDelete('set null')->onUpdate('cascade')->unique();
            $table->foreign('distritos_id')->references('distritos_id')->on('distritos')->onDelete('set null')->onUpdate('cascade')->unique();




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
        Schema::dropIfExists('datospersonales');
        Schema::enableForeignKeyConstraints();
    }
};
