<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Role;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin=Role::create(["name"=>"admin"]);
        $manager=Role::create(["name"=>"manager"]);
        $developer =Role::create(["name"=>"developer"]);
        Permission::create(["name"=>"dashboard"])->syncRoles([$admin, $manager, $developer]);
        /* Replicar para todos los permisos
        Permission::create(["name"=>"dashboard.index,edit"]); */

    }
}
