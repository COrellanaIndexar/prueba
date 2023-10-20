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
        //
        Schema::create('valorventu', function (Blueprint $table) {
          $table->id('id_valor');
          $table->dateTime('fecha_inicio')->nullable(false);
          $table->dateTime('fecha_fin')->nullable(false);
          $table->decimal('ventu', 10, 2)->nullable(false);
          $table->decimal('dolar', 10, 2)->nullable(false);
          $table->decimal('guarani', 10, 2)->nullable(false);
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
        //
        Schema::dropIfExists('valorventu');
    }
};
