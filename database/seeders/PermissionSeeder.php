<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //creacion de permisos y asignacion a los respectivos roles
         Permission::create(['name' => 'Traducción de texto limitada'])->syncRoles(['administrador','free','basico']);
         Permission::create(['name' => 'Lectura de traducciones'])->syncRoles(['administrador','basico','estandar','premium']);
         Permission::create(['name' => 'Acceso a historial'])->syncRoles(['administrador','basico','estandar','premium']);
        
         Permission::create(['name' => 'Traducción de texto ilimitada'])->syncRoles(['administrador','estandar','premium']);
         Permission::create(['name' => 'Traducción por voz'])->syncRoles(['administrador','estandar','premium']);
     
         Permission::create(['name' => 'Traducción por imagenes'])->syncRoles(['administrador','premium']);
         Permission::create(['name' => 'Traduccion de archivos'])->syncRoles(['administrador','premium']);
    }
}
