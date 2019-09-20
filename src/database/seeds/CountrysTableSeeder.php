<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountrysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = new Country();
        $country->country = 'Chile';
        $country->save();
    }
}
