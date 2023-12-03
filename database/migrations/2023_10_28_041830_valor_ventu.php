<?php

use App\Models\ValorVentu;
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
        Schema::create('valorventu',function(Blueprint $table){
            $table->id();
            $table->dateTime('fecha_inicio')->nullable();
            $table->dateTime('fecha_fin')->nullable();
            $table->decimal('ventu', 10, 2)->nullable();
            $table->decimal('guarani', 10, 2)->nullable();
            $table->decimal('dolar', 10, 2)->nullable();
            $table->decimal('real', 10, 2)->nullable();
            $table->decimal('peso_chileno', 10, 2)->nullable();
            $table->timestamps();
        });
        // Insercion Test
        ValorVentu::create([
          'fecha_inicio' => '2023-11-30 00:00:00',
          'fecha_fin' => '2023-12-10 23:59:59',
          'ventu' => 1,
          'guarani' => 5000.00,
          'dolar' => 0,6717,
          'real' => 3.2897, // Mantengo el valor según los datos proporcionados
          'peso_chileno' => 561.9875,
        ]);
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
