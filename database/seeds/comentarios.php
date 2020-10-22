<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class comentarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert([
            'comentario'=> 'buena calidad',
            'persona'=> '1',
            'producto'=> '1'
        ]);
        DB::table('comentarios')->insert([
            'comentario'=> 'pesima definicion',
            'persona'=> '2',
            'producto'=> '2'
        ]);
        DB::table('comentarios')->insert([
            'comentario'=> 'mal estado',
            'persona'=> '3',
            'producto'=> '3'
        ]);
        DB::table('comentarios')->insert([
            'comentario'=> 'algo costosa',
            'persona'=> '4',
            'producto'=> '4'
        ]);
        DB::table('comentarios')->insert([
            'comentario'=> 'bastante filoso',
            'persona'=> '5',
            'producto'=> '5'
        ]);
    }
}
