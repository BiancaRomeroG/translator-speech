<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrador = Role::create(['name' => 'administrador']);
        $basico = Role::create(['name' => 'basico']);
        $estandar = Role::create(['name' => 'estandar']);
        $premium = Role::create(['name' => 'premium']);
    }
}
