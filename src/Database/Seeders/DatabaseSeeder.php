<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hanafalah\ModuleEmployee\Seeders\EmployeeTypeSeeder;
use Hanafalah\ModulePayment\Database\Seeders\DatabaseSeeder as ModulePaymentSeeder;

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
            RoleSeeder::class,
            ItemStuffSeeder::class,
            PatientTypeSeeder::class,
            PatientTypeServiceSeeder::class,
            MedicServiceSeeder::class,
            ServiceClusterSeeder::class,
            PaymentMethodSeeder::class,
            ProfessionSeeder::class,
            FormSeeder::class,
            ExaminationStuffSeeder::class,
            MasterVaccineSeeder::class,
            AnatomySeeder::class,
            RegionalSeeder::class,
            EncodingSeeder::class,
            EmployeeSeeder::class,
            EmployeeTypeSeeder::class,
            ModulePaymentSeeder::class,
            PaymentMethodSeeder::class,
        ]);
    }
}
