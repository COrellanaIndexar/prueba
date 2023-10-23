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
        Schema::create('wallet', function (Blueprint $table) {
            $table->id();
            // $table->dateTime('fecha_creacion')->default(now());
            $table->string('ip_creador', 255)->nullable(false);
            // $table->foreignId('id_cliente')->constrained('cliente');
            $table->foreignId('id_cliente')->references('id')->on('cliente');
            $table->decimal('monto_guarani', 10, 2)->nullable();
            $table->string('num_wallet', 255)->unique();
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
        Schema::dropIfExists('wallet');
    }
};
