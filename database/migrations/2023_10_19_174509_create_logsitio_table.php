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
        Schema::create('logsitio', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_hora')->default(now());
            $table->string('ip', 255)->nullable(false);
            $table->foreignId('id_cliente')->references('id')->on('cliente');
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
        Schema::dropIfExists('logsitio');
    }
};
