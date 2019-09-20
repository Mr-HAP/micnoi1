<?php

use App\State;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();
        $states = array(
            array('name' => 'Arica y Parinacota','country_id' => 1),
            array('name' => 'Tarapacá','country_id' => 1),
            array('name' => 'Antofagasta','country_id' => 1),
            array('name' => 'Atacama','country_id' => 1),
            array('name' => 'Coquimbo','country_id' => 1),
            array('name' => 'Valparaiso','country_id' => 1),
            array('name' => 'Metropolitana de Santiago','country_id' => 1),
            array('name' => 'Libertador General Bernardo O\'Higgins','country_id' => 1),
            array('name' => 'Maule','country_id' => 1),
            array('name' => 'Biobío','country_id' => 1),
            array('name' => 'La Araucanía','country_id' => 1),
            array('name' => 'Los Ríos','country_id' => 1),
            array('name' => 'Los Lagos','country_id' => 1),
            array('name' => 'Aisén del General Carlos Ibáñez del Campo','country_id' => 1),
            array('name' => 'Magallanes y de la Antártica Chilena','country_id' => 1)
        );
        DB::table('states')->insert($states);
    }
}
