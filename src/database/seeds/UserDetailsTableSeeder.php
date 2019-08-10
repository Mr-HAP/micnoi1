<?php

use App\Role;
use App\User;
use App\UserDetail;
use Illuminate\Database\Seeder;

class UserDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $users->each(function (User $user){
            $detail = New UserDetail();
            $detail->id_user = $user->id;
            $detail->country = 'Chile';
            $detail->city = 'STGO';
            $detail->photo = 'feo';
            $detail->video = 'xxx';
            $detail->facebook = 'xxxx';
            $detail->instagram = 'xxxx';
            $detail->youtube = 'xxxxx';
            $detail->save();
        });



    }
}
