<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(UserSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(CreditCardsSeeder::class);
        $this->call(InvoicesSeeder::class);
        $this->call(PaymentsSeeder::class);
        $this->call(PlansSeeder::class);
        $this->call(PlanDetailsSeeder::class);
        $this->call(RecordsSeeder::class);
        $this->call(SubscriptionsSeeder::class);
        $this->call(PermissionSeeder::class);

    }
}
