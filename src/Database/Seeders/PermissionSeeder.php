<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Illuminate\Database\Seeder;
use Zahzah\LaravelPermission\Contracts\Permission;
use Zahzah\LaravelPermission\LaravelPermission;

class PermissionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $permissions = include_once(__DIR__.'/data/permission.php');
        app(Permission::class)->prepareStorePermission($permissions);
        // LaravelPermission::usePermission()->setAdd('parent_id')->setGuard('alias',true)->adds($permissions);
    }
}
