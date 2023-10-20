<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NacionalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $nacionalidades = [
        'Argentina',
        'Bolivia',
        'Brasil',
        'Chile',
        'Colombia',
        'Costa Rica',
        'Cuba',
        'Ecuador',
        'El Salvador',
        'Guatemala',
        'Honduras',
        'M�xico',
        'Nicaragua',
        'Panam�',
        'Paraguay',
        'Per�',
        'Puerto Rico',
        'Rep�blica Dominicana',
        'Uruguay',
        'Venezuela',
    ];

    foreach ($nacionalidades as $nacionalidad) {
        DB::table('nacionalidad')->insert(['nombre_nacionalidad' => $nacionalidad]);
      }
    }
}
