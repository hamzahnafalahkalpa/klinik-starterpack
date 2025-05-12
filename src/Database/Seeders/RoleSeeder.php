<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Illuminate\Database\Seeder;
use Zahzah\LaravelPermission\LaravelPermission;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roles = include_once(__DIR__.'/data/roles.php');
        LaravelPermission::useRole()->setGuard(['parent_id','name'],true)->adds($roles);
    }
}
