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
        DB::table('ciudades')->insert([
             [
                'idCiudad'=>2,
                'nombreciudad'=>'Camarones',
                'idProvincia'=> 1,
             ],
             [
                'idCiudad'=>3,
                'nombreciudad'=>'Putre',
                'idProvincia'=> 2,
             ],
             [
                'idCiudad'=>4,
                'nombreciudad'=>'General Lagos',
                'idProvincia'=> 2,
             ],
             [
                'idCiudad'=>5,
                'nombreciudad'=>'Iquique',
                'idProvincia'=> 3,
             ],
             [
                'idCiudad'=>6,
                'nombreciudad'=>'Alto Hospicio',
                'idProvincia'=> 4,
             ],
             [
                'idCiudad'=>7,
                'nombreciudad'=>'Pozo Almonte',
                'idProvincia'=> 4,
             ],
             [
                'idCiudad'=>8,
                'nombreciudad'=>'Camiña',
                'idProvincia'=> 4,
             ],
             [
                'idCiudad'=>9,
                'nombreciudad'=>'Colchane',
                'idProvincia'=> 4,
             ],
             [
                'idCiudad'=>10,
                'nombreciudad'=>'Huara',
                'idProvincia'=> 4,
             ],
             [
                'idCiudad'=>11,
                'nombreciudad'=>'Pica',
                'idProvincia'=> 3,
             ],
             [
                'idCiudad'=>12,
                'nombreciudad'=>'Antofagasta',
                'idProvincia'=> 7,
             ],
             [
                'idCiudad'=>13,
                'nombreciudad'=>'Mejillones',
                'idProvincia'=> 7,
             ],
             [
                'idCiudad'=>14,
                'nombreciudad'=>'Sierra Gorda',
                'idProvincia'=> 7,
             ],
             [
                'idCiudad'=>15,
                'nombreciudad'=>'Taltal',
                'idProvincia'=> 7,
             ],
             [
                'idCiudad'=>16,
                'nombreciudad'=>'Calama',
                'idProvincia'=> 6,
             ],
             [
                'idCiudad'=>17,
                'nombreciudad'=>'Ollagüe',
                'idProvincia'=> 6,
             ],
             [
                'idCiudad'=>18,
                'nombreciudad'=>'San Pedro de Atacama',
                'idProvincia'=> 6,
             ],
             [
                'idCiudad'=>19,
                'nombreciudad'=>'Tocopilla',
                'idProvincia'=> 5,
             ],
             [
                'idCiudad'=>20,
                'nombreciudad'=>'María Elena',
                'idProvincia'=> 5,
             ],
             [
                'idCiudad'=>21,
                'nombreciudad'=>'Copiapó',
                'idProvincia'=> 8,
             ],
             [
                'idCiudad'=>22,
                'nombreciudad'=>'Caldera',
                'idProvincia'=> 8,
             ],
             [
                'idCiudad'=>23,
                'nombreciudad'=>'Tierra Amarilla',
                'idProvincia'=> 8,
             ],
             [
                'idCiudad'=>24,
                'nombreciudad'=>'Chañaral',
                'idProvincia'=> 9,
             ],
             [
                'idCiudad'=>25,
                'nombreciudad'=>'Diego de Almagro',
                'idProvincia'=> 9,
             ],
             [
                'idCiudad'=>26,
                'nombreciudad'=>'Vallenar',
                'idProvincia'=> 10,
             ],
             [
                'idCiudad'=>27,
                'nombreciudad'=>'Alto del Carmen',
                'idProvincia'=> 10,
             ],

             [
                'idCiudad'=>28,
                'nombreciudad'=>'Freirina',
                'idProvincia'=> 10,
             ],

             [
                'idCiudad'=>29,
                'nombreciudad'=>'Huasco',
                'idProvincia'=> 10,
             ],
             [
                'idCiudad'=>30,
                'nombreciudad'=>'La Serena',
                'idProvincia'=> 11,
             ],
             [
                'idCiudad'=>31,
                'nombreciudad'=>'Coquimbo',
                'idProvincia'=> 11,
             ],
             [
                'idCiudad'=>32,
                'nombreciudad'=>'Andacollo',
                'idProvincia'=> 11,
             ],
             [
                'idCiudad'=>33,
                'nombreciudad'=>'La Higuera',
                'idProvincia'=> 11,
             ],
             [
                'idCiudad'=>34,
                'nombreciudad'=>'Paiguano',
                'idProvincia'=> 11,
             ],

             [
                'idCiudad'=>35,
                'nombreciudad'=>'Vicuña',
                'idProvincia'=> 11,
             ],

             [
                'idCiudad'=>36,
                'nombreciudad'=>'Illapel',
                'idProvincia'=> 12,
             ],
             [
                'idCiudad'=>37,
                'nombreciudad'=>'Canela',
                'idProvincia'=> 12,
             ],
             [
                'idCiudad'=>38,
                'nombreciudad'=>'Los Vilos',
                'idProvincia'=> 12,
             ],
             [
                'idCiudad'=>39,
                'nombreciudad'=>'Salamanca',
                'idProvincia'=> 12,
             ],
             [
                'idCiudad'=>40,
                'nombreciudad'=>'Ovalle',
                'idProvincia'=> 13,
             ],
             [
                'idCiudad'=>41,
                'nombreciudad'=>'Combarbalá',
                'idProvincia'=> 13,
             ],
             [
                'idCiudad'=>42,
                'nombreciudad'=>'Monte Patria',
                'idProvincia'=> 13,
             ],
             [
                'idCiudad'=>43,
                'nombreciudad'=>'Punitaqui',
                'idProvincia'=> 13,
             ],

             [
                'idCiudad'=>44,
                'nombreciudad'=>'Río Hurtado',
                'idProvincia'=> 13,
             ],

             [
                'idCiudad'=>45,
                'nombreciudad'=>'Valparaíso',
                'idProvincia'=> 14,
             ],
             [
                'idCiudad'=>46,
                'nombreciudad'=>'Casablanca',
                'idProvincia'=> 14,
             ],
             [
                'idCiudad'=>47,
                'nombreciudad'=>'Concón',
                'idProvincia'=> 14,
             ],
             [
                'idCiudad'=>48,
                'nombreciudad'=>'Juan Fernández',
                'idProvincia'=> 14,
             ],
             [
                'idCiudad'=>49,
                'nombreciudad'=>'Puchuncaví',
                'idProvincia'=> 14,
             ],
             [
                'idCiudad'=>50,
                'nombreciudad'=>'Quilpué',
                'idProvincia'=> 21,
             ],
             [
                'idCiudad'=>51,
                'nombreciudad'=>'Quintero',
                'idProvincia'=> 14,
             ],
             [
                'idCiudad'=>52,
                'nombreciudad'=>'Villa Alemana',
                'idProvincia'=> 21,
             ],
             [
                'idCiudad'=>53,
                'nombreciudad'=>'Viña del Mar',
                'idProvincia'=> 14,
             ],
             [
                'idCiudad'=>54,
                'nombreciudad'=>'Isla de Pascua',
                'idProvincia'=> 15,
             ],
             [
                'idCiudad'=>55,
                'nombreciudad'=>'Los Andes',
                'idProvincia'=> 16,
             ],
             [
                'idCiudad'=>56,
                'nombreciudad'=>'Calle Larga',
                'idProvincia'=> 16,
             ],
             [
                'idCiudad'=>57,
                'nombreciudad'=>'Rinconada',
                'idProvincia'=> 16,
             ],
             [
                'idCiudad'=>58,
                'nombreciudad'=>'San Esteban',
                'idProvincia'=> 16,
             ],
             [
                'idCiudad'=>59,
                'nombreciudad'=>'La Ligua',
                'idProvincia'=> 17,
             ],
             [
                'idCiudad'=>60,
                'nombreciudad'=>'Cabildo',
                'idProvincia'=> 17,
             ],
             [
                'idCiudad'=>61,
                'nombreciudad'=>'Papudo',
                'idProvincia'=> 17,
             ],

             [
                'idCiudad'=>62,
                'nombreciudad'=>'Petorca',
                'idProvincia'=> 17,
             ],
             [
                'idCiudad'=>63,
                'nombreciudad'=>'Zapallar',
                'idProvincia'=> 17,
             ],
             [
                'idCiudad'=>64,
                'nombreciudad'=>'Quillota',
                'idProvincia'=> 18,
             ],
             [
                'idCiudad'=>65,
                'nombreciudad'=>'Calera',
                'idProvincia'=> 18,
             ],
             [
                'idCiudad'=>66,
                'nombreciudad'=>'Hijuelas',
                'idProvincia'=> 18,
             ],
             [
                'idCiudad'=>67,
                'nombreciudad'=>'La Cruz',
                'idProvincia'=> 18,
             ],
             [
                'idCiudad'=>68,
                'nombreciudad'=>'Limache ',
                'idProvincia'=> 21,
             ],
             [
                'idCiudad'=>69,
                'nombreciudad'=>'Nogales ',
                'idProvincia'=> 18,
             ],
             [
                'idCiudad'=>70,
                'nombreciudad'=>'Olmué ',
                'idProvincia'=> 21,
             ],
             [
                'idCiudad'=>71,
                'nombreciudad'=>'San Antonio ',
                'idProvincia'=> 19,
             ],
             [
                'idCiudad'=>72,
                'nombreciudad'=>'Algarrobo ',
                'idProvincia'=> 19,
             ],
             [
             'idCiudad'=>73,
             'nombreciudad'=>'Cartagena ',
             'idProvincia'=> 19,
             ],
             [
             'idCiudad'=>74,
             'nombreciudad'=>'El Quisco ',
             'idProvincia'=> 19,
             ],
             [
                'idCiudad'=>75,
                'nombreciudad'=>'El Tabo ',
                'idProvincia'=> 19,
             ],

             [
                'idCiudad'=>76,
                 'nombreciudad'=>'Santo Domingo ',
                 'idProvincia'=> 19,
             ],
             [
                'idCiudad'=>77,
                 'nombreciudad'=>'San Felipe ',
                 'idProvincia'=> 20,
             ],
             [
                'idCiudad'=>78,
                 'nombreciudad'=>'Catemu ',
                 'idProvincia'=> 20,
             ],
             [
                'idCiudad'=>79,
                 'nombreciudad'=>'Llaillay ',
                 'idProvincia'=> 20,
             ],
             [
                'idCiudad'=>80,
                 'nombreciudad'=>'Panquehue ',
                 'idProvincia'=> 20,
             ],
             [
                'idCiudad'=>81,
                 'nombreciudad'=>'Putaendo ',
                 'idProvincia'=> 20,
             ],
             [
                'idCiudad'=>82,
                 'nombreciudad'=>'Santa María ',
                 'idProvincia'=> 20,
             ],
             [
                'idCiudad'=>83,
                 'nombreciudad'=>'Rancagua ',
                 'idProvincia'=> 28,
             ],

             [
                'idCiudad'=>84,
                 'nombreciudad'=>'Codegua ',
                 'idProvincia'=> 28,
             ],
             [
                'idCiudad'=>85,
                 'nombreciudad'=>'Coinco ',
                 'idProvincia'=> 28,
             ],
             [
                 'idCiudad'=>86,
                 'nombreciudad'=>'Coltauco ',
                 'idProvincia'=> 28,
             ],
             [
                'idCiudad'=>87,
                 'nombreciudad'=>'Doñihue ',
                 'idProvincia'=> 28,
             ],

             [
                'idCiudad'=>88,
                 'nombreciudad'=>'Graneros ',
                 'idProvincia'=> 28,
             ],
             [
                'idCiudad'=>89,
                 'nombreciudad'=>'Las Cabras ',
                 'idProvincia'=> 28,
             ],
             [
                'idCiudad'=>90,
                 'nombreciudad'=>'Machalí ',
                 'idProvincia'=> 28,
             ],
             [
                'idCiudad'=>91,
                 'nombreciudad'=>'Malloa ',
                 'idProvincia'=> 28,
             ],
             [
                'idCiudad'=>92,
                 'nombreciudad'=>'Mostazal ',
                 'idProvincia'=> 28,
             ],
             [
                'idCiudad'=>93,
                 'nombreciudad'=>'Olivar ',
                 'idProvincia'=> 28,
             ],
             [
                'idCiudad'=>94,
                 'nombreciudad'=>'Peumo ',
                 'idProvincia'=> 28,
             ],
             [
                'idCiudad'=>95,
                 'nombreciudad'=>'Pichidegua ',
                 'idProvincia'=> 28,
             ],
             [
                'idCiudad'=>96,
                 'nombreciudad'=>'Quinta de Tilcoco ',
                 'idProvincia'=> 28,
             ],
             [
                'idCiudad'=>97,
                 'nombreciudad'=>'Rengo ',
                 'idProvincia'=> 28,
             ],

             [
                'idCiudad'=>98,
                 'nombreciudad'=>'Requínoa ',
                 'idProvincia'=> 28,
             ],

             [
                'idCiudad'=>99,
                 'nombreciudad'=>'San Vicente ',
                 'idProvincia'=> 28,
             ],

             [
                'idCiudad'=>100,
                 'nombreciudad'=>'Pichilemu ',
                 'idProvincia'=> 29,
             ],
             [
                'idCiudad'=>101,
                 'nombreciudad'=>'La Estrella ',
                 'idProvincia'=> 29,
             ],
             [
                'idCiudad'=>102,
                 'nombreciudad'=>'Litueche ',
                 'idProvincia'=> 29,
             ],
             [
                'idCiudad'=>103,
                 'nombreciudad'=>'Marchihue ',
                 'idProvincia'=> 29,
             ],
             [
                'idCiudad'=>104,
                 'nombreciudad'=>'Navidad ',
                 'idProvincia'=> 29,
             ],
             [
                'idCiudad'=>105,
                 'nombreciudad'=>'Paredones ',
                 'idProvincia'=> 29,
             ],
             [
                'idCiudad'=>106,
                 'nombreciudad'=>'San Fernando ',
                 'idProvincia'=> 31,
             ],
             [
                'idCiudad'=>107,
                 'nombreciudad'=>'Chépica ',
                 'idProvincia'=> 31,
             ],
             [
                'idCiudad'=>108,
                 'nombreciudad'=>'Chimbarongo ',
                 'idProvincia'=> 31,
             ],
             [
                'idCiudad'=>109,
                 'nombreciudad'=>'Lolol',
                 'idProvincia'=> 31,
             ],
             [
                'idCiudad'=>110,
                 'nombreciudad'=>'Nancagua ',
                 'idProvincia'=> 31,
             ],
             [
                'idCiudad'=>111,
                 'nombreciudad'=>'Palmilla ',
                 'idProvincia'=> 31,
             ],
             [
                'idCiudad'=>112,
                 'nombreciudad'=>'Peralillo ',
                 'idProvincia'=> 31,
             ],
             [
                'idCiudad'=>113,
                 'nombreciudad'=>'Placilla ',
                 'idProvincia'=> 31,
             ],
             [
                'idCiudad'=>114,
                 'nombreciudad'=>'Pumanque ',
                 'idProvincia'=> 31,
             ],
             [
                'idCiudad'=>115,
                 'nombreciudad'=>'Santa Cruz ',
                 'idProvincia'=> 31,
             ],
             [
                'idCiudad'=>116,
                 'nombreciudad'=>'Talca ',
                 'idProvincia'=> 32,
             ],
             [
                'idCiudad'=>117,
                 'nombreciudad'=>'Constitución ',
                 'idProvincia'=> 32,
             ],
             [
                'idCiudad'=>118,
                 'nombreciudad'=>'Curepto ',
                 'idProvincia'=> 32,
             ],
             [
                'idCiudad'=>119,
                 'nombreciudad'=>'Empedrado',
                 'idProvincia'=> 32,
             ],
             [
                'idCiudad'=>120,
                 'nombreciudad'=>'Maule ',
                 'idProvincia'=> 32,
             ],
             [
                'idCiudad'=>121,
                 'nombreciudad'=>'Pelarco ',
                 'idProvincia'=> 32,
             ],
             [
                'idCiudad'=>122,
                 'nombreciudad'=>'Pencahue ',
                 'idProvincia'=> 32,
             ],
             [
                'idCiudad'=>123,
                 'nombreciudad'=>'Río Claro ',
                 'idProvincia'=> 32,
             ],
             [
                'idCiudad'=>124,
                 'nombreciudad'=>'San Clemente ',
                 'idProvincia'=> 32,
             ],
             [
                'idCiudad'=>125,
                 'nombreciudad'=>'Cauquenes ',
                 'idProvincia'=> 33,
             ],
             [
                'idCiudad'=>126,
                 'nombreciudad'=>'Pelarco ',
                 'idProvincia'=> 33,
             ],
             [
                'idCiudad'=>127,
                 'nombreciudad'=>'Chanco ',
                 'idProvincia'=> 33,
             ],
             [
                'idCiudad'=>128,
                 'nombreciudad'=>'Pelluhue ',
                 'idProvincia'=> 33,
             ],
             [
                'idCiudad'=>129,
                 'nombreciudad'=>'Curicó ',
                 'idProvincia'=> 34,
             ],
             [
                'idCiudad'=>130,
                 'nombreciudad'=>'Hualañé ',
                 'idProvincia'=> 34,
             ],
             [
                'idCiudad'=>131,
                 'nombreciudad'=>'Licantén ',
                 'idProvincia'=> 34,
             ],
             [
                'idCiudad'=>132,
                 'nombreciudad'=>'Molina ',
                 'idProvincia'=> 34,
             ],
             [
                'idCiudad'=>133,
                 'nombreciudad'=>'Rauco ',
                 'idProvincia'=> 34,
             ],
             [
                'idCiudad'=>134,
                 'nombreciudad'=>'Romeral ',
                 'idProvincia'=> 34,
             ],
             [
                'idCiudad'=>135,
                 'nombreciudad'=>'Sagrada Familia ',
                 'idProvincia'=> 34,
             ],
             [
                'idCiudad'=>136,
                 'nombreciudad'=>'Teno ',
                 'idProvincia'=> 34,
             ],
             [
                'idCiudad'=>137,
                 'nombreciudad'=>'Vichuquén ',
                 'idProvincia'=> 34,
             ],
             [
                'idCiudad'=>138,
                 'nombreciudad'=>'Linares ',
                 'idProvincia'=> 35,
             ],
             [
                'idCiudad'=>139,
                 'nombreciudad'=>'Colbún ',
                 'idProvincia'=> 35,
             ],
             [
                'idCiudad'=>140,
                 'nombreciudad'=>'Longaví ',
                 'idProvincia'=> 35,
             ],
             [
                'idCiudad'=>141,
                 'nombreciudad'=>'Parral ',
                 'idProvincia'=> 35,
             ],
             [
                'idCiudad'=>142,
                 'nombreciudad'=>'Retiro ',
                 'idProvincia'=> 35,
             ],
             [
                'idCiudad'=>143,
                 'nombreciudad'=>'San Javier ',
                 'idProvincia'=> 35,
             ],
             [
                'idCiudad'=>144,
                 'nombreciudad'=>'Villa Alegre ',
                 'idProvincia'=> 35,
             ],
             [
                'idCiudad'=>145,
                 'nombreciudad'=>'Villa Alegre ',
                 'idProvincia'=> 35,
             ],
             [
                'idCiudad'=>146,
                 'nombreciudad'=>'Concepción',
                 'idProvincia'=> 36,
             ],
             [
                'idCiudad'=>147,
                 'nombreciudad'=>'Coronel',
                 'idProvincia'=> 36,
             ],
             [
                'idCiudad'=>148,
                 'nombreciudad'=>'Chiguayante',
                 'idProvincia'=> 36,
             ],
             [
                'idCiudad'=>149,
                 'nombreciudad'=>'Florida',
                 'idProvincia'=> 36,
             ],
             [
                'idCiudad'=>150,
                 'nombreciudad'=>'Hualqui',
                 'idProvincia'=> 36,
             ],
             [
                'idCiudad'=>151,
                 'nombreciudad'=>'Lota',
                 'idProvincia'=> 36,
             ],
             [
                'idCiudad'=>152,
                 'nombreciudad'=>'Penco',
                 'idProvincia'=> 36,
             ],
             [
                'idCiudad'=>153,
                 'nombreciudad'=>'San Pedro de la Paz',
                 'idProvincia'=> 36,
             ],
             [
                'idCiudad'=>154,
                 'nombreciudad'=>'Santa Juana',
                 'idProvincia'=> 36,
             ],
             [
                'idCiudad'=>155,
                 'nombreciudad'=>'Talcahuano',
                 'idProvincia'=> 36,
             ],
             [
                'idCiudad'=>156,
                 'nombreciudad'=>'Tomé',
                 'idProvincia'=> 36,
             ],
             [
                'idCiudad'=>157,
                 'nombreciudad'=>'Hualpén',
                 'idProvincia'=> 36,
             ],
             [
                'idCiudad'=>158,
                 'nombreciudad'=>'Lebu',
                 'idProvincia'=> 37,
             ],
             [
                'idCiudad'=>159,
                 'nombreciudad'=>'Arauco',
                 'idProvincia'=> 37,
             ],
             [
                'idCiudad'=>160,
                 'nombreciudad'=>'Cañete',
                 'idProvincia'=> 37,
             ],

             [
                'idCiudad'=>161,
                 'nombreciudad'=>'Contulmo',
                 'idProvincia'=> 37,
             ],

             [
                'idCiudad'=>162,
                 'nombreciudad'=>'Curanilahue',
                 'idProvincia'=> 37,
             ],

             [
                'idCiudad'=>163,
                 'nombreciudad'=>'Los Álamos',
                 'idProvincia'=> 37,
             ],
             [
                'idCiudad'=>164,
                 'nombreciudad'=>'Tirúa',
                 'idProvincia'=> 37,
             ],
             [
                'idCiudad'=>165,
                 'nombreciudad'=>'Los Ángeles',
                 'idProvincia'=> 38,
             ],
             [
                'idCiudad'=>166,
                 'nombreciudad'=>'Antuco',
                 'idProvincia'=> 38,
             ],
             [
                'idCiudad'=>167,
                 'nombreciudad'=>'Cabrero',
                 'idProvincia'=> 38,
             ],
             [
                'idCiudad'=>168,
                 'nombreciudad'=>'Laja',
                 'idProvincia'=> 38,
             ],
             [
                'idCiudad'=>169,
                 'nombreciudad'=>'Mulchén',
                 'idProvincia'=> 38,
             ],
             [
                'idCiudad'=>170,
                 'nombreciudad'=>'Nacimiento',
                 'idProvincia'=> 38,
             ],
             [
                'idCiudad'=>171,
                 'nombreciudad'=>'Negrete',
                 'idProvincia'=> 38,
             ],
             [
                'idCiudad'=>172,
                 'nombreciudad'=>'Quilaco',
                 'idProvincia'=> 38,
             ],
             [
                'idCiudad'=>173,
                 'nombreciudad'=>'Quilleco',
                 'idProvincia'=> 38,
             ],
             [
                'idCiudad'=>174,
                 'nombreciudad'=>'San Rosendo',
                 'idProvincia'=> 38,
             ],
             [
                'idCiudad'=>175,
                 'nombreciudad'=>'Santa Bárbara',
                 'idProvincia'=> 38,
             ],
             [
                'idCiudad'=>176,
                 'nombreciudad'=>'Tucapel',
                 'idProvincia'=> 38,
             ],
             [
                'idCiudad'=>177,
                 'nombreciudad'=>'Yumbel',
                 'idProvincia'=> 38,
             ],
             [
                'idCiudad'=>178,
                 'nombreciudad'=>'Alto Biobío',
                 'idProvincia'=> 38,
             ],
             [
                'idCiudad'=>179,
                 'nombreciudad'=>'Chillán',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>180,
                 'nombreciudad'=>'Bulnes',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>181,
                 'nombreciudad'=>'Cobquecura',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>182,
                 'nombreciudad'=>'Coelemu',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>183,
                 'nombreciudad'=>'Coihueco',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>184,
                 'nombreciudad'=>'Chillán Viejo',
                 'idProvincia'=> 39,
             ],

             [
                'idCiudad'=>185,
                 'nombreciudad'=>'El Carmen',
                 'idProvincia'=> 39,
             ],

             [
                'idCiudad'=>186,
                 'nombreciudad'=>'Ninhue',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>187,
                 'nombreciudad'=>'Ñiquén',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>188,
                 'nombreciudad'=>'Pemuco',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>189,
                 'nombreciudad'=>'Pinto',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>190,
                 'nombreciudad'=>'Portezuelo',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>191,
                 'nombreciudad'=>'Quillón',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>192,
                 'nombreciudad'=>'Quirihue',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>193,
                 'nombreciudad'=>'Ránquil',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>194,
                 'nombreciudad'=>'San Carlos',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>195,
                 'nombreciudad'=>'San Fabián',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>196,
                 'nombreciudad'=>'San Ignacio',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>197,
                 'nombreciudad'=>'San Nicolás',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>198,
                 'nombreciudad'=>'Treguaco',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>199,
                 'nombreciudad'=>'Yungay',
                 'idProvincia'=> 39,
             ],
             [
                'idCiudad'=>200,
                 'nombreciudad'=>'Temuco',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>201,
                 'nombreciudad'=>'Carahue',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>202,
                 'nombreciudad'=>'Cunco',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>203,
                 'nombreciudad'=>'Curarrehue',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>204,
                 'nombreciudad'=>'Freire',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>205,
                 'nombreciudad'=>'Galvarino',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>206,
                 'nombreciudad'=>'Gorbea',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>207,
                 'nombreciudad'=>'Lautaro',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>208,
                 'nombreciudad'=>'Loncoche',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>209,
                 'nombreciudad'=>'Melipeuco',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>210,
                 'nombreciudad'=>'Nueva Imperial',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>211,
                 'nombreciudad'=>'Padre Las Casas',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>212,
                 'nombreciudad'=>'Perquenco',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>213,
                 'nombreciudad'=>'Pitrufquén',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>214,
                 'nombreciudad'=>'Pucón',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>215,
                 'nombreciudad'=>'Saavedra',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>216,
                 'nombreciudad'=>'Teodoro Schmidt',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>217,
                 'nombreciudad'=>'Toltén',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>218,
                 'nombreciudad'=>'Vilcún',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>219,
                 'nombreciudad'=>'Villarrica',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>220,
                 'nombreciudad'=>'Cholchol',
                 'idProvincia'=> 40,
             ],
             [
                'idCiudad'=>221,
                 'nombreciudad'=>'Angol',
                 'idProvincia'=> 41,
             ],
             [
                'idCiudad'=>222,
                 'nombreciudad'=>'Collipulli',
                 'idProvincia'=> 41,
             ],
             [
                'idCiudad'=>223,
                 'nombreciudad'=>'Curacautín',
                 'idProvincia'=> 41,
             ],
             [
                'idCiudad'=>224,
                 'nombreciudad'=>'Ercilla',
                 'idProvincia'=> 41,
             ],
             [
                'idCiudad'=>225,
                 'nombreciudad'=>'Lonquimay',
                 'idProvincia'=> 41,
             ],
             [
                'idCiudad'=>226,
                 'nombreciudad'=>'Los Sauces',
                 'idProvincia'=> 41,
             ],
             [
                'idCiudad'=>227,
                 'nombreciudad'=>'Lumaco',
                 'idProvincia'=> 41,
             ],
             [
                'idCiudad'=>228,
                 'nombreciudad'=>'Purén',
                 'idProvincia'=> 41,
             ],
             [
                'idCiudad'=>229,
                 'nombreciudad'=>'Renaico',
                 'idProvincia'=> 41,
             ],
             [
                'idCiudad'=>230,
                 'nombreciudad'=>'Traiguén',
                 'idProvincia'=> 41,
             ],
             [
                'idCiudad'=>231,
                 'nombreciudad'=>'Victoria',
                 'idProvincia'=> 41,
             ],
             [
                'idCiudad'=>232,
                 'nombreciudad'=>'Valdivia',
                 'idProvincia'=> 42,
             ],
             [
                'idCiudad'=>233,
                 'nombreciudad'=>'Corral',
                 'idProvincia'=> 42,
             ],
             [
                'idCiudad'=>234,
                 'nombreciudad'=>'Lanco',
                 'idProvincia'=> 43,
             ],
             [
                'idCiudad'=>235,
                 'nombreciudad'=>'Los Lagos',
                 'idProvincia'=> 43,
             ],
             [
                'idCiudad'=>236,
                 'nombreciudad'=>'Máfil',
                 'idProvincia'=> 43,
             ],
             [
                'idCiudad'=>237,
                 'nombreciudad'=>'Mariquina',
                 'idProvincia'=> 43,
             ],
             [
                'idCiudad'=>238,
                 'nombreciudad'=>'Paillaco',
                 'idProvincia'=> 42,
             ],
             [
                'idCiudad'=>239,
                 'nombreciudad'=>'Panguipulli',
                 'idProvincia'=> 42,
             ],
             [
                'idCiudad'=>240,
                 'nombreciudad'=>'La Unión',
                 'idProvincia'=> 42,
             ],
             [
                'idCiudad'=>241,
                 'nombreciudad'=>'Futrono',
                 'idProvincia'=> 42,
             ],
             [
                'idCiudad'=>242,
                 'nombreciudad'=>'Lago Ranco',
                 'idProvincia'=> 42,
             ],
             [
                'idCiudad'=>243,
                 'nombreciudad'=>'Río Bueno',
                 'idProvincia'=> 41,
             ],
             [
                'idCiudad'=>244,
                 'nombreciudad'=>'Puerto Montt',
                 'idProvincia'=> 42,
             ],
             [
                'idCiudad'=>245,
                 'nombreciudad'=>'Calbuco',
                 'idProvincia'=> 44,
             ],
             [
                'idCiudad'=>246,
                 'nombreciudad'=>'Cochamó',
                 'idProvincia'=> 44,
             ],
             [
                'idCiudad'=>247,
                 'nombreciudad'=>'Fresia',
                 'idProvincia'=> 44,
             ],
             [
                'idCiudad'=>248,
                 'nombreciudad'=>'Frutillar',
                 'idProvincia'=> 44,
             ],
             [
                'idCiudad'=>249,
                 'nombreciudad'=>'Los Muermos',
                 'idProvincia'=> 44,
             ],
             [
                'idCiudad'=>250,
                 'nombreciudad'=>'Llanquihue',
                 'idProvincia'=> 44,
             ],
             [
                'idCiudad'=>251,
                 'nombreciudad'=>'Maullín',
                 'idProvincia'=> 44,
             ],
             [
                'idCiudad'=>252,
                 'nombreciudad'=>'Puerto Varas',
                 'idProvincia'=> 44,
             ],

             [
                'idCiudad'=>253,
                 'nombreciudad'=>'Castro',
                 'idProvincia'=> 45,
             ],

             [
                'idCiudad'=>254,
                 'nombreciudad'=>'Ancud',
                 'idProvincia'=> 45,
             ],

             [
                'idCiudad'=>255,
                 'nombreciudad'=>'Chonchi',
                 'idProvincia'=> 45,
             ],
             [
                'idCiudad'=>256,
                 'nombreciudad'=>'Curaco de Vélez',
                 'idProvincia'=> 45,
             ],
             [
                'idCiudad'=>257,
                 'nombreciudad'=>'Dalcahue',
                 'idProvincia'=> 45,
             ],
             [
                'idCiudad'=>258,
                 'nombreciudad'=>'Puqueldón',
                 'idProvincia'=> 45,
             ],
             [
                'idCiudad'=>259,
                 'nombreciudad'=>'Queilén',
                 'idProvincia'=> 45,
             ],
             [
                'idCiudad'=>260,
                 'nombreciudad'=>'Quellón',
                 'idProvincia'=> 45,
             ],
             [
                'idCiudad'=>261,
                 'nombreciudad'=>'Quemchi',
                 'idProvincia'=> 45,
             ],
             [
                'idCiudad'=>262,
                 'nombreciudad'=>'Quinchao',
                 'idProvincia'=> 45,
             ],

             [
                'idCiudad'=>263,
                 'nombreciudad'=>'Osorno',
                 'idProvincia'=> 46,
             ],
             [
                'idCiudad'=>264,
                 'nombreciudad'=>'Puerto Octay',
                 'idProvincia'=> 46,
             ],
             
             [
                'idCiudad'=>265,
                 'nombreciudad'=>'Purranque',
                 'idProvincia'=> 46,
             ],
             [
                'idCiudad'=>266,
                 'nombreciudad'=>'Puyehue',
                 'idProvincia'=> 46,
             ],
             [
                'idCiudad'=>267,
                 'nombreciudad'=>'Río Negro',
                 'idProvincia'=> 46,
             ],
             [
                'idCiudad'=>268,
                 'nombreciudad'=>'San Juan de la Costa',
                 'idProvincia'=> 46,
             ],
             [
                'idCiudad'=>269,
                 'nombreciudad'=>'San Pablo',
                 'idProvincia'=> 46,
             ],
             [
                'idCiudad'=>270,
                 'nombreciudad'=>'Chaitén',
                 'idProvincia'=> 47,
             ],
             [
                'idCiudad'=>271,
                 'nombreciudad'=>'Futaleufú',
                 'idProvincia'=> 47,
             ],
             [
                'idCiudad'=>272,
                 'nombreciudad'=>'Hualaihué',
                 'idProvincia'=> 47,
             ],
             [
                'idCiudad'=>273,
                 'nombreciudad'=>'Palena',
                 'idProvincia'=> 47,
             ],
             [
                'idCiudad'=>274,
                 'nombreciudad'=>'Coyhaique',
                 'idProvincia'=> 48,
             ],
             [
                'idCiudad'=>275,
                 'nombreciudad'=>'Lago Verde',
                 'idProvincia'=> 48,
             ],
             [
                'idCiudad'=>276,
                 'nombreciudad'=>'Aysén',
                 'idProvincia'=> 49,
             ],
             [
                'idCiudad'=>277,
                 'nombreciudad'=>'Cisnes',
                 'idProvincia'=> 49,
             ],
             [
                'idCiudad'=>278,
                 'nombreciudad'=>'Guaitecas',
                 'idProvincia'=> 49,
             ],
             [
                'idCiudad'=>279,
                 'nombreciudad'=>'Cochrane',
                 'idProvincia'=> 50,
             ],
             [
                'idCiudad'=>280,
                 'nombreciudad'=>'O’Higgins',
                 'idProvincia'=> 50,
             ],
             [
                'idCiudad'=>281,
                 'nombreciudad'=>'Tortel',
                 'idProvincia'=> 50,
             ],
             
             [
                'idCiudad'=>282,
                 'nombreciudad'=>'Chile Chico',
                 'idProvincia'=> 51,
             ],
             [
                'idCiudad'=>283,
                 'nombreciudad'=>'Río Ibáñez',
                 'idProvincia'=> 51,
             ],
             [
                'idCiudad'=>284,
                 'nombreciudad'=>'Punta Arenas',
                 'idProvincia'=> 52,
             ],
             
             [
                'idCiudad'=>285,
                 'nombreciudad'=>'Laguna Blanca',
                 'idProvincia'=> 52,
             ],
             
             [
                'idCiudad'=>286,
                 'nombreciudad'=>'Río Verde',
                 'idProvincia'=> 52,
             ],
             
             [
                'idCiudad'=>287,
                 'nombreciudad'=>'San Gregorio',
                 'idProvincia'=> 52,
             ],
             
             [
                'idCiudad'=>288,
                 'nombreciudad'=>'Cabo de Hornos (Ex - Navarino)',
                 'idProvincia'=> 53,
             ],
             
             [
                'idCiudad'=>289,
                 'nombreciudad'=>'Antártica',
                 'idProvincia'=> 53,
             ],
             [
                'idCiudad'=>290,
                 'nombreciudad'=>'Porvenir',
                 'idProvincia'=> 54,
             ],
             
             [
                'idCiudad'=>291,
                 'nombreciudad'=>'Primavera',
                 'idProvincia'=> 54,
             ],
             
             [
                'idCiudad'=>292,
                 'nombreciudad'=>'Timaukel',
                 'idProvincia'=> 54,
             ],
             
             [
                'idCiudad'=>293,
                 'nombreciudad'=>'Natales',
                 'idProvincia'=> 55,
             ],
             
             [
                'idCiudad'=>294,
                 'nombreciudad'=>'Torres del Paine',
                 'idProvincia'=> 55,
             ],
             
             [
                'idCiudad'=>295,
                 'nombreciudad'=>'Santiago',
                 'idProvincia'=> 22,
             ],
             
             [
                'idCiudad'=>296,
                 'nombreciudad'=>'Cerrillos',
                 'idProvincia'=> 22,
             ],
             
             [
                'idCiudad'=>297,
                 'nombreciudad'=>'Cerro Navia',
                 'idProvincia'=> 22,
             ],
             
             [
                'idCiudad'=>298,
                 'nombreciudad'=>'Conchalí',
                 'idProvincia'=> 22,
             ],
             
             [
                'idCiudad'=>299,
                 'nombreciudad'=>'El Bosque',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>300,
                 'nombreciudad'=>'El Bosque',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>301,
                 'nombreciudad'=>'Huechuraba',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>302,
                 'nombreciudad'=>'Independencia',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>303,
                 'nombreciudad'=>'La Cisterna',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>304,
                 'nombreciudad'=>'La Florida',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>305,
                 'nombreciudad'=>'La Granja',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>306,
                 'nombreciudad'=>'La Pintana',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>307,
                 'nombreciudad'=>'La Reina',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>308,
                 'nombreciudad'=>'Las Condes',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>309,
                 'nombreciudad'=>'Lo Barnechea',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>310,
                 'nombreciudad'=>'Lo Espejo',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>311,
                 'nombreciudad'=>'Lo Prado',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>312,
                 'nombreciudad'=>'Macul',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>313,
                 'nombreciudad'=>'Maipú',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>314,
                 'nombreciudad'=>'Ñuñoa',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>315,
                 'nombreciudad'=>'Pedro Aguirre Cerda',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>316,
                 'nombreciudad'=>'Peñalolén',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>317,
                 'nombreciudad'=>'Providencia',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>318,
                 'nombreciudad'=>'Pudahuel',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>319,
                 'nombreciudad'=>'Quilicura',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>320,
                 'nombreciudad'=>'Quinta Normal',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>321,
                 'nombreciudad'=>'Recoleta',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>322,
                 'nombreciudad'=>'Renca',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>323,
                 'nombreciudad'=>'San Joaquín',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>324,
                 'nombreciudad'=>'San Miguel',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>325,
                 'nombreciudad'=>'San Ramón',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>326,
                 'nombreciudad'=>'Vitacura',
                 'idProvincia'=> 22,
             ],
             [
                'idCiudad'=>327,
                 'nombreciudad'=>'Puente Alto',
                 'idProvincia'=> 23,
             ],
             [
                'idCiudad'=>328,
                 'nombreciudad'=>'Pirque',
                 'idProvincia'=> 23,
             ],

             
        ]);
    }
}
