<?php

use App\Role;
use App\Band;
use Illuminate\Database\Seeder;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_musico = Role::where('name', 'musico')->first();

        $band = new Band();
        $band->country = 'Chile';
        $band->name = 'Los Fritanga';
        $band->region = 'metropo';
        $band->city = 'Santiago';
        $band->photo = 'http://lorempixel.com/400/200/';
        $band->video = '-';
        $band->songs_number = 1;
        $band->members = 2;
        $band->eps = 2;
        $band->discs = 4;
        $band->facebook = 'asdfghjklñ';
        $band->instagram = 'fghjklñ{';
        $band->youtube = 'zfghjklñ';
        $band->tocatas = 'xxxx';
        $band->concerts = 'ccccc';
        $band->hosting = true;
        $band->amplification = true;
        $band->id_admin_band = $role_musico->users->first()->id;
        $band->save();

    }
}
