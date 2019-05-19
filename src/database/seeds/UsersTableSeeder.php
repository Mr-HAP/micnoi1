<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_fan = Role::where('name', 'fan')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_musico = Role::where('name', 'musico')->first();



        $user = new User();
        $user->name = 'AdminUser';
        $user->email = 'hernan@hap.cl';
        $user->password = bcrypt('123');
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Fan-1';
        $user->email = 'fan1@fan.cl';
        $user->password = bcrypt('123');
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);
        $user->save();
        $user->roles()->attach($role_fan);

        $user = new User();
        $user->name = 'Musico-1';
        $user->email = 'musico1@musico.cl';
        $user->password = bcrypt('123');
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);
        $user->save();
        $user->roles()->attach($role_musico);

        factory(App\User::class, 10)->create();

    }
}
