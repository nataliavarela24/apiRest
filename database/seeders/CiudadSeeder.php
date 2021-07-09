<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = storage_path('json/ciudadjson.json');
        $data = json_decode(file_get_contents($json), true); 
  
        foreach($data as $item) {
          DB::table('ciudades')->insert(array(
             'idCiudad' => $item['idCiudad'],
             'nombreciudad' => $item['nombreciudad'],
             'idProvincia' => $item['idProvincia'],
          ));
        }   
    }
}
