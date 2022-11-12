<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'plan_id' => 'price_1M2JW8A0BviS1KAZ33zbhkbg',
            'name' => 'basic',
            'billing_method' => 'month',
            'interval_count' => 1,
            'price' => (3 * 100),
            'currency' => 'usd',
            'description' => 'En este plan basico puedes acceder a nuestras funcionalidades basicas de traduccion:',
        ]);

        Plan::create([
            'plan_id' => 'price_1M2JWvA0BviS1KAZBqHiQ7t3',
            'name' => 'standard',
            'billing_method' => 'month',
            'interval_count' => 1,
            'price' => (7 * 100),
            'currency' => 'usd',
            'description' => 'Nuestro mas popular con todas nuestras mejores funcionalidades en traduccion:',
        ]);

        Plan::create([
            'plan_id' => 'price_1M2JXJA0BviS1KAZPfhPVliC',
            'name' => 'premium',
            'billing_method' => 'month',
            'interval_count' => 1,
            'price' => (15 * 100),
            'currency' => 'usd',
            'description' => 'Nuestro plan estandar contiene las funcionalidades mejoradas para tus traducciones:',
        ]);
    }
}
