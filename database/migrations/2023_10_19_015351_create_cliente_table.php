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
            $table->id('id_cliente');
            $table->string('nombres',100)->nullable(false);
            $table->string('apellidos',100)->nullable(false);
            $table->string('email',100)->unique();
            $table->string('DNI',20)->nullable();
            $table->foreign('id_nacionalidad')->references('id_nacionalidad')->on('nacionalidad');
            $table->string('direccion',200)->nullable();
            $table->string('password',255)->nullable(false);
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
