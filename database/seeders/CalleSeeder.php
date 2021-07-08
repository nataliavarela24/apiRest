<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = storage_path('json/calles.json');
        $data = json_decode(file_get_contents($json), true); 
  
        foreach($data as $item) {
          DB::table('calles')->insert(array(
             'idCalle' => $item['idCalle'],
             'nombrecalle' => $item['nombrecalle'],
          ));
        }   
    }
}
