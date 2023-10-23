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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',100)->nullable();
            $table->string('apellidos',100)->nullable();
            $table->string('email',100)->unique();
            $table->string('DNI',20)->nullable();
            $table->foreignId('id_nacionalidad')->references('id')->on('nacionalidad');
            $table->string('direccion',200)->nullable();
            $table->string('password',255)->nullable();
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
        Schema::dropIfExists('cliente');
    }
};
