<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Yael Eduardo Lopez Tenorio',
            'email' => 'yael@gmail.com',
            'password' => Hash::make('yael4159'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Xochitl Mestli Beltran Gonzalez',
            'email' => 'xochitl@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
