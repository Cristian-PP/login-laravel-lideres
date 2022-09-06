<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Gabriel',
            'lastname'  => 'Robles',
            'clave'     => 'G10',
            'email'     => 'grobles@capmega.com',
            // 'status'     => 'Activo',
            'password'  => bcrypt('password'),
        ])->assignRole('Admin');


        User::create([
            'name'      => 'Cristian',
            'lastname'  => 'Pérez',
            'clave'     => 'Cpp10',
            'email'     => 'cperez@figand.com',
            // 'status'     => 'Activo',
            'password'  => bcrypt('123456789'),
        ])->assignRole('Admin');


       
    }
}