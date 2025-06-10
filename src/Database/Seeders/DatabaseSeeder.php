<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hanafalah\ModuleEmployee\Seeders\EmployeeTypeSeeder;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        config(['micro-tenant.installing' => true]);
        $this->call([
            WorkspaceSeeder::class,
            ApiAccessSeeder::class,
            PermissionSeeder::class,
            ItemStuffSeeder::class,
            PatientTypeSeeder::class,
            PatientTypeServiceSeeder::class,
            MedicServiceSeeder::class,
            ServiceClusterSeeder::class,
            PaymentMethodSeeder::class,
            FormSeeder::class,
            ExaminationStuffSeeder::class,
            MasterVaccineSeeder::class,
            AnatomySeeder::class,
            RegionalSeeder::class,
            EncodingSeeder::class,
            RoleSeeder::class,
            EmployeeSeeder::class,
            EmployeeTypeSeeder::class
        ]);
    }
}
