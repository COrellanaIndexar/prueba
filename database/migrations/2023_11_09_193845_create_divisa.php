<?php

use App\Models\Divisa;
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
        Schema::create('divisa', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('codigo',3)->unique();
            $table->string('simbolo')->nullable(); // Nuevo campo para almacenar el símbolo de la divisa
            $table->timestamps();
        });

        //insercion de datos
        Divisa::insert([
          ['nombre' => 'Peso Argentino', 'codigo' => 'ARS', 'simbolo' => '$'],
          ['nombre' => 'Boliviano', 'codigo' => 'BOB', 'simbolo' => 'Bs.'],
          ['nombre' => 'Peso Chileno', 'codigo' => 'CLP', 'simbolo' => '$'],
          ['nombre' => 'Peso Colombiano', 'codigo' => 'COP', 'simbolo' => '$'],
          ['nombre' => 'Colón Costarricense', 'codigo' => 'CRC', 'simbolo' => '?'],
          ['nombre' => 'Peso Cubano', 'codigo' => 'CUP', 'simbolo' => '$'],
          ['nombre' => 'Dólar Estadounidense', 'codigo' => 'USD', 'simbolo' => '$'],
          ['nombre' => 'Quetzal', 'codigo' => 'GTQ', 'simbolo' => 'Q'],
          ['nombre' => 'Lempira', 'codigo' => 'HNL', 'simbolo' => 'L'],
          ['nombre' => 'Peso Mexicano', 'codigo' => 'MXN', 'simbolo' => '$'],
          ['nombre' => 'Córdoba', 'codigo' => 'NIO', 'simbolo' => 'C$'],
          ['nombre' => 'Balboa', 'codigo' => 'PAB', 'simbolo' => 'B/ o $'],
          ['nombre' => 'Guaraní Paraguayo', 'codigo' => 'PYG', 'simbolo' => '?'],
          ['nombre' => 'Sol Peruano', 'codigo' => 'PEN', 'simbolo' => 'S/ o S/.'],
          ['nombre' => 'Peso Dominicano', 'codigo' => 'DOP', 'simbolo' => 'RD$'],
          ['nombre' => 'Peso Uruguayo', 'codigo' => 'UYU', 'simbolo' => '$U'],
          ['nombre' => 'Bolívar Soberano', 'codigo' => 'VES', 'simbolo' => 'Bs. S.'],
          ['nombre' => 'Real Brasileño', 'codigo' => 'BRL', 'simbolo' => 'R$'],
      ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divisa');
    }
};
