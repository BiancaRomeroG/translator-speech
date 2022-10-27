<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'last_name' => 'Admin',
            'phone' => '74321431',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user = User::create([
            'name' => 'Teo Javier',
            'last_name' => 'Montalvo Siles',
            'phone' => '78432632',
            'email' => 'teo@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user = User::create([
            'name' => 'Bianca',
            'last_name' => 'Romero Guzman',
            'phone' => '78432632',
            'email' => 'bianca@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user = User::create([
            'name' => 'Edson Alain',
            'last_name' => 'Sacaca Flores',
            'phone' => '74321431',
            'email' => 'edson@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user = User::create([
            'name' => 'Pedro Enrique',
            'last_name' => 'Characayo Villegas',
            'phone' => '74321454',
            'email' => 'pedro@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user = User::create([
            'name' => 'Jhasmany J.',
            'last_name' => 'Fernandez Ortega',
            'phone' => '73535236',
            'email' => 'jhasmany@gmail.com',
            'password' => bcrypt('12345678')
        ]);


        $user = User::create([
            'name' => 'Jose Fernando',
            'last_name' => 'Chile Laime',
            'phone' => '79721431',
            'email' => 'jose@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user = User::create([
            'name' => 'Carlos Andres',
            'last_name' => 'Vargas Muyuro',
            'phone' => '75751431',
            'email' => 'carlos@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
