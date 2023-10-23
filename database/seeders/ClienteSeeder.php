<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cliente')->insert([
        'nombres' => 'Carlos',
        'apellidos' => 'Orellana',
        'email' => 'carlos@correo.cl',
        'DNI' => '18111222-3',
        'id_nacionalidad' => 4,
        'direccion' => 'calle falsa 123',
        'password' => '12345',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
  }
}
