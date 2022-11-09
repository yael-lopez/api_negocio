<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NegocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('negocios')->insert([
            'nombre' => 'Comida Mexicana Esperanza',
            'descripcion' => 'Rica comida mexicana. Horario de atención Lunes - Domingo de 09:00 a 17:00',
            'giro' => 4,
            'latitud' => '19.843108',
            'longitud' => '-98.969106',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('negocios')->insert([
            'nombre' => 'Fantasia Kike',
            'descripcion' => 'Novedad en fantasía como pulseras, maquillaje, etc. Horario de atención Lunes - Viernes de 12:00 a 18:00',
            'giro' => 5,
            'latitud' => '19.773726',
            'longitud' => '-98.982376',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
