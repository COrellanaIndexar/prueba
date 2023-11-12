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
            $table->timestamps();
        });

        Divisa::insert([
          ['nombre' => 'Dólar Americano', 'codigo' => 'USD'],
          ['nombre' => 'Real Brasileño', 'codigo' => 'BRL'],
          ['nombre' => 'Guarani', 'codigo' => 'PYG'],
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
