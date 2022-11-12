<?php

namespace Database\Seeders;

use App\Models\PlanDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Plan Basic
        PlanDetail::create([
            'description' => 'Traducción de texto limitada hasta 5000 caracteres',
            'id_plan' => 1,
        ]);

        PlanDetail::create([
            'description' => 'Lectura de tus traducciones',
            'id_plan' => 1,
        ]);

        PlanDetail::create([
            'description' => 'Acceso a tu historial de traducciones',
            'id_plan' => 1,
        ]);

        # Plan Standard
        PlanDetail::create([
            'description' => 'Traducción de texto ilimitada',
            'id_plan' => 2,
        ]);

        PlanDetail::create([
            'description' => 'Lectura de tus traducciones',
            'id_plan' => 2,
        ]);

        PlanDetail::create([
            'description' => 'Traduccion por voz',
            'id_plan' => 2,
        ]);

        PlanDetail::create([
            'description' => 'Acceso a tu historial de traducciones',
            'id_plan' => 2,
        ]);

        # Plan Premiun
        PlanDetail::create([
            'description' => 'Traducción de texto ilimitada',
            'id_plan' => 3,
        ]);

        PlanDetail::create([
            'description' => 'Lectura de tus traducciones',
            'id_plan' => 3,
        ]);

        PlanDetail::create([
            'description' => 'Traduccion de archivos',
            'id_plan' => 3,
        ]);

        PlanDetail::create([
            'description' => 'Traduccion por voz',
            'id_plan' => 3,
        ]);

        PlanDetail::create([
            'description' => 'Traduccion de imagenes',
            'id_plan' => 3,
        ]);

        PlanDetail::create([
            'description' => 'Acceso a tu historial de traducciones',
            'id_plan' => 3,
        ]);
    }
}
