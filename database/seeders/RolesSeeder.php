<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

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

         //rol para usuarios que se registran en la plataforma
         $inicial = Role::create(['name' =>'free']);  

          //asignacion de roles a usuarios ya registrados
          $user = User::where('name','Admin')->first();
          $user->assignRole('administrador');
  
          $user = User::where('name','Teo Javier')->first();
          $user->assignRole('free');
     
          $user = User::where('name','Bianca')->first();
          $user->assignRole('free');
  
          $user = User::where('name','Edson Alain')->first();
          $user->assignRole('free');
  
          $user = User::where('name','Pedro Enrique')->first();
          $user->assignRole('free');
  
          $user = User::where('name','Jhasmany J.')->first();
          $user->assignRole('free');
  
          $user = User::where('name','Carlos Andres')->first();
          $user->assignRole('free');
      
    }
}
