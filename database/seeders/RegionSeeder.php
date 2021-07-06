<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regiones')->insert([
            [
               'idRegion'=> 1,
               'nombreregion'=>'Arica y Parinacota'
            ],
            [
                'idRegion'=>2,
                'nombreregion'=>'Tarapacá'
             ],
             [
                'idRegion'=>3,
                'nombreregion'=>'Antofagasta'
             ],
             [
                'idRegion'=>4,
                'nombreregion'=>'Atacama'
             ],
             [
                'idRegion'=>5,
                'nombreregion'=>'Coquimbo'
             ],
             [
                'idRegion'=>6,
                'nombreregion'=>'Valparaíso'
             ],
             [
                'idRegion'=>7,
                'nombreregion'=>'Metropolitana de Santiago'
             ],
             [
                'idRegion'=>8,
                'nombreregion'=>'Libertador General Bernardo O’Higgins'
             ],
             [
                'idRegion'=>9,
                'nombreregion'=>'Maule'
             ],
             [
                'idRegion'=>10,
                'nombreregion'=>'Biobío'
             ],
             [
                'idRegion'=>11,
                'nombreregion'=>'La Araucanía'
             ],
             [
                'idRegion'=>12,
                'nombreregion'=>'Los Ríos'
             ],
             [
                'idRegion'=>13,
                'nombreregion'=>'Los Lagos'
             ],
             [
                'idRegion'=>14,
                'nombreregion'=>'Aysén del General Carlos Ibáñez del Campo'
             ],
             [
                'idRegion'=>15,
                'nombreregion'=>'Magallanes y la Antártica Chilena'
             ],
             
        ]);
    }
}
