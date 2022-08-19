<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Roles
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Member']);

        Permission::create(['name' => 'dashboard'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'affiliates'])->syncRoles([$role1]);

        Permission::create(['name' => 'edit'])->syncRoles([$role1]);

        Permission::create(['name' => 'upload'])->syncRoles([$role1]);
       
    }
}
