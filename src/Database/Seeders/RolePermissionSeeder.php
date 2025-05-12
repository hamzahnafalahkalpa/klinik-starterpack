<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RolePermissionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role   = app(config('database.models.Role'));
        $client = $role->where('name','Client')->first();
        $roles  = $role->parentId($client->getKey())->get();
        foreach ($roles as $role_model) {
            $filename  = Str::snake(STR::lower($role_model->name),'-');
            $file_path = __DIR__.'/data/role-permission/'.$filename.'.php';
            if (\file_exists($file_path)){
                $permissions = include_once $file_path;
                try {
                    $role_model->syncPermissions($permissions);
                } catch (\Throwable $th) {
                    throw $th;
                }
            }else{
                // throw new \Exception('file '.$filename.' name not found');
            }
        }
    }
}
