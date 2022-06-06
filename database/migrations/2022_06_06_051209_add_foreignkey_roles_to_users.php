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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('roles_id')->nullable()->after('password');
            $table->foreign('roles_id')->references('roles_id')->on('roles')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('roles',function (Blueprint $table){

            Schema::disableForeignKeyConstraints();
            Schema::enableForeignKeyConstraints();
        });
    }
};
