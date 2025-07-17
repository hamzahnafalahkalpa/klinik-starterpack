<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Manajemen Pegawai', 
    'alias'          => 'employee-management',
    'icon'       => 'clarity:employee-group-solid',
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/employee-management/employee.php'),
        include(__DIR__.'/employee-management/schedule.php')
    ]
];

