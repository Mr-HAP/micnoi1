<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*        App\Role::create([
            'name' => 'admin',
        ]);
        App\Role::create([
            'name' => 'musico',
        ]);
        App\Role::create([
            'name' => 'fan',
        ]);*/
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrador';
        $role->save();

        $role = new Role();
        $role->name = 'musico';
        $role->description = 'Perfil de Musico';
        $role->save();

        $role = new Role();
        $role->name = 'fan';
        $role->description = 'Perfil de Fan';
        $role->save();
    }
}
