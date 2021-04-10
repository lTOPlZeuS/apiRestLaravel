<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directorios')->insert([
            [
                'nombre'=> 'Saul Mani',
                'direccion' => 'Calzadda',
                'telefono' => 323233232,
                'foto' => null
            ],
            [
                'nombre'=> 'Jesus Antonio',
                'direccion' => 'Guadalajara',
                'telefono' => 55662212,
                'foto' => null
            ],
        ]);
    }
}
