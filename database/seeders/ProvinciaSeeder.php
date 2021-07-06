<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincias')->insert([

            [
               'idProvincia'=>1,
               'nombreprovincia'=>'Arica',
               'idRegion'=> 1,
            ],
            [
                'idProvincia'=>2,
                'nombreprovincia'=>'Parinacota',
                'idRegion'=> 1,
             ],
             [
                'idProvincia'=>3,
                'nombreprovincia'=>'Iquique',
                'idRegion'=> 2,
             ],
             [
                'idProvincia'=>4,
                'nombreprovincia'=>'Tamarugal',
                'idRegion'=> 2,
             ],
             [
                'idProvincia'=>5,
                'nombreprovincia'=>'Tocopilla',
                'idRegion'=> 3,
             ],
             [
                'idProvincia'=>6,
                'nombreprovincia'=>'El Loa',
                'idRegion'=> 3,
             ],
             [
                'idProvincia'=>7,
                'nombreprovincia'=>'Antofagasta',
                'idRegion'=> 3,
             ],
             [
                'idProvincia'=>8,
                'nombreprovincia'=>'Copiapó',
                'idRegion'=> 4,
             ],
             [
                'idProvincia'=>9,
                'nombreprovincia'=>'chañaral',
                'idRegion'=> 4,
             ],
             [
                'idProvincia'=>10,
                'nombreprovincia'=>'Huasco',
                'idRegion'=> 4,
             ],
             [
                'idProvincia'=>11,
                'nombreprovincia'=>'Elquí',
                'idRegion'=> 5,
             ],
             [
                'idProvincia'=>12,
                'nombreprovincia'=>'Choapa',
                'idRegion'=> 5,
             ],
             [
                'idProvincia'=>13,
                'nombreprovincia'=>'Limarí',
                'idRegion'=> 5,
             ],
             [
                'idProvincia'=>14,
                'nombreprovincia'=>'Valparaíso',
                'idRegion'=> 6,
             ],
             [
                'idProvincia'=>15,
                'nombreprovincia'=>'Isla de Pascua',
                'idRegion'=> 6,
             ],
             [
                'idProvincia'=>16,
                'nombreprovincia'=>'Los Andes',
                'idRegion'=> 6,
             ],
             [
                'idProvincia'=>17,
                'nombreprovincia'=>'Petorca',
                'idRegion'=> 6,
             ],
             [
                'idProvincia'=>18,
                'nombreprovincia'=>'Quillota',
                'idRegion'=> 6,
             ],
             [
                'idProvincia'=>19,
                'nombreprovincia'=>'San Antonio',
                'idRegion'=> 6,
             ],
             [
                'idProvincia'=>20,
                'nombreprovincia'=>'San Felipe de Aconcagua',
                'idRegion'=> 6,
             ],
             [
                'idProvincia'=>21,
                'nombreprovincia'=>'Marga Marga',
                'idRegion'=> 6,
             ],
             [
                'idProvincia'=>22,
                'nombreprovincia'=>'Santiago',
                'idRegion'=> 7,
             ],
             [
                'idProvincia'=>23,
                'nombreprovincia'=>'Cordillera',
                'idRegion'=> 7,
             ],
             [
                'idProvincia'=>24,
                'nombreprovincia'=>'Chacabuco',
                'idRegion'=> 7,
             ],
             [
                'idProvincia'=>25,
                'nombreprovincia'=>'Maipo',
                'idRegion'=> 7,
             ],
             [
                'idProvincia'=>26,
                'nombreprovincia'=>'Melipilla',
                'idRegion'=> 7,
             ],
             [
                'idProvincia'=>27,
                'nombreprovincia'=>'Talagante',
                'idRegion'=> 7,
             ],
             [
                'idProvincia'=>28,
                'nombreprovincia'=>'Cachapoal',
                'idRegion'=> 8,
             ],
             [
                'idProvincia'=>29,
                'nombreprovincia'=>'Cardenal Caro',
                'idRegion'=> 8,
             ],
             [
                'idProvincia'=>30,
                'nombreprovincia'=>'Colchagua',
                'idRegion'=> 8,
             ],
             [
                'idProvincia'=>31,
                'nombreprovincia'=>'Talca',
                'idRegion'=> 9,
             ],
             [
                'idProvincia'=>32,
                'nombreprovincia'=>'Cauquenes',
                'idRegion'=> 9,
             ],
             [
                'idProvincia'=>33,
                'nombreprovincia'=>'Curicó',
                'idRegion'=> 9,
             ],
             [
                'idProvincia'=>34,
                'nombreprovincia'=>'Linares',
                'idRegion'=> 9,
             ],

             [
                'idProvincia'=>35,
                'nombreprovincia'=>'Concepción',
                'idRegion'=> 10,
             ],
             [
                'idProvincia'=>36,
                'nombreprovincia'=>'Arauco',
                'idRegion'=> 10,
             ],
             [
                'idProvincia'=>37,
                'nombreprovincia'=>'BioBío',
                'idRegion'=> 10,
             ],
             [
                'idProvincia'=>38,
                'nombreprovincia'=>'Ñuble',
                'idRegion'=> 10,
             ],
             [
                'idProvincia'=>39,
                'nombreprovincia'=>'Cautín',
                'idRegion'=> 11,
             ],
             [
                'idProvincia'=>40,
                'nombreprovincia'=>'Malleco',
                'idRegion'=> 11,
             ],
             [
                'idProvincia'=>41,
                'nombreprovincia'=>'Valdivia',
                'idRegion'=> 12,
             ],
             [
                'idProvincia'=>42,
                'nombreprovincia'=>'Ranco',
                'idRegion'=> 12,
             ],
             [
                'idProvincia'=>43,
                'nombreprovincia'=>'Llanquihue',
                'idRegion'=> 13,
             ],
             [
                'idProvincia'=>44,
                'nombreprovincia'=>'Chiloé',
                'idRegion'=> 13,
             ],
             [
                'idProvincia'=>45,
                'nombreprovincia'=>'Osorno',
                'idRegion'=> 13,
             ],
             [
                'idProvincia'=>46,
                'nombreprovincia'=>'Palena',
                'idRegion'=> 13,
             ],
             [
                'idProvincia'=>47,
                'nombreprovincia'=>'Coyhaique',
                'idRegion'=> 14,
             ],
             [
                'idProvincia'=>48,
                'nombreprovincia'=>'Aisén',
                'idRegion'=> 14,
             ],
             [
                'idProvincia'=>49,
                'nombreprovincia'=>'Capitán Prat',
                'idRegion'=> 14,
             ],
             [
                'idProvincia'=>50,
                'nombreprovincia'=>'General Carrera',
                'idRegion'=> 14,
             ],
             [
                'idProvincia'=>51,
                'nombreprovincia'=>'Magallanes',
                'idRegion'=> 15,
             ],
             [
                'idProvincia'=>52,
                'nombreprovincia'=>'Antártica Chilena',
                'idRegion'=> 15,
             ],
             [
                'idProvincia'=>53,
                'nombreprovincia'=>'Tierra del Fuego',
                'idRegion'=> 15,
             ],
             [
                'idProvincia'=>54,
                'nombreprovincia'=>'Última Esperanza',
                'idRegion'=> 15,
             ],
 
        
        
                 
        ]);
    }
}
