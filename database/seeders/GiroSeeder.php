<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('giros')->insert([
            'nombre' => 'Papeleria',
            'descripcion' => 'Negocios dedicados a venta de utiles escolares',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('giros')->insert([
            'nombre' => 'Antojitos',
            'descripcion' => 'Negocios dedicados a venta de antojitos, dulces',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('giros')->insert([
            'nombre' => 'Tiendas',
            'descripcion' => 'Negocios dedicados a venta abarrotes',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('giros')->insert([
            'nombre' => 'Comida',
            'descripcion' => 'Negocios dedicados a venta de comida',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('giros')->insert([
            'nombre' => 'Fantasía',
            'descripcion' => 'Negocios dedicados a venta de fantasía (pulseras, collares, etc)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
