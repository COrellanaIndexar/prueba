<?php

use App\Models\Usuario;
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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos')->nullable();
            $table->string('email')->unique();
            $table->string('dni')->unique();
            $table->unsignedBigInteger('id_nacionalidad');
            $table->foreign('id_nacionalidad')->references('id')->on('nacionalidad');
            $table->string('direccion')->nullable();
            $table->string('password', 255);
            $table->integer('tipo_usuario')->nullable();
            $table->timestamps();
        });


        $u = new Usuario();
        $u->nombres = 'Carlos';
        $u->apellidos = 'Orellana';
        $u->email = 'carlos@correo.cl';
        $u->dni = '18222333-4';
        $u->id_nacionalidad = 4;
        $u->direccion = 'Calle Falsa 123';
        $u->password = hash('sha256', '12345');//12345
        $u->tipo_usuario = 1;
        $u->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
};
