<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class personas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'nombre'=> 'Raul Jimenez Sanchez',

        ]);
        DB::table('personas')->insert([
            'nombre'=> 'Juan Ricardo Martinez',

        ]);
        DB::table('personas')->insert([
            'nombre'=> 'Osvaldo Iglesias Villareal',

        ]);
        DB::table('personas')->insert([
            'nombre'=> 'Fernando Rodriguez Castro',

        ]);
        DB::table('personas')->insert([
            'nombre'=> 'Ana Marbella Aguilar',

        ]);
    }
}
