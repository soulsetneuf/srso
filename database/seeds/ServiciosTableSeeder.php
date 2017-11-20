<?php

use Illuminate\Database\Seeder;

class ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert([
            'nombre' => 'Almuerzos'
        ]);
        DB::table('servicios')->insert([
            'nombre' => 'Desayunos'
        ]);
        DB::table('servicios')->insert([
            'nombre' => 'Platos especiales'
        ]);
    }
}