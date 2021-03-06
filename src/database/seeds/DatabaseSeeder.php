<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(OffersTableSeeder::class);
        $this->call(BandsTableSeeder::class);
        $this->call(UserDetailsTableSeeder::class);
        $this->call(InstrumentsTableSeeder::class);
        $this->call(CountrysTableSeeder::class);
        $this->call(StatesTableSeeder::class);
    }
}
