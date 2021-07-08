<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProvinciaSeede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //$json = File::get(__DIR__ . '/json/provinciatest.json');
      $json = storage_path('json/provinciatest.json');
      //$data = json_decode($json);
      $data = json_decode(file_get_contents($json), true); 

      foreach($data as $item) {
        DB::table('provincias')->insert(array(
           'idProvincia' => $item['idProvincia'],
           'nombreprovincia' => $item['nombreprovincia'],
           'idRegion' => $item['idRegion'],
        ));
      }
    }
}
