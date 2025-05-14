<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            WorkspaceSeeder::class,
            // ApiAccessSeeder::class,
            // PermissionSeeder::class,
            // ItemStuffSeeder::class,
            // // MedicServiceSeeder::class,
            // PaymentMethodSeeder::class,
            // AnatomySeeder::class,
            // RegionalSeeder::class,
            // EncodingSeeder::class,
            // RoleSeeder::class,
            // EmployeeSeeder::class
        ]);
    }
}
