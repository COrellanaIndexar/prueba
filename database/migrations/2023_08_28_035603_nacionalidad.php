<?php

use App\Models\Nacionalidad;
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
        Schema::create('nacionalidad', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
        });

         // Insertar registros
         Nacionalidad::insert([
            ['nombre' => 'Argentina'],
            ['nombre' => 'Bolivia'],
            ['nombre' => 'Brasil'],
            ['nombre' => 'Chile'],
            ['nombre' => 'Colombia'],
            ['nombre' => 'Costa Rica'],
            ['nombre' => 'Cuba'],
            ['nombre' => 'Ecuador'],
            ['nombre' => 'El Salvador'],
            ['nombre' => 'Guatemala'],
            ['nombre' => 'Honduras'],
            ['nombre' => 'Mexico'],
            ['nombre' => 'Nicaragua'],
            ['nombre' => 'Panama'],
            ['nombre' => 'Paraguay'],
            ['nombre' => 'Peru'],
            ['nombre' => 'Puerto Rico'],
            ['nombre' => 'Republica Dominicana'],
            ['nombre' => 'Uruguay'],
            ['nombre' => 'Venezuela'],
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
        Schema::dropIfExists('nacionalidad');
    }
};
