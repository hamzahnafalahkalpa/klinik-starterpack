<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionalSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $files = ['provinces', 'districts', 'subdistricts', 'villages'];
        foreach ($files as $file) {
            $sql = file_get_contents(__DIR__ . '/data/' . $file . '.sql');
            DB::unprepared($sql);
        }
    }
}
