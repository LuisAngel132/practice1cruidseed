<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre_del_producto'=> 'Computadora'

        ]);
        DB::table('productos')->insert([
            'nombre_del_producto'=> 'Camara'

        ]);
        DB::table('productos')->insert([
            'nombre_del_producto'=> 'Telefono'

        ]);
        DB::table('productos')->insert([
            'nombre_del_producto'=> 'Coca'

        ]);
        DB::table('productos')->insert([
            'nombre_del_producto'=> 'Cuchillo'

        ]);
}
}
