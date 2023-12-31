<?php

use App\Models\ValidarVentu;
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
        Schema::create('validarventu',function(Blueprint $table){
            $table->id();
            $table->string('campo_validado',255)->nullable(false);
            $table->dateTime('fecha_hora_validacion')->nullable();
            $table->text('comentario_rechazo')->nullable();
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
        Schema::dropIfExists('validarventu');
    }
};
